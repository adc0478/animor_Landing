<link rel="stylesheet" href="css/trabajos.css" type="text/css" media="screen" title="no title" charset="utf-8"> 
<div class="contenido">
  <h2>Mis trabajos</h2>
  <div class="contenido_img">
    <!--Agregar imagenes -->
  <?php
      $lista_img=[
        'image/tp/setradio.png',
        'image/tp/elpanoramico.png'
      ];
      $lista_texto=[
        'La pagina de set de radio la manejo desde el 01 de julio de 2021, la radio se encuntra en Mar del plata y se dedica a informar sobre la actualidad del tenis nacional e internacional',
        'El panoramico es una parrilla de campo situada en General rodriguez, me incorpore al proyecto en el año 2020, ya que en funcion de las medidas de restriccion, esta se tuvo que adaptar con el uso de redes sociales'      
      ];
      cargar_img($lista_img,$lista_texto);
    ?>  
  </div>

</div>
<script charset="utf-8">
      //cargar la funcion set interval
      function secuencia(){
        i=0;
        setInterval(pasar_img,7000);
      }
      function pasar_img(){
         document.querySelector(".cont" + i).setAttribute("id","oculto");
         i=contador(i); 
         document.querySelector(".cont" + i).setAttribute("id","visible");
         
      } 
      
      function contador(j){
        const max = 1;
        var salida;
        if (j+1 >= 0 && j+1 <= max){
         salida =j+1;
        }else{
         salida = 0; 
        }
        return salida;
      }
      window.onload = secuencia();
</script>

<?php
function cargar_img($lista, $lista_txt){
  $id = 0;
  foreach ($lista as $value) {
    if ($id == 0){
      echo "<div id='visible' class='cont$id'><img src=$value>";
        echo "<p>".$lista_txt[$id]."</p>";
      echo "</div>";
    }else{
      echo "<div id='oculto' class='cont$id'><img src=$value>";
        echo "<p>".$lista_txt[$id]."</p>";
      echo "</div>";
    }
    $id++; 
  }
}
?>
