<?php

namespace App\Models;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    use HasFactory;

    protected $table ='details';


    protected $fillable =[
        'name',
        'age',
        'address'
    ];

    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
}
