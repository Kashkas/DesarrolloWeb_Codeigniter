
<body>
	Lista de Entradas
	<ul>
		<?php foreach($data as $dato){ ?>
			<li> <a href="<?php echo base_url();?>index.php/blog/byid/<?=$dato->id?>"><?=$dato->title?></a></li>
		<?php } ?>
	</ul>
	<form action="<?php echo base_url();?>index.php/blog/insertar">
		<input type="submit" value="Nuevo">
	</form>	 
</body>
</html>