<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'pic_id', 'contractor_id', 'prokolpo_no','upozela','prokolpo_name','prokolpo_type','arthabachar','nothi_no','collective_number','minister_number','date','tahabil','notice_no','group_no','amount','prokolpo_notice','prokolpo_rate','prokolpo_list','prokolpo_exel','application','application_date'
    ];
}
