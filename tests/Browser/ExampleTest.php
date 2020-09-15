<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
		// $this->browse(function (Browser $browser) {
		// 	$browser->resize(920, 480);
		// });

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Vue Router Demo App');
        });
        $this->browse(function (Browser $browser) {
            $browser->visit('/users')
                    ->assertSee('Vue Router Demo App');
        });
        $this->browse(function (Browser $browser) {
            $browser->visit('/hello')
                    ->assertSee('Hello');
        });
    }
}
