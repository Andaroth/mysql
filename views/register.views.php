<h1>Anda Private Blog</h1>
<?php
    if (!(isset($_POST["username"]))) {
        echo "username";
    } else if (!(isset($_POST["mail"]))) {
        echo "mail";
    } else if (!(filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL))) {
        echo "bad mail";
    } else if (!(isset($_POST["passOne"]))) {
        echo "passone";
    } else if (!(isset($_POST["passTwo"]))) {
        echo "passtwo";
    } else if ($_POST["passOne"] != $_POST["passTwo"]) {
        echo "diff pass";
    } else { 
        $username = htmlspecialchars($_POST["username"]);
        $mail = $_POST["mail"];
        $pass = hash("sha256", htmlspecialchars($_POST["passOne"]));
        /*$select = $db->query("SELECT mail FROM my_users WHERE mail = '".$mail."'");
        if(mysql_num_rows($select))
            echo("Mail utilisé");
        else {
            echo "ah";
        }*/
        addUser($username,$mail,$pass);
?>
    <p>Register</p>
<?php } ?>