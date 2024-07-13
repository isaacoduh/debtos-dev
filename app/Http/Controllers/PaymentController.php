<?php

namespace App\Http\Controllers;

use App\Models\Debt;
use App\Models\Payment;
use Illuminate\Http\Request;
use DB;

class PaymentController extends Controller
{
    public function create() 
    {
        $debts = Debt::whereIn('id',[1,2,4,5,6,7,8,9,10])->whereIn('status', ['overdue','in_process'])->get();
        return view('payments.create', compact('debts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'debt_id' => 'required|exists:debts,id',
            'amount' => 'required|numeric',
            'payment_date' => 'required|date',
        ]);

        Payment::create($request->all());
        return redirect('/dashboard')->with('success', 'Payment recoreded successfully');
    }
}
