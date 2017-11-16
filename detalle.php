<?php
require_once("Functions.php");
$id = $_GET['id'];
$n = TraerNoticia($id);

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
	<a href="home.php">Volver atras</a>
</article> </selection>';