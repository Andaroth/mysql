<!DOCTYPE html>
<?php include("./model/environment.model.php"); ?>
<html lang="fr">
    <?php include("./views/head.views.php"); ?>
<body>
<div id="all">
    <h1><?php echo $siteTitle; ?></h1>
    <strong><?php echo $userFeedback; ?></strong>
    <em>Page privée des news</em>
    <?php include $getPage; ?>
    <script src="./views/js/app.js"></script>
</div>
</body>
</html>