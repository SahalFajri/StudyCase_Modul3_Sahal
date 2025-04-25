<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ViewNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group viewnote
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', 'sahal@gmail.com')
                ->type('password', 'password')
                ->press('LOG IN')
                ->assertPathIs('/dashboard')
                ->clickLink('Notes')
                ->assertPathIs('/notes')
                ->clickLink('Praktikum PPL Setelah Edit')
                ->assertPathIs('/note/*')
                ->assertSee('Praktikum PPL Setelah Edit');
        });
    }
}
