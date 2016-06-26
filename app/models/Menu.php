<?php

use Illuminate\Database\Eloquent\Model;

class Menu extends Eloquent {
	
	protected $table = 'menu';

	function Katalog(){
		return $this->hasMany('Katalog', 'id_katalog');
	}
	
}