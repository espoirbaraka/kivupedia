<?php
include 'includes/sessionclientoutconnected.php';
$conn = $app->getPDO();

if(isset($_POST['login'])){
    $email= $_POST['email'];
    $password = sha1($_POST['password']);
    try{
        $stmt = $conn->prepare("SELECT * FROM t_compte WHERE Email = ? AND Password = ?");
        $stmt->execute(array($email,$password));
        $nbre = $stmt->rowCount();
        if($nbre == 1){
            $row = $stmt->fetch();
            $_SESSION['visitor'] = $row['CodeCompte'];
            $_SESSION['namevisitor'] = $row['NomPersonne'].' '.$row['PostnomPersonne'];
            $today = date('Y-m-d H:i:s');
            $stmt = $conn->prepare("UPDATE t_compte SET Last_connection = ? WHERE CodeCompte=?");
            $stmt->execute(array($today,$_SESSION['visitor']));
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
header('location: login');

?>
