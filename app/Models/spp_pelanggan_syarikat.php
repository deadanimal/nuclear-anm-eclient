<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spp_pelanggan_syarikat extends Model
{
    use HasFactory;
    public function pelangganSyarikat()
    {
        return $this->belongsTo('App\Models\spp_profil_syarikat','idSyarikat','id');
    }
    
}
