<?php

class controller_barricada {

	// Queremos crear un nuevo pedido
	public function nuevo() {
		$data = Flight::request()->data;
		if ( barricada::validar($data) ) {
			$barricada = Model::factory('barricada')->create();

			$barricada->tipo = $data['tipo'];

			$barricada->lat = $data['lat'];
			$barricada->lng = $data['lng'];

			$barricada->fecha = strtotime($data['fecha'].' '.$data['hora'].':0:0');
			$barricada->duracion = abs($data['duracion']);

			$barricada->save();
						
			Flight::flash('message',array('type'=>'success','text'=>'Agregado'));
		} else {
			Flight::flash('message',array('type'=>'error','text'=>'Algo no andubo'));
		}
		Flight::redirect(View::makeUri('/'));
	}

	public function home() {
		Flight::render('home',null,'layout');
	}


}

