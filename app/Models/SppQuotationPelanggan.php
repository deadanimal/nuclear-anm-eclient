<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SppQuotationPelanggan extends Model
{
    use HasFactory;
//    protected $guard_name = 'web';
    protected $table = 'spp_quotation_pelanggan';
    
    protected $fillable = ['id'];
    
    public function pelanggan(){
        return $this->hasOne('App\Models\SppProfilSyarikat', 'id','idPelanggan');
    }
}
