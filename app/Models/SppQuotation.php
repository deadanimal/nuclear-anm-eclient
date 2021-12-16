<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SppQuotation extends Model
{
    use HasFactory;
//    protected $guard_name = 'web';
    protected $table = 'spp_quotation';
    
    protected $fillable = ['id'];
    
    public function pesanan(){
        return $this->hasOne('App\Models\Pesanan', 'idQuo', 'id');
    }
    public function quotationPelanggan(){
        return $this->hasOne('App\Models\SppQuotationPelanggan', 'idQuo', 'id');
    }
    public function quotationKumpulan(){
        return $this->hasOne('App\Models\SppQuotationKumpulan', 'idQuo', 'id');
    }
    public function quotationDetail(){
        return $this->hasMany('App\Models\SppQuotationDetail', 'idQuo', 'id');
    }
}
