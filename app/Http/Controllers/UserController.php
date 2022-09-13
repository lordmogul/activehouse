<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use GuzzleHttp\Client;

class UserController extends Controller
{
    protected $apiBase =   'https://reqres.in/api';

    // Question 1

    public function index($id){
        $client = new Client();
        $user   =   $client->get($this->apiBase. '/users/'.$id);
        return $user;
    }

    // Question 2

    public function users($id) {
        $client = new Client();
        $users   =   $client->get($this->apiBase. '/users?page='.$id);
        return $users;
        
    }
}
