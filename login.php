<?php

require_once("require/init.php");

echo render('header.tpl', array('title' => 'Login'));

echo render('navbar.tpl');

echo render('login.tpl');

echo render('footer.tpl');

?>
