<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
	public function testView()
	{
		$view = $this->view('spa');

		$view->assertSee('Vue SPA Demo');
		// $view->assertSeeInOrder(['Vue SPA Demo', '<app></app>']);
	}
}
