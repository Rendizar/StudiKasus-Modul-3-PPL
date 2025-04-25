<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testRegister(): void
    {
        $this->browse(function (Browser $browser) : void {
            $browser->visit('/')
                ->assertSee('Modul 3') //Memastikan teks ada di halaman
                ->clickLink('Register') //click ke link register  
                ->assertPathIs('/register') //memastikan path adalah /register
                ->type('name', 'brok') //interaksi dengan form nama pada halaman
                ->type('email', 'broki13@gmail.com') //interaksi dengan form email pada halaman
                ->type('password', '12345678') //interaksi dengan form password pada halaman
                ->type('password_confirmation', '12345678') //interaksi dengan form konfirmasi password pada halaman
                ->press ('REGISTER') //menekan tombol register
                ->assertPathIs('/dashboard'); //memastikan path adalah /dashboard
                
                

        });
    }
}
