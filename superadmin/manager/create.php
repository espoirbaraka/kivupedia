<?php
session_start();
require '../../class/app.php';
$event = $_POST['event'];


if ($event == 'CREATE_SUPERADMIN') {
   $data = [$_POST['nom'], $_POST['email'], sha1($_POST['password'])];
   $sql = "INSERT INTO t_superadmin(NomComplet,Email,Password) VALUES(?,?,?)";
  if ($app->prepare($sql, $data, 1)) {
      $_SESSION['success'] = 'Super administrateur ajouté';
   } if ($app->prepare($sql, $data, 1)) {
      $_SESSION['success'] = 'Super administrateur ajouté';
   }
   header("Location: ../superadmin");
}


if ($event == 'CREATE_MEDECIN') {
   $data = [$_POST['nom'], $_POST['postnom'], $_POST['prenom'], $_POST['telephone']];
   $sql = "INSERT INTO tbl_medecin(NomMedecin,PostnomMedecin, PrenomMedecin, TelephoneMedecin) VALUES(?,?,?,?)";
   if ($app->prepare($sql, $data, 1)) {
      $_SESSION['success'] = 'Medecin enregistré';
   }
   header("Location: ../medecin.php");
}

if ($event == 'CREATE_FOURNISSEUR') {
    $data = [$_POST['nom'], $_POST['postnom'], $_POST['prenom'], $_POST['adresse']];
    $sql = "INSERT INTO tbl_fournisseur(NomFournisseur,PostnomFournisseur, PrenomFournisseur, Adresse) VALUES(?,?,?,?)";
    if ($app->prepare($sql, $data, 1)) {
        $_SESSION['success'] = 'Fournisseur enregistré';
    }
    header("Location: ../fournisseur.php");
}

if ($event == 'CREATE_ACCOUNT') {
    $data = [$_POST['email'],sha1($_POST['password']),$_POST['categorie'], $_POST['id']];
    $sql = "INSERT INTO tbl_user(Email, Password, CodeCategorie, CodeMedecin) VALUES(?,?,?,?)";
    if ($app->prepare($sql, $data, 1)) {
        $_SESSION['success'] = 'Compte crée';
    }
    header("Location: ../user.php");
}

if ($event == 'CREATE_MEDICAMENT') {
    $filename = $_FILES['image']['name'];
    if (!empty($filename)) {
        move_uploaded_file($_FILES['image']['tmp_name'], '../img/' . $filename);
    }
    $data = [$_POST['designation'], $_POST['categorie'], $_POST['pv'], $filename,0];
    $sql = "INSERT INTO tbl_medicament(Designation,CodeCategorie, pv, Image, Stock) VALUES(?,?,?,?,?)";
    if ($app->prepare($sql, $data, 1)) {
        $_SESSION['success'] = 'Medicament enregistré';
    }
    header("Location: ../article.php");
}

if ($event == 'ACHETER_MEDICAMENT') {
    $medicament = $_POST['id'];
    $pv = $_POST['pv'];
    $qte = $_POST['quantite'];
    $sql = "SELECT * FROM tbl_medicament WHERE CodeMedicament='$medicament'";
    $req = $app->fetch($sql);
    if(isset($req) AND !empty($req)){
        if($pv >= $_POST['prix']){
            $ancienstock = $req['Stock'];
            $newstock = $ancienstock + $qte;
            $data = [$newstock, $medicament];
            $sql = "UPDATE tbl_medicament SET Stock=? WHERE CodeMedicament=?";
            if($app->prepare($sql, $data, 1)){
                $data = [$_POST['quantite'],$_POST['prix'],$_POST['fournisseur'], $_POST['id'], $_SESSION['user']];
                $sql = "INSERT INTO tbl_approvisionnement(qte, pu, CodeFournisseur, CodeMedicament, CodeUser) VALUES(?,?,?,?,?)";
                if ($app->prepare($sql, $data, 1)) {
                    $_SESSION['success'] = 'Achat effectué';
                }
            }else{
                $_SESSION['error'] = 'Medicament introuvable';
            }
        }else{
            $_SESSION['error'] = 'Impossible de passer cet achat. Le prix d\'achat doit etre inferieur au prix de vente';
        }

    }

    header("Location: ../detail_article.php?art=$medicament");
}

if ($event == 'CREATE_ORDONNANCE') {
    $client = $_SESSION['client'];
    $filename = $_FILES['fichier']['name'];
    if (!empty($filename)) {
        move_uploaded_file($_FILES['fichier']['tmp_name'], '../img/' . $filename);
    }
    $data = [$_POST['hopital'], $_POST['medicament'], $_POST['description'], $filename,$client];
    $sql = "INSERT INTO tbl_ordonnance(Hopital,Medicament, Description, Fichier, CodeClient) VALUES(?,?,?,?,?)";
    if ($app->prepare($sql, $data, 1)) {
        $_SESSION['success'] = 'Ordonnance envoyée';
    }else{
        $_SESSION['error'] = 'Erreur d\'envoie';
    }
    header("Location: ../../dashboard");
}

if ($event == 'CREATE_COMMANDE') {
    $client = $_POST['id'];
    $data = [$_POST['id'], $_POST['date_ordonnance'], $_POST['message']];
    $sql = "INSERT INTO tbl_commande(CodeClient,DateOrdonnance, Observation) VALUES(?,?,?)";
    if ($app->prepare($sql, $data, 1)) {
        $_SESSION['success'] = 'Commande crée';
    }
    header("Location: ../profile_client.php?cli=$client");
}

if ($event == 'ADD_MEDICAMENT') {
    $client = $_POST['client'];
    $data = [$_POST['medicament'], $_POST['qte'], $_POST['id']];
    $sql = "INSERT INTO tbl_detail_commande(CodeMedicament,Quantite, CodeCommande) VALUES(?,?,?)";
    if ($app->prepare($sql, $data, 1)) {
        $_SESSION['success'] = 'Medicament ajouté';
    }
    header("Location: ../profile_client.php?cli=$client");
}

if ($event == 'VENDRE_COMMANDE') {
    $data = [$_POST['prix'], $_POST['id']];
    $sql = "INSERT INTO tbl_paiement(Montant, CodeCommande) VALUES(?,?)";
    $data1 = [$_POST['id']];
    $sql1 = "UPDATE tbl_commande SET Status=1 WHERE CodeCommande=?";
    if ($app->prepare($sql, $data, 1)) {
        if($app->prepare($sql1, $data1, 1)){
            $_SESSION['success'] = 'Vente effectuée';
        }
    }
    header("Location: ../vente.php");
}