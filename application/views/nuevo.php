
<body>
	Nueva Entrada
	<form method="post" action="<?php echo base_url();?>index.php/blog/insert_new">
		<br>
		<table>
			<tr>
				<td>Titulo</td><td><input type=“text” name="title" /></td>
			</tr>
			<tr>
				<td>Contenido</td><td><input type=“text” name="content" /></td>
			</tr>
			<tr>
				<td><input type="submit" value="Ingresar"></td>
			</tr>
		</table>
	</form>	 
</body>
</html>