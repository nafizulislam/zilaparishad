<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BundlePackage extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_id', 'project_id'
    ];
}
