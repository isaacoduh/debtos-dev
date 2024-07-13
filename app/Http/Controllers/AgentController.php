<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Debt;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index() 
    {
        $clients = Client::where('agent_id', auth()->user()->id)->get();
        $debts = Debt::where('agent_id', auth()->user()->id)->get();

        return view('agent.index', compact('clients', 'debts'));
    }
}
