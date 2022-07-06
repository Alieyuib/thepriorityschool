<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data_view['page-header'] = 'School Administrator Dashboard';
        return view('dashboard.index');
    }
}
