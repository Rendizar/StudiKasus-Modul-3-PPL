<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testEditNoteTest(): void
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
            ->assertPathIs('/notes')
            ->clickLink('Edit')
            ->assertPathIs('/edit-note-page/31')
            ->type('title', 'test edit')
            ->type('description', 'test edit')
            ->press('UPDATE')
            ->assertPathIs('/notes');
        });
    }
}
