<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal_Info extends Model
{
    use HasFactory;
    protected $table = 'personal_info';
    protected $fillable = [
        'sub_cat_id', 
        'name', 
        'barangay', 
        'disability', 
        'birthday',    
        'sex',     
        'id_number',  
        'blood_type', 
        'age',  
    ];
 

    public function brgy_sectors()
    {
        return $this->belongsTo(Brgy_Sectors::class);
    }
}
