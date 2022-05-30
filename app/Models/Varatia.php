<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Varatia extends Model
{
    use HasFactory;
    protected $fillable = [
        'owner_name', 'owner_phone', 'owner_nid','photo','present_address','permanent_address','org_name','org_address','license','bank_name','bank_account','branch','license_date','sarok_no','documents'
    ];
}
