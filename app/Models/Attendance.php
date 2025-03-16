<?php

namespace App\Models;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table ='attendance';

    protected $fillable = [

            'employee_id',
            'attendance_date',
            'check_in_time',
            'check_in_status',
            'check_out_time',
            'check_out_status',
            'status',
            'regular_hours',
            'overtime_hours'
    ];

    public function employees(){
        return $this->belongsTo(Employee::class);
    }

}                             
