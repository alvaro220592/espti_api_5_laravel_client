<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as Guzzle;

class ProductController extends Controller
{
    public function login(){

        $client = new Guzzle;
        $response = $client->request('POST', 'localhost:8000/api/v1/auth', [
            'form_params' => [
                'email' => env('API_EMAIL'),
                'password' => env('API_SENHA')
            ]
        ]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Guzzle;
        $response = $client->request('POST', 'localhost:8000/api/v1/auth', [
            'form_params' => [
                'email' => env('API_EMAIL'),
                'password' => env('API_SENHA')
            ]
        ]);

        dd($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
