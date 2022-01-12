<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SppQuotationKumpulan extends Model
{
    use HasFactory;
//    protected $guard_name = 'web';
    protected $table = 'spp_quotation_kumpulan';
    
    protected $fillable = ['id'];
    
    public function kumpulanDetail(){
        return $this->hasOne('App\Models\SppPusatKhidmat', 'id', 'idPKhidmat');
    }
}
