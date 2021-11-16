<?php

namespace App\Http\Livewire\Admin\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public User $user;
    public $password;

    protected $rules = [
        'user.email' => 'required|email',
        'password' => 'required|min:8'
    ];

    public function updated($param)
    {
        $this->validateOnly($param);
    }

    public function loginForm()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->user->email, 'password' => $this->password])) {

            return redirect(route('admin.dashboard'))->with('success', 'Login Successful');
            
        }else{

            $this->redirect('/admin/login');
        }

        session()->flash('error', trans('auth.failed'));
    }

    public function mount()
    {
        $this->user = new User;
    }

    public function render()
    {
        return view('livewire.admin.auth.login');
    }
}