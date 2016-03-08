

<?php

function __autoload($class) {
	include "classes/".$class.".php";
}


$site = new site;
$site->addheader("header.php");
$site->addfooter("footer.php");
$page = new page;
$title = "My title";
$content = "
<div>
<h2> MEN PHP SEHIFE YARADIRAM</h2>
<p> Bu bir baslangicdir</p>
</div>";
$site->display($content, $title);
// $page->display($content);
// var_dump($site);

?>