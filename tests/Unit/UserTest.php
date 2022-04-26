<?php

namespace Tests\Unit;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Tests\TestCase;

#use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    protected $admincontroller;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form()
    {
      $response = $this->get('/login');

      $response->assertStatus(200);
    }


}
