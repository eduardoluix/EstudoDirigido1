<?php

print "Quantidade de cigarros fumados por dia: ";

$cigarrospordia = (int) fgets(STDIN);

print "Anos que você fumou: ";

$anosfumandos = (int) fgets(STDIN);
$minutosvidaperdidos= ($cigarrospordia+($anosfumandos*365))*10;
$diasvidaperdidos= $minutosvidaperdidos/1440; /*1440 são quantos minutos há em um dia*/
$diasvidaperdidos= round($diasvidaperdidos);

print "\nA quantidade de minutos perdidos de vida é de: $minutosvidaperdidos minutos\nA quantidade de dias perdidos de vida é de: $diasvidaperdidos dias\n";
