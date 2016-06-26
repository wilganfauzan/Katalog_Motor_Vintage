<?php

use Illuminate\Database\Eloquent\Model;

class Kategori extends Eloquent {
	
	protected $table = 'kategori';

	function Detail(){
		return $this->belongsTo('Detail', 'id_kategori');
	}
	function Katalog(){
		return $this->belongsTo('Katalog', 'id_katalog');
	}
}