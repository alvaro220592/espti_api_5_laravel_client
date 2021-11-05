<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\GuzzleException;
use App\Models\AuthApi;

class ProductController extends Controller
{
    private $token;

    public function __construct()
    {
        $auth = new AuthApi;
        $this->token = $auth->getToken();
    }

    public function login(){

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $auth = new AuthApi;
        $this->token = $auth->getToken(); */

        $guzzle = new Guzzle;

        $produtos = $guzzle->get(env('API_URL').'products', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ]
        ]);

        $produtos = json_decode($produtos->getBody());

        return view('testesApi.produtos.index', 
            compact('produtos')
        );
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
