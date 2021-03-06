<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    public function barang()
    {
    	return $this->hasMany('App\Barang', 'id');
    }

    public function transaksi(){
    	return $this->belongsTo('App\Transaksi', 'id');
    }
}
