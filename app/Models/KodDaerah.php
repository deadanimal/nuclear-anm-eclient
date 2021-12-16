<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodDaerah extends Model
{
    use HasFactory;
//    protected $guard_name = 'web';
    protected $table = 'kod_daerah';
    
    protected $fillable = ['id'];
}
