<?php
    $test = 0;
    $backhome = ", <a href=\"./\">retourner à l'accueil</a>";
    if (!(isset($_POST["username"]))) {
        echo "<p>username undefined</p>".$backhome;
        $test++;
    } else if (trim(($_POST["username"])) == "") {
        echo "<p>Entre ton nom</p>".$backhome;
        $test++;
    } else if (!(isset($_POST["mail"]))) {
        echo "<p>Entre ton mail</p>".$backhome;
        $test++;
    } else if (!(filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL))) {
        echo "<p>Format de mail invalide</p>".$backhome;
        $test++;
    } else if (!(isset($_POST["passOne"]))) {
        echo "<p>Entre ton mot de passe deux fois</p>".$backhome;
        $test++;
    } else if (!(isset($_POST["passTwo"]))) {
        echo "<p>Entre ton mot de passe deux fois</p>".$backhome;
        $test++;
    } else if ($_POST["passOne"] == "") {
        echo "<p>Entre ton mot de passe deux fois</p>".$backhome;
    } else if ($_POST["passTwo"] == "") {
        echo "<p>Entre ton mot de passe deux fois</p>".$backhome;
    } else if ($_POST["passOne"] != $_POST["passTwo"]) {
        echo "<p>Les mots de passes ne correspondent pas</p>".$backhome;
        $test++;
    } 
    if ($test == 0) 
    { 
        $username = strtolower(trim(htmlspecialchars($_POST["username"])));
        $mail = $_POST["mail"];
        $pass = hash("sha256", htmlspecialchars($_POST["passOne"]));
        $select = $db->query("SELECT COUNT(username) AS count FROM my_users WHERE username = '".$username."'");
        $row = $select->fetch();
        $count = $row['count'];
        if($count > 0) {
            ?>
<p>Username déjà utilisé</p>
    <a href="./">Retour</a>
<?php } else {
            $_SESSION["logged"] = 1;
            $_SESSION["username"] = $username;
            echo "<p>Bonjour ".$username.", tu peux maintenant "; 
            echo '<a href="./">voir le blogroll</a>';
            addUser($username,$mail,$pass);
            header("Refresh: 1; http://".$_SERVER['HTTP_HOST']."/becode_mysql/");
        }
} else { header("Refresh: 1; http://".$_SERVER['HTTP_HOST']."/becode_mysql/"); } ?>