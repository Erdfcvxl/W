<?php

namespace Tests\Unit;

use App\Models\Park;
use App\Services\ParkService;
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

        $this->artisan('migrate:refresh');
        $this->artisan('db:seed');

        $this->parkService = new ParkService(new Park());
    }

    public function testGetParksSortedByPrice()
    {
        $result = $this->parkService->getParksSortedByPrice();
        
        $this->assertCount(5, $result);
        $this->assertEquals(1, $result[0]->id);
        $this->assertEquals(2, $result[1]->id);
    }
}
