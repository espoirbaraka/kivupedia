<?php
include 'includes/sessionoutconnected.php';
$conn = $app->getPDO();

if(isset($_POST['login'])){
	$email= $_POST['email'];
	$password = sha1($_POST['password']);
	try{
		$stmt = $conn->prepare("SELECT * FROM t_superadmin WHERE Email = ? AND Password = ? AND CodeCategorie=1");
		$stmt->execute(array($email,$password));
		$nbre = $stmt->rowCount();
		if($nbre == 1){
			$row = $stmt->fetch();
			$_SESSION['super'] = $row['CodeSuper'];
			$date_creation = $row['Created_on'];
			$today = date('Y-m-d H:i:s');
			$stmt = $conn->prepare("UPDATE t_superadmin SET Last_connection = ?, Created_on=? WHERE CodeSuper=?");
			$stmt->execute(array($today,$date_creation,$_SESSION['super']));
		}
		else{
			$_SESSION['error'] = 'Utilisateur inexistant';
		}
	}
	catch(PDOException $e){
		echo "Erreur de connexion: " . $e->getMessage();
	}

}
else{
	$_SESSION['error'] = 'Entrez vos identifiants de connexion d\'abord';
}

//$pdo->close();
header('location: index');

?>
