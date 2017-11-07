<?php
    if ((isset($_POST["username"])) && (isset($_POST["pass"]))) { 
    $username = htmlspecialchars($_POST["username"]);
    $pass = hash("sha256", htmlspecialchars($_POST["pass"]));
    $select = $db->exec("SELECT username, pass FROM my_users WHERE username = '".$username."' AND pass = '".$pass."'");
    if(mysqli_num_rows($select)) {
        echo "ah";
    } else { echo "iie"; }
?>
<h1>Anda Private Blog</h1>
    <p>Login</p>
<?php } ?>