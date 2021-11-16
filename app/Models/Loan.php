<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Loan extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'description',
        'requirements',
        'image',
        'max_year',
        'interest_rate',
        'loan_type',
        'min_amount',
        'max_amount'
    ];
}