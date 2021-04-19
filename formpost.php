<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Datos del formulario</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="contenedor">
        <div class="formato">
            <h1>Informacion de usuario </h1>
            <h2>Nombre:
                <label><?php echo $_POST["nombre"] . ' ' .$_POST["apellido1"]. ' ' .$_POST["apellido2"];?></label></h2>
            <h2>Direccion: <label> <?php echo $_POST["municipio"]. ' ' . $selectOption = $_POST['estados'] 
            .' ' . $selectOption = $_POST['paises']. ' '.$_POST["domicilio"]  . ' CP ' .$_POST["cp"] ;
            ?></label> </h2>
            <h2>Email: <label><?php echo $_POST["correo"] ; ?></label></h2>
            <h2>Telefono: <label><?php echo $_POST["telefono"] ; ?></label></h2>
        </div>


    </div>

</body>

</html>