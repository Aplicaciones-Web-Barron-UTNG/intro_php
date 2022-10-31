<?php 
	//carga la plantilla con el header y el footer
	if (isset($_GET['menu']) and  $_GET['menu']=='login') {
		require_once('./usuarios/login.php');
	} else {
		require_once('layouts/template.php');
	}
		
 ?>