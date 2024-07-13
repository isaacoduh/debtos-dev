<?php

namespace App\Http\Controllers;

use App\Models\Debt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {

        DB::enableQueryLog();
        // fetch debt status and metrics
        $paidDebts = Debt::where('status', 'paid')->count();
        $overdueDebts = Debt::where('status', 'overdue')->count();
        $inProcessDebts = Debt::where('status', 'in_process')->count();

        $queries = DB::getQueryLog();
        // dd($queries);

        return view('dashboard', compact('paidDebts', 'overdueDebts', 'inProcessDebts'));
    }
}
