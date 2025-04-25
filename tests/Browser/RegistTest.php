<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group register
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Modul 3')
                ->clickLink('Register')
                ->assertPathIs('/register')
                ->type('name', 'Sahal Fajri')
                ->type('email', 'sahal@gmail.com')
                ->type('password', 'password')
                ->type('password_confirmation', 'password')
                ->press('REGISTER')
                ->assertPathIs('/dashboard');
        });
    }
}
