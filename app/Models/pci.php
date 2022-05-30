<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pci extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phone', 'present_address','permanent_address','nid','photo','authorise_person','authorise_person_mobile','authorise_person_nid','document','bank_name','bank_account','branch','project_id'
    ];

    
    
}
