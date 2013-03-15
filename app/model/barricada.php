<?php

class model_barricada {

	public static function getById( $id ) {
		return Model::factory('barricada')->find_one( $id );
	}

	public static function getAll() {
		return Model::factory('barricada')->find_many();
	}

	
	public static function getCurrent() {
		// arranca antes de mañana termina despues de hace 2 horas
		return Model::factory('barricada')->where_raw("(fecha + duracion * 3600) > (".time()." - 7200) AND fecha < (".time()." + (24*3600))")->find_many();
	}
}

class barricada extends Model {
	public static function validar($data) {
		$fecha = strtotime($data['fecha'].' '.$data['hora'].':0:0');
		if ( ! $fecha ||  $fecha < 1 ) {
			return false;
		}

		if ( ! is_numeric($data['lat']) || ! is_numeric($data['lng']) ) {
			return false;
		}

		if ( !is_numeric($data['duracion']) || $data['duracion'] < 1 ) {
			return false;
		}

		if ( ! in_array($data['tipo'],array('policia','barricada')) ) {
			return false;
		}


		return true;
	}
}
