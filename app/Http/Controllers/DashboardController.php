<?php

namespace App\Http\Controllers;

use App\Models\Debt;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // fetch debt status and metrics
        $paidDebts = Debt::where('status', 'paid')->count();
        $overdueDebts = Debt::where('status', 'overdue')->count();
        $inProcessDebts = Debt::where('status', 'in_process')->count();

        return view('dashboard', compact('paidDebts', 'overdueDebts', 'inProcessDebts'));
    }
}
