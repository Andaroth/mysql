<?php
    if 
    (
        (isset($_POST["username"])) && 
        (isset($_POST["mail"])) && 
        (isset($_POST["passOne"])) &&
        (isset($_POST["passTWo"])) &&
        ($_POST["passOne"]) == $_POST["passTwo"]
    ) { ?>
<h1>Anda Private Blog</h1>
    <p>Register</p>
<?php }
    else 
    { ?>
<h1>Anda Private Blog</h1>
    <p>Fail</p>
<?php }
?>