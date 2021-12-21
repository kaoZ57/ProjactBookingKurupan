<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class ItemsController extends Controller
{
    function index()
    {
        $respone = Http::get(config('app.api_host') . '/api/getItems');
        return view('Items.index',  ['respone' => $respone->object()]);
    }

    function getItems()
    {
        $respone = Http::get(config('app.api_host') . '/api/getItems');
        return $respone->object();
    }

    function showitemsID($id)
    {
        $respone = Http::get(config('app.api_host') . '/api/getItems/', $id);
        return view('Items.id',  ['respone' => $respone->object()]);
    }

    // function getItemsID($id)
    // {
    //     $respone = Http::get(config('app.api_host') . '/api/getItems/', $id);
    //     return $respone->object();
    // }
}
