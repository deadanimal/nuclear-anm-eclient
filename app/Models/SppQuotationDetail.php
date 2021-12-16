<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SppQuotationDetail extends Model
{
    use HasFactory;
//    protected $guard_name = 'web';
    protected $table = 'spp_quotation_detail';
    
    protected $fillable = ['id'];
    
    public function profilHargaServis(){
        return $this->belongsTo('App\Models\SppProfilHargaServis', 'idHarga', 'id');
    }
}
