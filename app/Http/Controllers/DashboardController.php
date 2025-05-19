<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    return view('dashboard', [
        'campaigns' => Campaign::count(),
        'total_donasi' => Donation::sum('amount'),
        'log_aktivitas' => ActivityLog::latest()->take(10)->get(),
    ]);
}

}
