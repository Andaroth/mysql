<!DOCTYPE html>
<?php include("./model/environment.model.php"); ?>
<html lang="fr">
    <?php include("./views/head.views.php"); ?>
<body>
<div id="all">
    <h1>Anda Private Blog</h1>
    <?php echo $userError; ?>
    <em>Page privée des news</em>
    <?php
    $uri = explode("/", $_SERVER["REQUEST_URI"]);
    $page = $uri[2] != "" ? $uri[2] : "homepage";
    $view = "./views/" . $page . ".views.php";
    if (count($uri) > 3) {
        header("Location: http://".$_SERVER['HTTP_HOST']."/becode_mysql/");
    }
    else if (!(file_exists($view)))  {
        $getPage = "./views/homepage.views.php";
    }
    else {
        $getPage = $view;
    }
    include($getPage);
    ?>
    <script src="./views/js/app.js"></script>
</div>
</body>
</html>