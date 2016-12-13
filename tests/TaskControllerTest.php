<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Spatie\Permission\Models\Role;

class TaskControllerTest extends TestCase
{
    use DatabaseMigrations;


    public function testAuthoritzedIndex()
    {
        $user=$this->login();
        Role::create(['name' => 'admin']);
        $user->assignRole('admin');


        $this->get('thask');
        $this->assertResponseOk();
    }

    public function testNotAuthoritzedIndex()
    {
        $this->login();

        $this->get('thask');
        $this->assertResponseStatus(403);
    }

    protected function login()
    {
        $user = factory(App\User::class)->create();
        $this->actingAs($user,'api');

        return $user;
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
