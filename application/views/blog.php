
<body>
<?php foreach($data as $dato){ ?>
	<form method="post" action="<?php echo base_url();?>index.php/blog/editar/<?=$dato->id?>">	
		
		<h2><?=$dato->title?></h2>
		<p><?=$dato->content?></p>
		
		<input type="hidden" name="id" value="id">
		<input type="hidden" name="title" value="title">
		<input type="hidden" name="content" value="content">

		<br>
		<table>
			<tr>
				<td><input type="submit" value="Modificar"></td></form>
	
					<form method=post action="<?php echo base_url();?>index.php/blog/eliminar/<?=$dato->id?>">
						<td><input type="submit" value="Eliminar"></td>
					</form>
					<form method=post action="<?php echo base_url();?>">
						<td><input type="submit" value="Volver"></td>
			</tr>
		</table>
	</form>	 
<?php } ?>
</body>
</html>