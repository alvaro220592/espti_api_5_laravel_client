<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\GuzzleException;

class ProductController extends Controller
{
    public function login(){

        /* $client = new Guzzle;
        try {
            $response = $client->request('POST', 'localhost:8000/api/v1/auth', [
                'form_params' => [
                    'email' => env('API_EMAIL'),
                    'password' => env('API_SENHA')
                ]
            ]);
            dd($response->getBody());
        } catch (GuzzleException $e) {
            dd($e);
        } */
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $client = new Guzzle;
            $response = $client->request('POST', env('API_URL').'auth', [
                'form_params' => [
                    'email' => env('API_EMAIL'),
                    'password' => env('API_SENHA')
                ]
            ]);
            dd(json_decode($response->getBody())->token);
        } catch (GuzzleException $e) {
            dd($e);
        } 
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
