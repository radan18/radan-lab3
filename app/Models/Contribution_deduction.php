<?php

namespace App\Models;
use App\Models\Employee;
use App\Models\Payroll;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution_deduction extends Model
{
    use HasFactory;

    protected $table = 'contribution_deduction';

    protected $fillable = [
        'employee_id',
        'payroll_id',
        'govPrem',
        'contribution_amount',

    ];
    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
    
    public function payroll()
    {
        return $this->belongsTo(Payroll::class);
    }
    

}