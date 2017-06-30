<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ParkServiceTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */

    public function setUp()
    {
        parent::setUp();


    }

    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
}
