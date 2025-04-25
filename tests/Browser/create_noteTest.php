<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class create_noteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group createnote
     */
    public function testcreate_note(): void
    {
        $this->browse(function (Browser $browser): void {
            $browser->visit('/')
            
            ->clickLink('Log in')
            ->type('email', 'broki@gmail.com')
            ->type('password', '12345678')
            ->press('LOG IN')
            ->assertPathIs('/dashboard')
            ->clickLink('Notes')
            ->assertPathIs('/notes')
            ->clickLink('Create Note')
            ->assertPathIs('/create-note')
            ->type('title', 'Praktikum PPL Modul 3')
            ->type('description', 'Modul 3')
            ->press('CREATE') 
            ->assertSee('Praktikum PPL Modul 3'); 
        });
    }
}