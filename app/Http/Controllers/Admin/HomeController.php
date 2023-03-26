<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Housing;

class HomeController extends Controller
{
    public function index()
    {
        $houseList = Housing::all();
        return view('admin.houses', compact('houseList'));
    }
}
