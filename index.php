<?php

require_once("require/init.php");

echo render('header.tpl', array('title' => 'Forsiden'));

echo render('navbar.tpl');

echo render('index.tpl');

echo render('footer.tpl');

?>
