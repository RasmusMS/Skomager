<?php
require_once 'includes/header.php';

$page .= ".php";
var_dump($page);
if(file_exists("pages/$page")){
    include_once "pages/$page";
}
else {
    include_once 'pages/404.php';
}


require_once 'includes/footer.php';