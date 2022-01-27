<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class ItemsController extends Controller
{
    public function index()
    {
        $response = Http::get(config('app.api_host') . '/api/getItems');
        return view('Items.index',  ['response' => $response->object()]);
    }

    public function addPage()
    {
        return view('Items.add');
    }

    public function post(Request $request)
    {
        $response = Http::post(config('app.api_host') . '/api/postItems', [
            'name' => $request['name'],
            'item_type_id' => $request['item_type_id'],
            'description' => $request['description'],
            'is_active' => $request['is_active'],
        ]);

        if ($response->status() != 200) {
            return redirect()->route('items')->with('failed', trans('items.set.failed'));
        }

        return redirect()->route('items')->with('success', trans('items.set.success'));
    }

    public function edit($id)
    {
        //dd($id);
        $response = Http::get(config('app.api_host') . '/api/getItems/' . $id);
        // dd($response->item);
        return view('Items.edit', compact('response'));
    }

    public function update(Request $request)
    {
        $response = Http::post(config('app.api_host') . '/api/getItems' . $id, [
            'name' => $request['name'],
            'item_type_id' => $request['item_type_id'],
            'description' => $request['description'],
            'is_active' => $request['is_active'],
        ]);
        if ($response->status() != 200) {
            return redirect()->route('items')->with('failed', trans('items.set.failed'));
        }

        return redirect()->route('items')->with('success', trans('items.set.success'));
    }

    public function delete($id)
    {
        // dd($id);
        $response = Http::delete(config('app.api_host') . '/api/deleteItems/' . $id);
        if ($response->status() != 200) {
            return redirect()->route('items')->with('failed', trans('items.set.failed'));
        }
        return redirect()->route('items')->with('success', trans('items.set.success'));
    }
}
