<?php 

class TemplateController{

	/*=============================================
	Traemos la Vista Principal de la plantilla
	=============================================*/
	public function index(){
		include "views/template.php";
	}

	/*=============================================
	Ruta Principal o Dominio del sitio
	=============================================*/
	static public function path(){
		return "http://marketplace.com/";
	}



	/*=============================================
	Función para mayúscula inicial
	=============================================*/
	static public function capitalize($value){
		$text = str_replace("_", " ", $value);
		return ucwords($text);
	}



	/*=============================================
	Función Limpiar HTML
	=============================================*/	
	static public function htmlClean($code){
		$search = array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s');
		$replace = array('>','<','\\1');
		$code = preg_replace($search, $replace, $code);
		$code = str_replace("> <", "><", $code);
		return $code;
	}



	
}

