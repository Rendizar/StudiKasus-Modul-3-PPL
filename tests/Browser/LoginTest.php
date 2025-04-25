<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testLogin(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Modul 3')  
            ->clickLink('Log in')
            ->assertPathIs('/login')
            ->type('email', 'brok123@gmail.com')
            ->type('password', '12345678')
            ->press (button:'LOG IN')
            ->assertPathIs('/dashboard');
        });
    }
}
