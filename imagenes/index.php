<? 
include("mysql.class.php");

$db=new MySQL();
$db->Open('video','localhost','root','');

$busqueda=$_GET['busqueda'];

//$resultado=$db->QueryArray("SELECT * FROM clientes WHERE nombre LIKE '%$busqueda%'");
$resultado=$db->QueryArray("SELECT * FROM Pelicula WHERE idPelicula='$busqueda'");
 

echo $db->GetHTML('false');

//$resuultado[0][nombre]
//$resuultado[1][nombre]

/*for ($i=0;$i<$db->RowCount();$i++) {
	echo $resultado[$i]['nombre']."<br>";
}*/

echo $db->Error();
?>