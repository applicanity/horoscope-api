<?php

namespace App\Http\Controllers;

use App\Models\Horoscope;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function hello(Request $request)
    {
        return response()->json(['message' => 'Hello!']);
    }

    public function checkHoroscope(Request $request)
    {
        $birthday = $request->post("birthday");

        $horoscope = Horoscope::where('date_start', '<=', date('2000-m-d', strtotime($birthday)))
        ->where('date_end', '>=', date('2000-m-d', strtotime($birthday)))->first();

        if(empty($horoscope)){
            $horoscope = Horoscope::where(['name' => 'Capricorn'])->first();
        }

        return response()->json(['success' => true, 'data' => $horoscope]);
    }

}
