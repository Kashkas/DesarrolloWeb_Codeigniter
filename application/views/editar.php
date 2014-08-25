
<body>
	<form method="post" action="<?php echo base_url();?>index.php/blog/actualizar">
		<br>
		<?php foreach($data as $dato){ ?>
		<input type="hidden" name="id" value="<?=$dato->id?>" />
		
		<table>
			<tr>
				<td>Titulo</td><td><input type=“text” name="title" value="<?=$dato->title?>" /></td>
			</tr>
			<tr>
				<td>Contenido</td><td><input type=“text” name="content" value="<?=$dato->content?>" /></td>
			</tr>
			<tr>
				<td><input type="submit" value="Actualizar"></td>
				</form>
				<form method=post action="<?php echo base_url();?>">
					<td><input type="submit" value="Volver"></td>
			</tr>
		</table>
		<?php } ?>
	</form>	 
</body>
</html>