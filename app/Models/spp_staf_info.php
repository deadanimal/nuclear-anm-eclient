<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spp_staf_info extends Model
{
    use HasFactory;
    public function staffPkhidmat()
    {
        return $this->belongsTo('App\Models\psm_biodata','bioPin','Bio_Pin');
    }

}
