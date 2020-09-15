<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGet()
    {
        $response = $this->getJSON('/api/users');
		$response
			->assertStatus(200)
			->assertJsonStructure([
				'data' => [[
					'name', 'email'
				]]
			]);

			$content = $response->getOriginalContent();
			$this->assertMatchesRegularExpression('/.+@.+\..+/', $content[0]->email);
    }

	public function testPagination()
    {
        $response = $this->get('/api/users?page=1');
		$response
			->assertStatus(200)
			->assertJsonStructure([
				'data' => [[
					'name', 'email'
				]]
			]);
    }
}
