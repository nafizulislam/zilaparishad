<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;

    protected $fillable = [
        'prokolper_no', 'tener_no', 'year','nothi_no','shangrahik_no','date','tahabil','notice','group_no','amount','word_no','upozila_id','kajer_prokity','project_notice','prokolper_rate','prokolper_list','prokolper_list','thikadar_id'
    ];
}
