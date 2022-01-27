<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\User;

class dashboard extends Controller
{
    function index()
    {
        $items = Http::get(config('app.api_host') . '/api/getItems');
        return view('dashboard', ['items' => $items->object()]);
    }
}
