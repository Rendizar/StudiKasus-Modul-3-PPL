<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateNoteTest extends DuskTestCase
{
    /**
     * Test creating a note.
     */
    public function testCreateNote(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Modul 3') // Ensure the text is visible on the homepage
                ->clickLink('Log in') // Click the login link
                ->assertPathIs('/login') // Ensure the path is /login
                ->type('email', 'brok123@gmail.com') // Fill in the email field
                ->type('password', '12345678') // Fill in the password field
                ->press('LOG IN') // Press the login button
                ->assertPathIs('/dashboard') // Ensure the path is /dashboard
                ->clickLink('Notes') // Click the "Create Note" link
                ->assertPathIs('/notes') // Ensure the path is /notes/create
                ->type('title', 'My First Note') // Fill in the title field
                ->press('CREATE') // Press the save button
                ->assertPathIs('/notes'); // Ensure the path is /notes
                
        });
    }
}
