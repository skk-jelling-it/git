<?php

// Autoloader \\
//spl_autoload_extensions(".php"); // comma-separated list \\
spl_autoload_register(function ($class) {
	require_once('OOP/' . $class . '.php');
});

$registry = new Registry();
$registry->set('data', array());
$registry->set('output', NULL);

function render($template, $data = NULL) {
	
	if ($data == NULL) {
		global $registry;
		$data = $registry->get('data');
	}
	
	$file = __DIR__ . '/../view/' . $template;
	$file = str_replace("\\", '/', $file);
	
	if (file_exists($file)) {
		extract($data);

		ob_start();

		require($file);

		$output = ob_get_contents();

		ob_end_clean();

		return $output;
	} else {
		trigger_error('Error: Could not load template ' . $file . '!');
		exit();
	}
	
}

function output() {
	global $registry;
	print $registry->get('output');
}



?>
