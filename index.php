<?php

// Loads all classes in root
require_once 'autoLoad.php';

function clientCode(Target $target)
{
    echo $target->request();
}

echo "<h3> The application understands it's own code:</h3>";
$target = new Target();
clientCode($target);
echo "\n\n";

$adaptee = new Adaptee();
echo '<h3> The Adaptee can not be understood by the apliation </h3>';
echo 'Adaptee: ' . $adaptee->specificRequest();
echo "\n\n";

echo '<h3> The Adapter can be used to translate it: </h3>';
$adapter = new Adapter($adaptee);
clientCode($adapter);

echo '<h3> Prehaps you have two different ways for storing user info you could use the adapter to make another apps
    user understood by your own </h3>';
