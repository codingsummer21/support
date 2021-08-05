<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function tickets()
    {
        $context['tickets'] = Ticket::orderBy('created_at', 'desc')->get();

        return view('tickets', $context);
    }
}
