<?PHP
include 'Recpost.inc.php';
/*if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
    unset ($_POST['prenom']);
} else {
    $prenom = '';
}
if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    unset ($_POST['nom']);
} else {
    $nom = '';
}
if (isset($_POST['psw'])) {
    $psw = $_POST['psw'];
    unset ($_POST['psw']);
} else {
    $psw = '';
}
if (isset($_POST['nomfich'])) {
    $nomfich = $_POST['nomfich'];
    unset ($_POST['nomfich']);
} else {
    $nomfich = '';
}
if (isset($_POST['sexe'])) {
    $sexe = $_POST['sexe'];
    unset ($_POST['sexe']);
} else {
    $sexe = '';
}
if (isset($_POST['equipe1'])) {
    $equipe1 = $_POST['equipe1'];
    unset ($_POST['equipe1']);
} else {
    $equipe1 = '';
}
if (isset($_POST['equipe2'])) {
    $equipe2 = $_POST['equipe2'];
    unset ($_POST['equipe2']);
} else {
    $equipe2 = '';
}
if (isset($_POST['equipe3'])) {
    $equipe3 = $_POST['equipe3'];
    unset ($_POST['equipe3']);
} else {
    $equipe3 = '';
}
if (isset($_POST['equipe4'])) {
    $equipe4 = $_POST['equipe4'];
    unset ($_POST['equipe4']);
} else {
    $equipe4 = '';
}
if (isset($_POST['equipe5'])) {
    $equipe5 = $_POST['equipe5'];
    unset ($_POST['equipe5']);
} else {
    $equipe5 = '';
}
if (isset($_POST['datenais'])) {
    $datenais = $_POST['datenais'];
    unset ($_POST['datenais']);
} else {
    $datenais = '';
}
if (isset($_POST['bio'])) {
    $bio = $_POST['bio'];
    unset ($_POST['bio']);
} else {
    $bio = '';
}
if (isset($_POST['destinations'])) {
    $destinations = $_POST['destinations'];
    unset ($_POST['destinations']);
} else {
    $destinations = '';
}
if (isset($_POST['couleur'])) {
    $couleur = $_POST['couleur'];
    unset ($_POST['couleur']);
} else {
    $couleur = '';
}*/
//$prenom = "Paul-Louis";
//$nom = "Chateaubriand";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>RETOUR2</title>
<meta charset="UTF-8">
<style type="text/css">
        .affichecouleur {
        color:<?PHP echo"$couleur";?>;
    }
</style>
</head>
<body>
<h3>Vous vous appelez <?PHP echo $prenom.' '.$nom; ?>.</h3>
<h3>Votre mot de passe est : <?PHP echo $psw; ?></h3>
<h4>Fichier choisi : <?PHP echo $nomfich; ?>.</h4>
<h4>Vous êtes un<?PHP if ($sexe=="F") {echo 'e femme';} else {echo ' homme';}?>.</h4>
<h4><?PHP echo 'Votre date de naissance est le '.$datenais;?></h4>
<h4><?PHP echo 'Vous racontez votre vie : '.$bio;?></h4>
<h4><?PHP
@$nbequipes = ((strlen($equipe1)>0)?1:0) + ((strlen($equipe2)>0)?1:0) + ((strlen($equipe3)>0)?1:0) + ((strlen($equipe4)>0)?1:0) + ((strlen($equipe5)>0)?1:0);
//echo $nbequipes;
if ($nbequipes==0) {echo "vous n'avez aucune équipe favorite";} elseif($nbequipes == 1) { echo "Votre équipe favorite est : ";} else {echo "Vos $nbequipes équipes favorites sont : ";}
@$eq=$equipe1. ' ' .$equipe2. ' ' .$equipe3. ' ' .$equipe4. ' ' .$equipe5;
echo $eq;
?>
</h4>
<!--<h4>Vos équipes de foot favorites sont : <?PHP echo $equipe1. ' ' .$equipe2. ' ' .$equipe3. ' ' .$equipe4. ' ' .$equipe5;?></h4>-->
<h4><?PHP echo 'Destinations : '.$destinations;?></h4>
<!-- style="color:<?PHP echo $couleur;?>;"-->
<h4 class="affichecouleur"><?PHP echo 'Voilà la couleur choisie : '.$couleur;?></h4>

</body>
</html>