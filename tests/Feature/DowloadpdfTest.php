<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DowloadpdfTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Routedowload()
    {
        $response = $this->get('/dowload');

        $response->assertStatus(200);
    }
}
