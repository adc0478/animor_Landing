<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width"/>
    <title>Animor</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
  <?php 
    include ('componentes/rutas.php');
    include ('componentes/menu.php');
    if (isset($_GET['destino'])) {
      include ($ruta[$_GET['destino']]);
    }else{
      include ($ruta['soy']);
    };
    include ("componentes/footer.php");
  ?>    
   <a href="https://api.whatsapp.com/send?phone=5491151206774" class="whatsapp_chat"><img src="image/whatsapp_chat.png" alt="Comunicacion con whastapp animor"></a>
  </body>
</html> 
