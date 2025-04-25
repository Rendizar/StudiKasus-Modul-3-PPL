<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testLogout(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Modul 3')
            ->clickLink('Log in')
            ->assertPathIs('/login')
            ->type('email', 'broki7@gmail.com') //sesuaikan pada database
            ->type('password', '12345678')
            ->press('LOG IN')
            ->assertPathIs('/dashboard')
            ->assertSee('Dashboard')
            ->click('.relative') //selector yang mengidentifikasi elemen berdasarkan kelas relative  
            ->clickLink('Log Out')
            ->assertPathIs('/');
        });
    }
}
