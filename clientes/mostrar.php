<?php
	require_once './config/db.php';
?>
<h1>Listado de Clientes</h1>
<a href='?menu=actualizar'><button type="button" class="btn btn-primary">Agregar</button></a>
<div class="container">
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Alias</th>
					<th>Nombres</th>
					<th>Apellidos</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Id</td>
					<td>Alias</td>
					<td>Nombre</td>
					<td>Apellidos</td>
					<td><a href='?menu=actualizar'><button type="button" class="btn btn-warning">Actualizar</button></a></td>
					<td><button type="button" class="btn btn-danger" onclick='eliminar();'>Eliminar</button></td>
				</tr>

			</tbody>
		</table>
	</div>
</div>