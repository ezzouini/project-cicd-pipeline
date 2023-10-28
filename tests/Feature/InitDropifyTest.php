<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InitDropifyTest extends TestCase
{
    public function is_website_on(): void
    {

        $url_website = 'https://dropify.shop'; // Replace with the URL you want to test.
        $response = $this->get( $url_website );

        $response->assertStatus(200);
    }
}
