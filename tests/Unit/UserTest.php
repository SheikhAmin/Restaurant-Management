<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    protected $admincontroller;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    /**  public function test_example()
    *{
    *    $this->assertTrue(true);
   * }*/
    public function test_foodmenu()
    {
        $this->admincontroller = new \App\Controllers\AdminController;
        $this->admincontroller->deleteuser(4);
        $this->assertTrue(4);


    }
}
