<?php
    if (!$logged) {
?>
<h1>Anda Private Blog</h1>
    <p>Inscrivez-vous ou connectez-vous pour découvrir le blogroll</p>
    <div class="loginout">
        <div>
            <h2>Se connecter</h2>
            <form action="/?page=login" method="post">
                <div class="twocol">
                    <div>
                        <label for="login_username">Nom d'utilisateur</label><br>
                        <label for="login_pass">Mot de passe</label>
                    </div>
                    <div>
                        <input type="text" name="username" id="login_username"><br>
                        <input type="password" name="username" id="login_pass">
                    </div>
                </div>
                <input type="submit">
            </form>
        </div>
        <div>
            <h2>S'inscrire</h2>
            <form action="/?page=register" method="post">
                <div class="twocol">
                    <div>
                        <label for="register_username">Nom d'utilisateur</label><br>
                        <label for="register_mail">Votre e-mail</label><br>
                        <label for="register_passOne">Mot de passe</label><br>
                        <label for="register_passTwo">Confirmez</label>
                    </div>
                    <div>
                        <input type="text" name="username" id="register_username"><br>
                        <input type="password" name="mail" id="register_mail"><br>
                        <input type="password" name="passOne" id="register_passOne"><br>
                        <input type="password" name="passTwo" id="register_passTwo">
                    </div>
                </div>
                <input type="submit">
            </form>
        </div>
    </div>
<?php } else { include("./views/blogroll.views.php"); } ?>