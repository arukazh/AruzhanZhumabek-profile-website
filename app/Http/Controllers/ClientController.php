<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

class ClientController extends Controller
{
    public function index() {
        $clients = Clients::all();

        return view('client.index')->with(['clients'=> $clients]);

    }
}
