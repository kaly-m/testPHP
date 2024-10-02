<?php

$date = new \DateTime();

echo "<p>Hello world!</p>";
echo "<p>Nous sommes le <strong>{$date->format('j F Y')}</strong> et il est <strong>{$date->format('H:i')}</strong></p>";
?>
