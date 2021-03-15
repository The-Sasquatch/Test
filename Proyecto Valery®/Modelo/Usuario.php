<?php

/* Clase atomica de la tabla Cliente */
class Usuario {

	/* atributos */
	private $nu_usuario;
	private $nb_usuario;
	private $co_correo;
	private $co_clave;


	/* constructor vacio */
	public function __construct() {	} 

	
	/* seters  */
	public function setNu_usuario($nu_usuario) {
	$this->nu_usuario = $nu_usuario;
	}

	public function setNb_usuario($nb_usuario) {
	$this->nb_usuario = $nb_usuario;
	}

	public function setCo_correo($co_correo) {
	$this->co_correo = $co_correo;
	}

	public function setCo_clave($co_clave) {
	$this->co_clave = $co_clave;
	}

	

	
	/* getters */
	public function getNu_usuario() { return $this->nu_usuario; }

	public function getNb_usuario() { return $this->nb_usuario; }

	public function getCo_correo() { return $this->co_correo; }

	public function getCo_clave() { return $this->co_clave; }

	

	
}

/* Generado por crearclass. Douglosky Barriosnovick */

?>
