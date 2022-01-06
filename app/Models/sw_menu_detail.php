<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sw_menu_detail extends Model
{
    use HasFactory;
    protected $with = 'swmenumain';

    public function swmenumain()
    {
        return $this->belongsTo(sw_menu_main::class,'mm_id');
    }
}
