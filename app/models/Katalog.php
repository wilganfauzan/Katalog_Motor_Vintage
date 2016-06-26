<?php

use Illuminate\Database\Eloquent\Model;

class Katalog extends Eloquent {
	
	protected $table = 'katalog';

	function Kategori(){
		return $this->hasMany('Kategori', 'id_kategori');
	}
	function Menu(){
		return $this->belongsTo('Menu', 'id_menu');
	}
}