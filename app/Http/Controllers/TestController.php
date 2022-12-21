<?php

namespace App\Http\Controllers;

use Zeevx\LaraTermii\LaraTermii;

class TestController extends Controller
{
    public $servicesKey = [
        'Standard Home cleaning' => 'standard_home_cleaning',
        'Care Givers' => 'care_givers',
        'Spa' => 'spa_service',
        'Salon' => 'salon_service',
        // 'Office_cleaning'
        // 'Relocation'
        // 'Deep_cleaning'
    ];
    public $arraykey = [
        "one" => ['bola', 'tola', 'bolu'],
        "two" => ['jim', 'pam', 'dwight', 'michael'],
        "three" => ['sheldon', 'howard', 'raj', 'penny', 'amy', 'leonard', 'bernadette'],
        "four" => ['joey', 'chandler', 'ross', 'monica', 'phoebe', 'rachel'],
    ];
    public function index()
    {
        $TERMII_API_KEY = env('TERMII_API_KEY');
        $termii = new LaraTermii($TERMII_API_KEY);
        $phone = 2348082509646;
        $message = 'hello';
        $sender = 'xxolcare';

        try {
            $TERMII_API_KEY = env('TERMII_API_KEY');
            $termii = new LaraTermii($TERMII_API_KEY);
            $phone = '2348102347260';
            $message = 'hello';
            $sender = 'xxolcare';

            //code...
        } catch (\Exception$e) {
            return $e->getMessage();
        }
        return $termii->sendMessage($phone, $sender, $message);
        return 'success';

//        return $termii->balance();

        $types = ['Income', 'Expense', 'Income', 'Expense', 'Income', 'Expense', 'Income', 'Expense'];
        $randTypes = array_rand($types, 5);
        $randomType = $types[$randTypes[2]];
        dd(gettype($randomType));
        $collection = collect([1, 2, 3]);
        return $collection;
        $array1 = ['bola', 'tola', 'bolu'];
        $array2 = ['jim', 'pam', 'dwight', 'michael'];
        $array3 = ['sheldon', 'howard', 'raj', 'penny', 'amy', 'leonard', 'bernadette'];
        $array4 = ['joey', 'chandler', 'ross', 'monica', 'phoebe', 'rachel'];

        // function mergeArrays($a, $b)
        // {

        // }

        $values = array('one', 'two', 'three', 'four');
//    return $key[$values[1]];

        $result = array_reduce($values, function ($a, $b) {
            return $a . " and " . $b;
            // return array_merge($this->arraykey[$a], $this->arraykey[$b]);
        });
    }
}
