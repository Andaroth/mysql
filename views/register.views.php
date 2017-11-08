<?php
    $test = 0;
    if (!(isset($_POST["username"]))) {
        $userError = "username undefined";
        $test++;
    } else if (trim(($_POST["username"])) == "") {
        $userError = "Entre ton nom";
        $test++;
    } else if (!(isset($_POST["mail"]))) {
        $userError = "Entre ton mail";
        $test++;
    } else if (!(filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL))) {
        $userError = "Format de mail invalide";
        $test++;
    } else if (!(isset($_POST["passOne"]))) {
        $userError = "Entre ton mot de passe deux fois";
        $test++;
    } else if (!(isset($_POST["passTwo"]))) {
        $userError = "Entre ton mot de passe deux fois";
        $test++;
    } else if ($_POST["passOne"] == "") {
        $userError = "Entre ton mot de passe deux fois";
    } else if ($_POST["passTwo"] == "") {
        $userError = "Entre ton mot de passe deux fois";
    } else if ($_POST["passOne"] != $_POST["passTwo"]) {
        $userError = "Les mots de passes ne correspondent pas";
        $test++;
    } 
    if ($test == 0) 
    { 
        $username = trim(htmlspecialchars($_POST["username"]));
        $mail = $_POST["mail"];
        $pass = hash("sha256", htmlspecialchars($_POST["passOne"]));
        $select = $db->query("SELECT COUNT(username) AS count FROM my_users WHERE username = '".$username."'");
        $row = $select->fetch();
        $count = $row['count'];
        if($count > 0)
            echo 
            "<p>Username déjà utilisé</p>
            ".'<a href="./">Retour</a>';
        else {
            $_SESSION["logged"] = 1;
            $_SESSION["username"] = $username;
            echo "<p>Bonjour ".$username.", tu peux maintenant "; 
            echo '<a href="./">voir le blogroll</a>';
            addUser($username,$mail,$pass);
        }
        
?>
    <p>Register</p>
<?php } else {echo '<br/><a href="./">Retour</a>';} ?>