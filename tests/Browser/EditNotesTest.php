<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group editnote
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
                ->clickLink('Edit')
                ->assertPathIs('/edit-note-page/*')
                ->type('title', 'Praktikum PPL Setelah Edit')
                ->type('description', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.')
                ->press('UPDATE')
                ->assertPathIs('/notes')
                ->assertSee('Note has been updated');
        });
    }
}
