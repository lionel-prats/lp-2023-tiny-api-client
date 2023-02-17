<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function index(){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get("$url/clients");
        $data = $response->json(); 
        return view('client.index', compact('data'));
    }
    public function create(){
        return view('client.create');
    }
    public function store(Request $request){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        /* $response =  */Http::post("$url/clients", [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
            'phone' => $request->phone
        ]);
        return redirect()->route('client.index');
    }
    public function edit($client_id){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get("$url/clients/$client_id");
        $data = $response->json();
        $data = $data['client'];
        return view('client.edit', compact('data'));
    }
    public function update(Request $request/* , $client_id */){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        /* $response =  */Http::put("$url/clients/$request->id", [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
            'phone' => $request->phone
        ]);
        return redirect()->route('client.index');
    }
    public function destroy($client_id){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        /* $response =  */Http::delete("$url/clients/$client_id");
        return redirect()->route('client.index');
    }
}
