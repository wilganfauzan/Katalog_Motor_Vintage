<?php

use Illuminate\Database\Eloquent\Model;

class Detail extends Eloquent {
	
	protected $table = 'motor';

	function Kategori(){
		return $this->hasMany('Kategori', 'id_kategori');
	}
}