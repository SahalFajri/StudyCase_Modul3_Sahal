<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group addnote
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Modul 3')
                ->clickLink('Log in')
                ->assertPathIs('/login')
                ->type('email', 'sahal@gmail.com')
                ->type('password', 'password')
                ->press('LOG IN')
                ->assertPathIs('/dashboard')
                ->clickLink('Notes')
                ->assertPathIs('/notes')
                ->clickLink('Create Note')
                ->assertPathIs('/create-note')
                ->type('title', 'Praktikum PPL')
                ->type('description', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores corporis corrupti, consequuntur eius dolorum hic. Neque incidunt illum molestias in facere perspiciatis quod, voluptatem harum et. Nesciunt quae quibusdam earum.')
                ->press('CREATE')
                ->assertPathIs('/notes')
                ->assertSee('new note has been created');
        });
    }
}
