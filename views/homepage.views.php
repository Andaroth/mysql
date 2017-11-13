<?php
    // Si l'utilisateur est connecté, on lui montre les news
    if ($logged == 1) {
        echo "<p class=\"logged\">Connecté en tant que <b>".ucfirst($_SESSION["username"])."</b></p>";
        echo "<form action=\"./\" method=\"get\"><input type=\"submit\" name=\"deco\" value=\"Se déconnecter\"></form>";
        include("./views/shoutbox.views.php");
        include("./views/blogroll.views.php");
        include("./views/postnews.views.php");
    } else { // Sinon on affiche la landing page traditionnelle
?>
<p>Inscrivez-vous ou connectez-vous pour découvrir le blogroll</p>
    <div class="loginout">
        <div>
            <h2>Se connecter</h2>
            <form action="./login" method="post">
                <div class="twocol">
                    <div>
                        <label for="login_username">Nom d'utilisateur</label>
                        <label for="login_pass">Mot de passe</label>
                    </div>
                    <div>
                        <input class="clearform first inputupper" type="text" name="username" id="login_username" placeholder="username">
                        <input class="clearform" type="password" name="pass" id="login_pass" placeholder="password">
                    </div>
                </div>
                <input type="submit" value="Connexion">
            </form>
        </div>
        <div>
            <h2>S'inscrire</h2>
            <form action="./register" method="post" autocomplete="off">
                <div class="twocol">
                    <div>
                        <label for="register_username">Nom d'utilisateur</label>
                        <label for="register_mail">Votre e-mail</label>
                        <label for="register_passOne">Mot de passe</label>
                        <label for="register_passTwo">Confirmez</label>
                    </div>
                    <div>
                        <input class="clearform first inputupper" type="text" name="username" id="register_username" autocomplete="off" placeholder="username">
                        <input class="clearform" type="text" name="mail" id="register_mail" autocomplete="off" placeholder="mail">
                        <input class="clearform" type="password" name="passOne" id="register_passOne" autocomplete="off" placeholder="password">
                        <input class="clearform" type="password" name="passTwo" id="register_passTwo" autocomplete="off" placeholder="password (again)">
                    </div>
                </div>
                <input type="submit" value="Inscription">
            </form>
        </div>
    </div>

    <?php } // Il faut refermer le else 