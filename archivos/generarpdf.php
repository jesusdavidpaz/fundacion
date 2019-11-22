<?php
require "../vendor/autoload.php";
use Spipu\Html2Pdf\Html2Pdf;
ob_start();
if(isset($_POST["crear"])){
require_once "../pdf.php";
$html=ob_get_clean();
// $html->render();
$html2pdf=new Html2Pdf("p","A4","es","true","UTF-8");
$html2pdf->writeHTML($html);
$pdf=$html2pdf->output("ejemplo.pdf");
// $pdf=$html2pdf->output("ejemplo.pdf",'D');
// $filename = "ejemplo.pdf";
// $html2pdf->downloadPDF();
// file_put_contents($filename, $pdf);
// $html2pdf->stream($filename);
$servidor="localhost";
$user="root";
$password="";
$dbname="roles";
$conexion=mysqli_connect($servidor,$user,$password,$dbname)or die("error en la conexion");
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

}
?>