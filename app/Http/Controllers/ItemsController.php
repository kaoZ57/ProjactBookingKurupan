<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    function index()
    {
        $respone = Http::get(config('app.api_host') . '/api/getItems');
        return view('Items.index',  ['respone' => $respone]);
    }

    function getItems()
    {
        $respone = Http::get(config('app.api_host') . '/api/getItems');
        return $respone->object();
    }

    function getItemsID()
    {
        $respone = Http::get(config('app.api_host') . '/api/getItems/1');
        return $respone->object();
    }
}
