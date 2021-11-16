<?php

namespace App\Http\Livewire\Admin\Crud;

use App\Models\Loan;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddLoan extends Component
{
    use WithFileUploads;
    public Loan $loan;
    public $image;

    protected $rules = [
        'loan.name' => 'required|string|min:4',
        'loan.description' => 'required|min:10|',
        'loan.requirements' => 'required|min:10',
        'image' => 'image|max:1024|mimes:jpg,png',
        'loan.max_year' => 'required',
        'loan.interest_rate' => 'required',
        'loan.loan_type' => 'required',
        'loan.min_amount' => 'required',
        'loan.max_amount' => 'required',

    ];

    public function updatedPhoto()
    {
        $this->validate([
            'image' => 'image|max:1024|mime:jpg,png', // 1MB Max
        ]);
    }
    public function updated($param)
    {
        $this->validateOnly($param);
    }

    public function clearLoanField()
    {
        $this->loan->name = "";
        $this->loan->description = "";
        $this->loan->requirements = "";
        $this->image = "";
        $this->loan->max_year = "";
        $this->loan->interest_rate = "";
        $this->loan->loan_type = "";
        $this->loan->min_amount = "";
        $this->loan->max_amount = "";
    }
    public function submitLoan()
    {
        $this->validate();


        $filename = $this->image->getClientOriginalName();
        $this->image->storeAs('loan-image', $filename, 'public');

        // dd($filename);
        Loan::create([
           'name' => $this->loan->name,
           'description' => $this->loan->description,
           'requirements' => $this->loan->requirements,
           'image' => $filename,
           'max_year' => $this->loan->max_year,
           'interest_rate'=> $this->loan->interest_rate,
           'loan_type' => $this->loan->loan_type,
           'min_amount' => $this->loan->min_amount,
           'max_amount' => $this->loan->max_amount,
        ]);

        session()->flash('success', 'Loan Added');
    }

    public function mount()
    {
        $this->loan = new Loan;
    }
    public function render()
    {
        return view('livewire.admin.crud.add-loan');
    }
}