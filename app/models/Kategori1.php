<?php

use Illuminate\Database\Eloquent\Model;

class Kategori extends Eloquent {
	
	protected $table = 'kategori';

	function Katalog(){
		return $this->hasMany('Kategori', 'id_kategori');
	}

	
}