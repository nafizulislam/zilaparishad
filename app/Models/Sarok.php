<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sarok extends Model
{
    use HasFactory;
    protected $fillable = [
        'upozela_id','arthabachar_id','nothi_no','collective_number','minister_number','date','tahabil','notice_no','group_no',
    ];
}
