<?php

namespace App\Http\Controllers\Backend;

use App\Models\Araclar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    public function AdminDashboard()
    {
        return view('backend.admin_dashboard');
    }
}
