<?php

print "Temperatura em ºC: ";

$temperaturaºC = (float) fgets(STDIN);
$temperaturaºF= 9*$temperaturaºC/5+32;

print "A Temperatuda De: $temperaturaºC ºC para Fahrenheit, são: $temperaturaºF ºF\n";