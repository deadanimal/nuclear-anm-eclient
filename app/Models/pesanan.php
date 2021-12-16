<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
//    protected $guard_name = 'web';
    protected $table = 'spp_order';
    
    protected $fillable = ['id'];
    
    public function profilSyarikat(){
        return $this->hasOne('App\Models\SppProfilSyarikat', 'id', 'idPelanggan');
    }
}
