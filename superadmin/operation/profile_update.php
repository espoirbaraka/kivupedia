<?php
include '../../class/app.php';

if(isset($_GET['return'])){
    $return = $_GET['return'];

}
else{
    $return = '../home.php';
}

if(isset($_POST['save'])){
    $password_actuel = sha1($_POST['password_actuel']);
    $nom = $_POST['nom'];
    $password = sha1($_POST['password']);
    $email = $_POST['email'];
    $photo = $_FILES['photo']['name'];
    if($password_actuel == $req['Password']){
        if(!empty($photo)){
            $file_dir = "../img/";
            $file = explode(".", $_FILES["photo"]["name"]);
            $newfilename = round(microtime(true)) . '.' . end($file);
            $target_file = $file_dir . basename($newfilename);
            if ($_FILES["photo"]["size"] > 10485760) {
                $newphoto = $req['Photo'];
                $_SESSION['error'] = 'La photo depasse 10 MB';
            }else{
                if ((move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file))) {
                   $newphoto = $newfilename;
                }else{
                    $newphoto = $req['Photo'];
                }
            }
        }
        else{
            $filename = $req['Photo'];
        }


        $conn = $pdo->open();

        try{
            $stmt = $conn->prepare("UPDATE t_user SET Username=:username, Password=:password, Nom=:firstname, Postnom=:postnom, Prenom=:prenom, Email=:email, Photo=:photo WHERE CodeUser=:code");
            $stmt->execute(['username'=>$username, 'password'=>$password, 'firstname'=>$firstname, 'postnom'=>$postnom, 'prenom'=>$prenom, 'email'=>$email, 'photo'=>$filename, 'code'=>$user['CodeUser']]);

            $_SESSION['success'] = 'Compte mis à jour avec succès';
        }
        catch(PDOException $e){
            $_SESSION['error'] = $e->getMessage();
        }

        $pdo->close();

    }
    else{
        $_SESSION['error'] = 'Mot de passe incorrect';
    }
}
else{
    $_SESSION['error'] = 'Compléter les informations réquises avant tout';
}

header('location:'.$return);

?>
