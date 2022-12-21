<?php

class PaystackServices
{
    public static function initializeCharge($amount, $email, $helppo_id)
    {
        $url = "https://api.paystack.co/transaction/initialize";
        $fields = [
            "email" => "$email",
            "amount" => "$amount",
        ];

        $data = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . env('PAYSTACK_BEARER'),
            'Content-Type' => 'application/json',
        ])->post($url, $fields)->json();

        if ($data['status'] == true) {
            PaymentEntries::create(['charge_reference' => $data['data']['reference'], 'initial_charge' => 1, 'helppo_id' => $helppo_id, 'charge_access_code' => $data['data']['access_code'], 'initial_charge_url' => $data['data']['authorization_url']]);

            return $data;
        } else {
            return $data;
        }
    }
    public static function initializeChargeWebHook($hook_data)
    {
        $data = $hook_data['data'];
        $status = $hook_data['data']['status'];
        $gateway_response = $hook_data['data']['gateway_response'];
        $reference = $data['reference'];
        $amount = $data['amount'];
        $authorization = $data['authorization'];
        $authorization_code = $data['authorization']['authorization_code'];
        $customer_email = $data['customer']['email'];
        $customer_code = $data['customer']['customer_code'];
        $customer_name = $data['customer']['first_name'] . ' ' . $data['customer']['last_name'];
        $authorization_json = $authorization;
        $insert_field = ['status' => $status, 'gateway_response' => $gateway_response, 'reference' => $reference, 'amount' => $amount, 'authorization_code' => $authorization_code, 'customer_email' => $customer_email, 'customer_code' => $customer_code, 'customer_name' => $customer_name, 'authorization_json' => $authorization_json];

        $entry = PaymentEntries::where('reference', $reference)->orWhere('charge_reference', $reference)->first();
        $entry->update($insert_field);
        $entry = PaymentEntries::updateOrCreate(['charge_reference' => $reference], $insert_field);
        if ($entry->helppo_id) {
            if ($helppo = Helppo::where('helppo_id', $entry->helppo_id)->first()) {
                $helppo->paystack_auth_code = $authorization_code;
                if ($status == 'success') {
                    if ($helppo->status == -1) {
                        $helppo->status = 0;
                        $html = view('mails.verificationfeepaid', ['helppo' => $helppo, 'buyer' => $helppo->buyer])->render();
                        $files = [];
                        Helper::sendMailBySMTP($helppo->buyer->email, $helppo->buyer->first_name . " " . $helppo->buyer->last_name, 'Link your bank statement', $html, 'support@helppo.africa', [], $files);

                        $html = view('mails.linkbankstatement', ['helppo' => $helppo, 'buyer' => $helppo->buyer])->render();
                        $files = [];
                        Helper::sendMailBySMTP($helppo->buyer->email, $helppo->buyer->first_name . " " . $helppo->buyer->last_name, 'Link your bank statement', $html, 'support@helppo.africa', [], $files);
                    }
                }
                $helppo->save();
            }
        }
    }
}
