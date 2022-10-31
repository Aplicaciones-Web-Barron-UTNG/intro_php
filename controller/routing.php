<?php 
	/**
	* Archivo que redirecciona al contenido que se va incrustar dentro de la header y el footer
	* Autor: Gabriel Barrón Rodríguez
	**/
	if (isset($_GET['menu'])and $_GET['menu'] =='registrar') {
		require_once('./clientes/registrar.php');
	} else if (isset($_GET['menu']) and  $_GET['menu']=='mostrar') {
		require_once('./clientes/mostrar.php');
	} else if (isset($_GET['menu']) and  $_GET['menu']=='actualizar') {
		require_once('./clientes/actualizar.php');
	} else if (isset($_GET['menu']) and  $_GET['menu']=='login') {
		require_once('./usuarios/login.php');
	}
 ?>