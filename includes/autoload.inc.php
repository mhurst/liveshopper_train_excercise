<?php
//To make this cleaner and easier, lets auto load all of our classes.
spl_autoload_register(function ($class_name) {	
	$parts = explode('\\', $class_name);
	if (file_exists('classes/' . end($parts) . '.php')) {
		include 'classes/' . end($parts) . '.php';
	} else {
		include 'classes/traincar_classes/' . end($parts) . '.php';
	}
});