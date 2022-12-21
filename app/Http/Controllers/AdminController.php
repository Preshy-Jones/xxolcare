<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\admin as Admin;
use App\Models\Xxolstar as XxolStar;
use App\Models\Finance;
use App\Models\Care_givers;
use App\Models\Deep_cleaning;
use App\Models\Office_cleaning;
use App\Models\Relocation;
use App\Models\Salon;
use App\Models\Spa;
use App\Models\Standard_home_cleaning;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Faker\Generator as Faker;

class AdminController extends Controller
{

    public function dashboard()
    {
        $servicesModelNameArray = [
            'Standard_home_cleaning', 'Care_givers', 'Spa', 'Salon',
        ];
        $servicesModelNameArrayBookings = [
            'Standard_home_cleaning', 'Care_givers', 'Spa', 'Salon', 'Deep_cleaning', 'Office_cleaning', 'Relocation',
        ];
        $users = count(User::all());
        $xxolstars = count(XxolStar::all());
        $number_of_jobs = 0;
        $number_of_bookings = 0;

        for ($i = 0; $i < count($servicesModelNameArray); $i++) {
            $bookingModel = "App\Models\\" . $servicesModelNameArray[$i];
            $number_of_jobs += count($bookingModel::where('user_id', '!=', null)->where('status', 'Done')->get());
        }

        for ($i = 0; $i < count($servicesModelNameArrayBookings); $i++) {
            $bookingModel = "App\Models\\" . $servicesModelNameArrayBookings[$i];
//            if ($servicesModelNameArrayBookings[$i] === 'Relocation' || $servicesModelNameArrayBookings[$i] === 'Office_cleaning' || $servicesModelNameArrayBookings[$i] === 'Deep_cleaning') {
            $number_of_bookings += count($bookingModel::where('user_id', '!=', null)->get());
            //          }

        }
        //return compact('users', 'xxolstars', 'number_of_jobs', 'number_of_bookings');
        return view('admin.dashboard', compact('users', 'xxolstars', 'number_of_jobs', 'number_of_bookings'));

    }

    public function finance(Faker $faker, $year)
    {
        $incomeData = [];
        $expenseData = [];
        for ($i = 1; $i <= 12; $i++) {
            $incomeMonthData = Finance::where('type', 'Income')->whereYear('created_at', $year)->whereMonth('created_at', $i)->pluck('amount')->sum();
            $expenseMonthData = Finance::where('type', 'Expense')->whereYear('created_at', $year)->whereMonth('created_at', $i)->pluck('amount')->sum();
            array_push($expenseData, $incomeMonthData);
            array_push($incomeData, $expenseMonthData);
        }

//        $data = [$january, $february, $march, $april, $may, $june, $july, $august, $september, $october, $november, $december];
        $dt = Carbon::create(1975, 12, 25, 14, 15, 16);
//        return $faker->dateTime($max = 'now', $timezone = null);
        return compact('incomeData', 'expenseData');

    }

    public function xxolstars()
    {
        $xxolstars = XxolStar::all();
        return view('admin.xxolstars', ['xxolstars' => $xxolstars]);

    }
    public function documents()
    {
        return view('admin.documents');
    }

    public function clients()
    {
        return view('admin.clients');
    }

    public function jobs()
    {
        return view('admin.jobs');
    }

    public function finances()
    {
        return view('admin.finances');
    }
}
