<?php
include '../../class/app.php';
session_start();

if(!isset($_SESSION['super']) || trim($_SESSION['super']) == ''){
    header('location: ./index');
    exit();
}

$conn = $app->getPDO();

$id = $_SESSION['super'];
$sql = "SELECT * FROM t_superadmin
         WHERE CodeSuper=$id";
$req = $app->fetch($sql);



if(isset($_GET['return'])){
    $return = $_GET['return'];

}
else{
    $return = '../home.php';
}

if(isset($_POST['save'])){
    $password_actuel = sha1($_POST['password_actuel']);
    $photo = $_FILES['photo']['name'];
    $password = $_POST['password'];
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
        }else{
            $newphoto = $req['Photo'];
        }


        if($password == $req['Password'])
        {
            $pass = $req['Password'];
        }else{
            $pass = sha1($_POST['password']);
        }

        $data=[$_POST['nom'],$_POST['email'],$pass,$newphoto,$req['CodeSuper']];
        $sql="UPDATE t_superadmin SET NomComplet=?, Email=?, Password=?, Photo=? WHERE CodeSuper=?";
        if($app->prepare($sql,$data,1)){
            $_SESSION['success'] = 'Profile modifié';
        }else{
            $_SESSION['error'] = 'Profile non modifié';
        }

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
