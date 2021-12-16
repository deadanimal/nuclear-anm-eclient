<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SppPusatKhidmat extends Model
{
    use HasFactory;
//    protected $guard_name = 'web';
    protected $table = 'spp_pusat_khidmat';
    
    protected $fillable = ['id'];
}
