<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}
