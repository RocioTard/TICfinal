<?php
require_once("Functions.php");

$noticias = TraerNoticias(2, 0);
$cantNoticias = CantidadNoticias();

$limit = 2;

if (isset($_GET['page'])){
	$page = $_GET['page'];
	$offset = ($page - 1) * $limit;
	$noticias = TraerNoticias(2, $offset);
}

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


<div class="pagination">
<?php
$pages = $cantNoticias / $limit;

for ($x = 1; $x <= $pages; $x++) {
    echo '<a href="ultimas.php?page=' . $x . '">'. $x .'</a>';
} 
?>
</div>



