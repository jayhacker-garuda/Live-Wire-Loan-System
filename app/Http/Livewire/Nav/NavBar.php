<?php

namespace App\Http\Livewire\Nav;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NavBar extends Component
{

    public function logout()
    {
        Auth::logout();
        return redirect(route('home'))->with('success', 'logout successfully');
    }
    public function render()
    {
        return view('livewire.nav.nav-bar');
    }
}