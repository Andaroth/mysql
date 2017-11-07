<?php
// if ($logged) { ?>
<h1>Anda Private Blog</h1>
    <p>Page privée des news</p>
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
    
} /* else {
include("./views/homepage.views.php);
*/ ?>
