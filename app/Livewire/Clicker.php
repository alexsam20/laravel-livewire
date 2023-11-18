<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public $username = 'testuser';

    public function createNewUser()
    {
        User::create([
            'name' => "test user3",
            'email' => "test3@test,com",
            'password' => '123123123123',
        ]);
    }

    public function render()
    {
        $title = 'Test Page';
        $users = User::all();

        return view('livewire.clicker', [
            'title' => $title,
            'users' => $users,
        ]);
    }
}
