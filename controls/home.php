<?php 
//require_once('./db_connect.php');
if (isset($_POST['btn-registro'])) {
	echo 'clicou';
}
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$sobnome = $_POST['sobnome'];
$rua = $_POST['rua'];
$numcasa = $_POST['numcasa'];
$setor = $_POST['setor'];
$tel = $_POST['tel'];
$obs = $_POST['obs'];

echo $_POST;

//if ($conn) {
//	$result = mysqli_query($conn, "INSERT INTO cliente VALUES '".$nome."', '".$sobnome."', '".$rua."', '".$setor."', '".$numcasa."', '".$obs."', '".$tel."', '".$codigo."' ");
//}else {
//	echo "erro ao conectar ",$_POST;
//}

?>
