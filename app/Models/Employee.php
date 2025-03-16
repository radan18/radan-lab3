<?php

namespace App\Models;
use App\Models\Cash_advance;
use App\Models\Attendance;
use App\Models\Contribution_deduction;
use App\Models\Payslip;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees'; 

    protected $fillable = [
        'firstName',
        'middleName',
        'lastName',
    ];

    public function cash_advance()
    {
        return $this->HasOne(Cash_advance::class);
    }
    public function attendance()
    {
        return $this->HasOne(Attendance::class);
    }
    public function contribution_deduction()
    {
        return $this->HasOne(Contribution_deduction::class);
    }
    public function payslip()
    {
        return $this->HasOne(Payslip::class);
    }

}
