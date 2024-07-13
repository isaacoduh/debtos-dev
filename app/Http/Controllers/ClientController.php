<?php

namespace App\Http\Controllers;

use App\Models\Debt;
use App\Models\Payment;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $debts = Debt::where('client_id', auth()->id())->get();
        $payments = Payment::whereHas('debt', function($query) {
            $query->where('client_id', auth()->id());
        })->get();

        return view('client.index', compact('debts', 'payments'));
    }
}
