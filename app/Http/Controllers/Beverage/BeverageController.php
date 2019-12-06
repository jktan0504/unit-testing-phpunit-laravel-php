<?php

namespace App\Http\Controllers\Beverage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Beverage;

class BeverageController extends Controller
{
    public function index() {
        $beverages = Beverage::all();
        return view('beverage.index');
    }
}
