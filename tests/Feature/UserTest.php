<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function User()
    {
        $response = $this->get('/user/{id}');

        $response->assertStatus(200);
    }

    public function testUsers()
    {
        $response = $this->get('/users/{id}');

        $response->assertStatus(200);
    }
}
