<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Debt;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $agents = User::latest()->where('role', 'agent')->get();
        $clients = Client::latest(10);
        $debts = Debt::latest(10);

        return view('admin.index', compact('agents', 'clients', 'debts'));
    }


}
