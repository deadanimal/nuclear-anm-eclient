<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SppProfilSyarikat extends Model
{
    use HasFactory;
//    protected $guard_name = 'web';
    protected $table = 'spp_profil_syarikat';
    
//    protected $fillable = ['id'];
    
    public function daerah(){
        return $this->belongsTo('App\Models\KodDaerah', 'idDaerah', 'id');
    }
    public function negeri(){
        return $this->belongsTo('App\Models\KodNegeri', 'idNegeri', 'id');
    }
}
