
<?php
require_once("Functions.php");
$id = $_GET['id'];
$n = TraerNoticia($id);

?>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<div class="container">
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
			<a href="index.php">Atras</a>
		</article> 
	</div>
</div>