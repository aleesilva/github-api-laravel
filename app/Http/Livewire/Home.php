<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Home extends Component
{
    public $username = "";
    public $profile  = [];

    public function render()
    {
        return view('livewire.home');
    }


    public function search()
    {
        $this->profile = Http::get('https://api.github.com/users/' . $this->username)->json();
        return $this->profile;
    }
}
