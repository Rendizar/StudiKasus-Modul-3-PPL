<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ShowNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testShowNoteTest(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Modul 3')
            ->clickLink('Log in')
            ->assertPathIs('/login')
            ->type('email', 'broki@gmail.com')
            ->type('password', '12345678')
            ->press('LOG IN')
            ->assertPathIs('/dashboard')
            ->clickLink('Notes')
            ->assertPathIs('/notes');
        });
    }
}
