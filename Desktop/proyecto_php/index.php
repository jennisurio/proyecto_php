<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROYECTO_PHP</title>
</head>
<body>
    <h1>PROYECTO_PHP</h1>
    <form method="post" action="registro.php">
        DUI: <input type="number" name="dui" required="true"> NIT: <input type="number" name="nit" required="true"> <br> <br>
        Nombre: <input type="text" name="nombre" required size="40" maxlength="35">
        Apellido: <input type="text" name="apellido" required size="40" maxlength="35"><br>
        Direccion: <input type="text" name="direccion" required> <br>
        <label for="sexo">Sexo:</label> 
        <select id="sexo" name="sexo">
        <option value="maculino">masculino</option>
        <option value="femenino">femenino</option>
        </select>
       
        <select id="estadosivil" name="estadocivil">
        <option value="soltera">soltera</option>
        <option value="casada">casada</option>
        <option value="acompañada">acompañada</option>
        <option value="divorciada">divorciada</option>
        </select><br>
        
        <label for="Email">Email:</label><br>
        <input type="text" type="number" id="email" name="email"><br>
        <label for="pwd">contraseña:</label><br>
        <input type="password" id="pwd" name="contraseña">
        
        <br>
        <input type="submit" value="Enviar datos" name="btn">
        </form>

</body>
</html>