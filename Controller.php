<?php

require 'Model.php';
require 'View.php';

class Controller{
	
	public function index(){
		$model = new Model();
		$view = new View();

		$view->mostrar($model->bemVindo());
	}

	public function erro(){
		$model = new Model();
		$view = new View();

		$view->mostrar($model->error404());
	}
}

?>