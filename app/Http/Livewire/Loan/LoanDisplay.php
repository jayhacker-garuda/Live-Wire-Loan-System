<?php

namespace App\Http\Livewire\Loan;

use App\Models\Loan;
use App\Models\Subscription;
use App\Notifications\NewSubscription;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use Livewire\WithPagination;

class LoanDisplay extends Component
{
    use WithPagination;
    public $showMode;
    public Subscription $subscribe;

    protected $rules = [
        'subscribe.email' => 'required|email'
    ];
    public function showDetails(Loan $loan)
    {
        // dd($loan);
        $this->showMode = $loan;
        $this->dispatchBrowserEvent('show-loans-open');
    }

    public function updateSubscribe($param)
    {
        $this->validateOnly($param);
    }
    public function loanSubscription()
    {
        $this->validate();

        $trigger = Subscription::create([
            'email' => $this->subscribe->email,
            'loan_id' => $this->showMode->id,
        ]);
        $user = $this->subscribe->email;
        Notification::send($user,new NewSubscription($this->showMode));

        session()->flash('success', 'You have made a subscription');

        if ($trigger) {
            $this->showMode = false;
            $this->dispatchBrowserEvent('show-loans-close');
        }


    }
    public function cancelSubscription()
    {
        $this->showMode = false;
        $this->dispatchBrowserEvent('show-loans-close');
    }

    public function mount()
    {
        $this->subscribe = new Subscription;
    }
    public function render()
    {
        $loans = Loan::orderBy('id', 'desc')->paginate(4);
        return view('livewire.loan.loan-display', [
            'loans' => $loans
        ]);
    }
}