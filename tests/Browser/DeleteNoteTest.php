<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testDeleteNoteTest(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->clickLink('Log in')
            ->type('email', 'broki@gmail.com')
            ->type('password', '12345678')
            ->press('LOG IN')
            ->assertPathIs('/dashboard')
            ->clickLink('Notes')
            ->assertPathIs('/notes')
            ->press('#delete-30') //Menghapus note dengan id 25
            ->assertDontSee('Judul Note yang Dihapus');
        });
    }
}
