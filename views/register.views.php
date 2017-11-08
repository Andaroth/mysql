<?php
    if (!(isset($_POST["username"]))) {
        echo "Entre ton nom";
    } else if (!(isset($_POST["mail"]))) {
        echo "Entre ton mail";
    } else if (!(filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL))) {
        echo "Format de mail invalide";
    } else if (!(isset($_POST["passOne"]))) {
        echo "Entre ton mot de passe deux fois";
    } else if (!(isset($_POST["passTwo"]))) {
        echo "Entre ton mot de passe deux fois";
    } else if ($_POST["passOne"] != $_POST["passTwo"]) {
        echo "Les mots de passes ne correspondent pas";
    } else { 
        $username = htmlspecialchars($_POST["username"]);
        $mail = $_POST["mail"];
        $pass = hash("sha256", htmlspecialchars($_POST["passOne"]));
        echo "pass: ".$pass.", <br>";
        $select = $db->query("SELECT COUNT(username) AS count FROM my_users WHERE username = '".$username."'");
        $row = $select->fetch();
        $count = $row['count'];
        if($count > 0)
            echo 
            "<p>Username déjà utilisé</p>
            ".'<a href="./">Retour</a>';
        else {
            $_SESSION["logged"] = 1;
            echo "<p>Bonjour ".$username.", tu peux maintenant "; 
            echo '<a href="./">voir le blogroll</a>';
            addUser($username,$mail,$pass);
        }
        
?>
    <p>Register</p>
<?php } ?>