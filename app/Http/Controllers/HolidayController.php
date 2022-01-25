<?php

namespace App\Http\Controllers;

use App\Holiday;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    public function about(){

        $holidayList = Holiday::all();

        return view('holidays', compact('holidayList'));
    }
}
