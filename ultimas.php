<?php
required_once("Funtions.php");

$noticias = TraerNoticias(0, 10);

foreach($noticias as $n){
	echo "
	<selection class='ultima'>
	<article class='articulo'>
  <header>
    <h2>".$n['Titulo']."</h2>
  </header>
  <section class='Copete'>
    <p>".$n['Copete']."</p>
	<img src="" class='imgArticulo'/>
  </section>
  <section class='descripcion'>
    <p>".$n['Descripcion']."</p>
  </section>
  <footer>
    <p>Posteado en<time datetime=".$n['Fecha'].">".$n['Fecha']."</time></p>
  </footer>
	<a href='noticia/detalle.php?id=".$n['id']."'>Ver Detalle</a>
</article> </selection>";
}

?>



