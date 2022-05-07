<link rel="stylesheet" href="css/contacto.css" type="text/css" media="screen" title="no title" charset="utf-8"> 
<div class="contenido-contacto">
<div class="formulario">
   <h2>Contactenos:</h2>
    <div class="datos_contacto">
        <div class="campos"><label>Nombre y apellido</label><input type="text" value="" name="" id="nombre"/></div>
        <div class="campos"><label>Mail</label><input type="email" value="" name="" id="mail"/></div>
        <div class="campos"><label>Telefono(*)</label><input type="number" value="" name="" id="telefono"/></div>
    </div>
    <div class="campos"><label>Mensaje</label><textarea name="" id="observacion"></textarea></div>
    <div class="campo_accion">
       <button onclick="enviar_form()">Enviar</button>
       <div class="container_mje" id="container_mje">
           <div class="mje" id="mje"></div>
       </div>
    </div>
</div>
<p>(*) Opcional</p>
</div>
<script src="js/nodos.js" charset="utf-8"></script>
<script charset="utf-8">
  function enviar_form(){
    //crear el dataform
    let datos = new FormData();
    datos.append('nombre',document.querySelector('#nombre').value);
    datos.append('mail',document.querySelector('#mail').value);
    datos.append('telefono',document.querySelector('#telefono').value);
    datos.append('mensaje',document.querySelector('#observacion').value);    
    if (validar_datos(document.querySelector('#nombre').value) & validar_datos(document.querySelector('#mail').value) & validar_datos(document.querySelector('#mail').value)){
     cargar_mensaje("Estamos enviando su mensaje","procesando");
    //cargar la url del endpoint
    var url = "endpoint/envio_mail.php";
    var obj = {
     method:"POST",
     body:datos 
    }
    //crear el fetch
    fetch(url,obj) 
    //obtener la respuesta//procesar la respuesta si request es 202 

         .then(response=>response.text())
         .then (data=>informe(data))
         .catch (data => console.log(data));
         
    }else{
     cargar_mensaje("Verificar los campos llenos","error");
    }
   
  }
  function validar_datos(valor){
    if (valor !="") {
      return true;
    }else{
      return false;
    }
  }
  function informe(response){
    var n = response.search ("SMTP ERROR");
   if (n===-1){
     cargar_mensaje("Su mensaje fue enviado correctamente","exito");
    }else{
      cargar_mensaje("Error en el envio, intentar mas tarde","error");
    }
  }
  function cargar_mensaje (mje,tipo){
    var nodo = new nodos();
    //borrar mje
    nodo.borrar("mje","container_mje");
    //crear nuevamente el nodo
    nodo.crear("div","mje","mje","container_mje");
    if (tipo==="procesando"){
      nodo.crear("div","circulo_pros","circulo_pros","mje");
      nodo.crearTexto("mje",mje);
      document.querySelector(".mje").style.color="blue";
    }else if (tipo==="error"){
      nodo.crear("div","circulo_error","circulo_error","mje");
      nodo.crearTexto("mje",mje);
      document.querySelector(".mje").style.color="red";
    }else if(tipo==="exito"){
      nodo.crear("div","circulo_ok","circulo_ok","mje");
      nodo.crearTexto("mje",mje);
      document.querySelector(".mje").style.color="green"; 
      limpiar_formulario();
    }
  
  }
  function limpiar_formulario (){
     document.querySelector("#nombre").value="";  
     document.querySelector("#mail").value="";  
     document.querySelector("#telefono").value="";  
     document.querySelector("#observacion").value="";  
  }
</script>
