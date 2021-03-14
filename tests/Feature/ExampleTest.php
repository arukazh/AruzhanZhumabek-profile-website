<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/welcome');

        $response->assertStatus(200);
    }

    public function test_post_id_get_request()
    {
        $response = $this->get('/post/2');
        $response->assertStatus(200);
    }

    public function test_get_unexisted_post()
    {
        $response = $this->get('/post/1000');
        $response->assertStatus(200);
    }

    public function test_post_response()
    {
        $response = $this->get('/post/2');
        $response->assertViewHas('post');
    }
}
