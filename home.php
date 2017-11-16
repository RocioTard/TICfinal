<?php
require_once("Functions.php");

$noticias = TraerNoticiasDestacadas(6, 0);

foreach($noticias as $n){
	echo '
	<selection class="destacada">
	<article class="articulo">
  <header>
    <h2>' . $n['titulo'] . '</h2>
  </header>
  <section class="Copete">
    <p>' . $n['copete'] . '</p>
	<img src="'. $n['image'] .'" class="imgArticulo" />
  </section>
  <section class="descripcion">
    <p>' . $n['texto'] . '</p>
  </section>
  <footer>
    <p>Posteado en<time datetime=' . $n['fecha'] . '>' . $n['fecha'] . '</time></p>
  </footer>
	<a href="detalle.php?id=' . $n['id'] . '">Ver Detalle</a>
</article> </selection>';
}

?>



