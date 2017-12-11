<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsersModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test void
     */
    public function it_load_the_users_page()
    {
        $this->get('/usuarios')
             ->assertStatus(200)
             ->assertSee('Usuarios');
    }

    /**
    * @test
    */
    function it_loads_the_users_details_page(){

    	$this->get('/usuarios/5')
    		 ->assertStatus(200)
    		 ->assertSee("Mostrando detalle del usuario: 5");
    }

    /**
    * @test
    */
    function it_loads_the_new_users_page(){

    	$this->get('/usuarios/nuevo')
    		 ->assertStatus(200)
    		 ->assertSee("Crear nuevo usuario");
    }

    /**
    * @test
    */
    function it_load_the_edit_users_page(){

    	$this->get('/usuarios/editar/5')
    		 ->assertStatus(200)
    		 ->assertSee("Editar usuario 5");
    }
}
