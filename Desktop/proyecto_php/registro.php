<h1>mostrar datos</h1>
<?php
if(isset($_REQUEST["dui"]))
{  echo "<br>dui:".$_REQUEST["dui"];
   echo "<br>nit:".$_REQUEST["nit"];
   echo "<br>nombre".$_REQUEST["nombre"]; 
   echo "<br>apellido".$_REQUEST["apellido"]; 
   echo "<br>direccion".$_REQUEST["direccion"]; 
   echo "<br>sexo".$_REQUEST["sexo"]; 
   echo "<br>tipo de empleo".$_REQUEST["tipodeempleo"]; 
   echo "<br>email".$_REQUEST["email"]; 
   echo "<br>contraseña".$_REQUEST["contraseña"]; 

}
?>