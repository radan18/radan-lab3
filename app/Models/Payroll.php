<?php

namespace App\Models;
use App\Models\Contribution_deduction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;

    protected $table ='payroll';

    protected $fillable =[
        'start_date',
        'end_date',
        'total_amount',

    ];

    public function contribution_deduction()
    {
        return $this->hasMany(Contribution_deduction::class);
    }

    
}
