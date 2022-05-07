<link rel="stylesheet" href="css/servicios.css" type="text/css" media="screen" title="no title" charset="utf-8"> 
<h1>Nuestros servicios</h1>
<div class="contenido">
<div class="contenedor_servicio">

<?php
//primer servicio
    $lista=[
      'image/facebook.png',
      'image/instagram-logo.png',
      'image/youtube.png'
    ];
    $txt="Rediseño y administro Facebook, Instagram, youtube";
    $titulo="Manejo tus redes sociales";
    $color1="rgb(196,196,196)";
    $color2="rgba(196,196,196,.0)";
    $clase ="servicioB";
    cargar_servicios($lista,$txt,$titulo,$color1,$color2,$clase);
//Segundo servicio
    $lista=[
      'image/design-thinking.png'
    ];
    $txt="Tambien puedo diseñar tu logo, baner o  la imagen de tu marca";
    $titulo="Diseño tu imagen";
    $color1="rgb(240,206,206)";
    $color2="rgba(240,206,206,.0)";
    $clase ="servicioA";
    cargar_servicios($lista,$txt,$titulo,$color1,$color2,$clase);
   ?>

</div>
</div>
<?php
function cargar_servicios($lista_iconos,$texto,$titulo ,$def_color1, $def_color2, $clase_id){
$estilos = "style='background:linear-gradient(to right,$def_color1,$def_color2);padding:10px'";
echo "<div id='servicio' $estilos>";
echo "<h3>$titulo</h3>";
echo "<div class='$clase_id servicios'  >"; 
echo "<div class='iconos'>";
   foreach ($lista_iconos as $value) {
     echo   "<img src=$value alt='Animor icono'/>";
   }
echo "</div>";
echo "<p>$texto</p>";
echo "</div>";
echo "</div>";
}

?>
