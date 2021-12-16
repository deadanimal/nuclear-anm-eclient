<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodNegeri extends Model
{
    use HasFactory;
//    protected $guard_name = 'web';
    protected $table = 'kod_negeri';
    
    protected $fillable = ['id'];
}
