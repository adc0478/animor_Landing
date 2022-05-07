<link rel="stylesheet" href="css/menu.css" type="text/css" media="screen" title="no title" charset="utf-8">
<div class=contenido_menu>
  <div class="logo">
     <img class="img_logo" src="image/logo completo.png" alt="logo animor"/> 
  </div>
  <div class="menu">
  <button id="abrir_menu" class="vista_ico"  onclick="abrir()"> <img src="image/menu.png" alt=""/>   </button>
  <button id="cerrar_menu" class="ocultar_ico" onclick="cerrar()"> <img src="image/cerrarM.png" alt=""/>   </button>
   <ul class="meter_ul">
    <li><a href="index.php?destino=soy">Quien soy</a></li> 
    <li><a href="index.php?destino=servicio">Servicios</a></li> 
    <li><a href="index.php?destino=trabajos">Mis trabajos</a></li> 
    <li><a href="index.php?destino=contacto">Contacto</a></li> 
   </ul>
  </div>
</div> 
<script charset="utf-8">
  function abrir(){
    document.querySelector("#abrir_menu").setAttribute("class","ocultar_ico");
    document.querySelector("#cerrar_menu").setAttribute("class","vista_ico");
    document.querySelector("ul").setAttribute("class","salir_ul");
  }
  function cerrar(){
    document.querySelector("#abrir_menu").setAttribute("class","vista_ico");
    document.querySelector("#cerrar_menu").setAttribute("class","ocultar_ico");
    document.querySelector("ul").setAttribute("class","meter_ul");
  }
</script>
