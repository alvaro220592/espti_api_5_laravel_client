<?php

namespace App\Models;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client as Guzzle;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthApi extends Model
{
    use HasFactory;

    private $token;

    public function __construct()
    {
        try {
            $client = new Guzzle;
            $response = $client->request('POST', env('API_URL').'auth', [
                'form_params' => [
                    'email' => env('API_EMAIL'),
                    'password' => env('API_SENHA')
                ]
            ]);
            $this->token = json_decode($response->getBody())->token;
        } catch (GuzzleException $e) {
            dd($e);
        } 
    }

    public function getToken(){
        return $this->token;
    }
}
