<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    #imagen{
        position: absolute;
        left: 10px;
        margin-top:-5px;
        /* float:left; */
    }
    h1.encabezado{
        border: 3px blue dashed;
        

    border-left: 2px solid black;
    border-right: 2px solid black;


    border-radius: 10px;

        /* border: 1px solid black;
        width: 100%; */
        /* width:150px; */
        width:150px;
margin:50px;
/* border:1px solid #3c6; */
padding:20px;
font-size:italic;
/* background-color:#cfc; */
/* color:#000; */
        /* position: absolute; top: 80px; left: 200px; */
        text-align:center;
    }
    input{
        border: 3px blue dashed;
    }

    </style>
</head>
<body>
<img src="../images/logo.png" id="imagen" width="150" height="150" alt=""  srcset="">
 <h1 class="encabezado">Formulario De Ingreso </h1>
 <label for="">Ciudad:</label>
 <h4><?php echo $_POST["ciudad"]?></h4>
 <label for="">Fecha:</label>
 <h4><?php echo $_POST["fecha"]?></h4>
 <label for="">Nombre del Niño:</label>
 <h4><?php echo $_POST["nom_nino"]?></h4>
 <label for="">Fecha de nacimiento:</label>
 <h4><?php echo $_POST["fecha_nacimiento"]?></h4>
 <label for="">Edad del niño:</label>
 <h4><?php echo $_POST["edad"]?></h4>
 <label for="">Peso del niño:</label>
 <h4><?php echo $_POST["peso_nino"]?></h4>
 <label for="">Estatura del niño:</label>
 <h4><?php echo $_POST["estatura_nino"]?></h4>
 <label for="">Donde vive el niño:</label>
 <h4><?php echo $_POST["vive_nino"]?></h4>
 <label for="">Tiene hermanos el niño:</label>
 <h4><?php echo $_POST["tiene_hermanos"]?></h4>
 <label for="">Numero de hermanos:</label>
 <h4><?php echo $_POST["n_hermanos"]?></h4>
 <label for="">Edads de los hermanos:</label>
 <h4><?php echo $_POST["edades"]?></h4>
 
</body>
</html>