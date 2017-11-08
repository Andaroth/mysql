<?php
if ((isset($_POST["username"])) && (isset($_POST["pass"]))) { 
$username = trim(htmlspecialchars($_POST["username"]));
$pass = hash("sha256", htmlspecialchars($_POST["pass"]));
$select = $db->query("SELECT COUNT(*) AS count FROM my_users WHERE username = '".$username."' AND pass = '".$pass."'");
$row = $select->fetch();
$count = $row['count'];
if($count==1) {
    $_SESSION["logged"] = 1;
    $_SESSION["username"] = $username;
    ?>
<p>Tu t'es connecté comme il faut !</p>
    <a href="./">Voir les news</a>
<?php 
    header("Refresh: 1; http://".$_SERVER['HTTP_HOST']."/becode_mysql/");
    } else { echo '<p>Mot de passe incorrect</p><a href="./">Retour</a>';}
} ?>