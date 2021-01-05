<?php

namespace App\Models;

class Produk extends Model {
	protected $table = 'produk';

	protected $casts = [
		'created_at' =>'datetime',
		'updated_at' =>'datetime',
	];

	function getHargaAttribute(){
		return "Rp.".number_format($this->attributes['harga']);
	}
	
}
