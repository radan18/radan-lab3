<?php

namespace App\Models;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payslip extends Model
{
    use HasFactory;

    protected $table ='payslip';

    protected $fillable =[
        'payroll_id',
        'employee_id',
        'regular_hours',
        'overtime_hours',
        'gross_salary',
        'overtime_pay',
        'basic_pay',
        'sss_deduction',
        'philhealth_deduction',
        'pagibig_deduction',
        'gov_deduction',
        'cash_advance_deduction',
        'total_deduction'


    ];

    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }

    
}
