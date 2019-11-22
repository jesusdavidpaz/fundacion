

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$servidor="localhost";
$user="root";
$password="";
$dbname="roles";
$conexion=mysqli_connect($servidor,$user,$password,$dbname)or die("error en la conexion");

if(!$conexion){
    echo"no se pudo conectar con la base de datos";
}else{
    //echo"La base de datos es de mysql";
}
if(isset($_POST["crear"])){
    
$ciudad=$_POST["ciudad"];
// echo $ciudad;
$fecha=$_POST["fecha"];
$nom_nino=$_POST["nom_nino"];
$fecha_nacimiento=$_POST["fecha_nacimiento"];
$edad=$_POST["edad"];
$peso_nino=$_POST["peso_nino"];
$estatura_nino=$_POST["estatura_nino"];
$vive_nino=$_POST["vive_nino"];
$tiene_hermanos=$_POST["tiene_hermanos"];
$n_hermanos=$_POST["n_hermanos"];
$edades=$_POST["edades"];

$insertar="insert into registro(ciudad,fecha,nombre_nino,fecha_nacimiento,edad,peso_nino,estatura_nino,vive_nino,tiene_hermanos,num_hermanos,edades) values ('".$ciudad."', '".$fecha."', '".$nom_nino."', '".$fecha_nacimiento."', '".$edad."', '".$peso_nino."', '".$estatura_nino."', '".$vive_nino."', '".$tiene_hermanos."', '".$n_hermanos."', '".$edades."')";
$resultado=mysqli_query($conexion, $insertar);

if($resultado){
    header("Location:../index2.php");
}
}

if(isset($_POST["login"])){
    $correo=$_POST["correo"];
    // echo $correo;
    $password=$_POST["password"];
    $consulta="select * from usuarios where correo='$correo'";
    $resultado=mysqli_query($conexion,$consulta);
    
        while($fila=$resultado->fetch_assoc()){
if(password_verify($password, $fila["password"]) && $correo==$fila["correo"]){
    // echo $correo;
    // header("Location:../index3.html");
            session_start();
            $_SESSION["id"]=$fila["id"];
            $_SESSION["apellio"]=$fila["apellido"];
            $_SESSION["correo"]=$fila["correo"];
            $_SESSION["password"]=$fila["password"];
            $_SESSION["rol"]=$fila["idrol"];
            
            if($_SESSION["rol"]==1){
               header("Location:../index2.php");
            // echo 1;
            }                       
            }   
        
        }
}

?>    

<img src="../images/logo.png" alt="" width="50px" height="50px" srcset="">
</body>
</html>