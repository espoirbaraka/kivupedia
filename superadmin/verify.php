<?php
include 'includes/sessionoutconnected.php';
$conn = $app->getPDO();

if(isset($_POST['login'])){
	$email= $_POST['email'];
	$password = sha1($_POST['password']);
	try{
		$stmt = $conn->prepare("SELECT * FROM t_superadmin WHERE Email = ? AND Password = ?");
		$stmt->execute(array($email,$password));
		$nbre = $stmt->rowCount();
		if($nbre == 1){
			$row = $stmt->fetch();
			$_SESSION['super'] = $row['CodeSuper'];
			$today = date('Y-m-d');
			$stmt = $conn->prepare("UPDATE t_superadmin SET Last_connection = ? WHERE CodeSuper=?");
			$stmt->execute(array($today,$_SESSION['super']));
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
header('location: index.php');

?>
