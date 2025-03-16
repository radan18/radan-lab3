<?php

namespace App\Models;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cash_advance extends Model
{
    use HasFactory;
    
    protected $table = 'cash_advance';

    protected $fillable = [
        'employee_id',
        'amount',
        'payment_plan',
        'deduction_per_payroll',
        'balance',
        'date_issued',
        'status'
    ];

    public function employees(){
        return $this->belongsTo(Employee::class);
    }
}
