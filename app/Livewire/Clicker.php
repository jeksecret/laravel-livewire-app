<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public function createNewUser()
    {
        User::create([
            'name' => 'john',
            'email' => 'john@test.com',
            'password' => '111'
        ]);
    }

    public function render()
    {
        $title = "Laravel Livewire";

        $users = User::all();

        return view('livewire.clicker', [
            'title' => $title,
            'users' => $users
        ]);
    }
}
