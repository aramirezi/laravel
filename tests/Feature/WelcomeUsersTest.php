<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WelcomeUsersTest extends TestCase
{
    /**
     * @test void
     */
    function it_loads_welcomes_users_with_nickname()
    {
        $this->get('/saludo/alejandro.ramirez/aramirez')
        	 ->assertStatus(200)
        	 ->assertSee('Bienvenido alejandro.ramirez, tu apodo es aramirez');
    }

    /**
     * @test void
     */
    function it_loads_welcomes_users_without_nickname()
    {
        $this->get('/saludo/alejandro.ramirez')
        	 ->assertStatus(200)
        	 ->assertSee("Bienvenido alejandro.ramirez");
    }
}
