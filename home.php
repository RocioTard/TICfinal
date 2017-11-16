<?php
require_once("Functions.php");
$destacadas = TraerNoticiasDestacadas(6, 0);
$noticias = TraerNoticias(6, 0);
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	


<div class="col-xs-12 col-md-8">
<h1>Ultimas</h1>
<?php
foreach($noticias as $n){
	?>
	<div class="noticia">
		<article class="articulo">
		  <header>
			<h2><?php echo $n['titulo'] ?></h2>
		  </header>
		  <section class="Copete">
			<p><?php $n['copete'] ?></p>
			<img src="<?php echo $n['image'] ?>" class="imgArticulo" />
		  </section>
		  <section class="descripcion">
			<p><?php echo $n['texto'] ?></p>
		  </section>
		  <footer>
			<p>Posteado en <time datetime='<?php echo $n['fecha'] ?>'><?php echo $n['fecha'] ?></time></p>
		  </footer>
			<a href="detalle.php?id=<?php echo $n['id']?>">Ver Detalle</a>
		</article> 
	</div>
<?php } ?>
</div>



<div class="col-xs-6 col-md-4">
<h1>Destacadas</h1>
<?php
foreach($destacadas as $n){
	?>
	<div class="noticia">
		<article class="articulo">
		  <header>
			<h2><?php echo $n['titulo'] ?></h2>
		  </header>
		  <section class="Copete">
			<p><?php $n['copete'] ?></p>
			<img src="<?php echo $n['image'] ?>" class="imgArticulo" />
		  </section>
		  <section class="descripcion">
			<p><?php echo $n['texto'] ?></p>
		  </section>
		  <footer>
			<p>Posteado en <time datetime='<?php echo $n['fecha'] ?>'><?php echo $n['fecha'] ?></time></p>
		  </footer>
			<a href="detalle.php?id=<?php echo $n['id']?>">Ver Detalle</a>
		</article> 
	</div>
<?php } ?>
</div>


