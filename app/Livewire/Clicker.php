<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public $name;
    public $email;
    public $password;
    
    public function createNewUser()
    {
        $this->validate([
            'name' => [
                'required',
                'min:2',
                'max:50',
            ],
            'email' => [
                'required',
                'email',
                'unique:users',
            ],
            'password' => [
                'required',
                'min:5',
            ],
        ]);
        
        // User::create([
        //     'name' => 'john',
        //     'email' => 'john@test.com',
        //     'password' => '111'
        // ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
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
