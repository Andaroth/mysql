<?php
 if ($logged == 1) { ?>
<?php 
// get all the news
foreach ($getNews as $thisQuery) {
    $n_title = htmlspecialchars($thisQuery["title"]);
    $n_content = htmlspecialchars($thisQuery["content"]);
    $n_date = $thisQuery["date"];
    echo 
"    <article class=\"news\">
".
"        <h2>".$n_title."</h2>
".
"        <p>".$n_content."</p>
".
"        <div class=\"date\">".$n_date."</div>
".
"    </article>
";
    
} 
?>
 <form action="./index.php" method="get"><input type="submit" name="deco" value="LogOut"></form>
<?php 
} else {
include("./views/homepage.views.php");
} ?>
