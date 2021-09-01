<?php

/** Loads all classes in the classes directory */
function __autoload($class_name)
{
    if (file_exists('./classes/' . $class_name . '.php')) {
        require_once './classes/' . $class_name . '.php';
    }
}
