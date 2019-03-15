<?php

print "Preço incial do produto: ";

$precoI = (float) fgets(STDIN);

print "informe o desconto do produto: ";


$desconto = (float) fgets(STDIN);

$descontoT= $desconto/100;

$descontoreal= $descontoT*$precoI;

$precofinal= $precoI-$descontoreal;

print "\nO desconto do produto foi de: $descontoreal reais\nO preço final dele ficou por: $precofinal reais\n";
