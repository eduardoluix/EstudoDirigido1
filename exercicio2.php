<?php

print "informe a Quantidade de dias: ";

$qtdedias = (int) fgets(STDIN);

print "informe a Quantidade de horas: ";

$qtdehoras = (int) fgets(STDIN);

print "informe a Quantidade de minutos: ";

$qtdeminutos = (int) fgets(STDIN);

print "informe a Quantidade de segundos: ";

$qtdesegundos = (float) fgets(STDIN);

$diaspraseg = $qtdedias*24*60*60;

$horaspraseg = $qtdehoras*60*60;

$minutospraseg = $qtdeminutos*60;
  

$segundostotais = $diaspraseg+$horaspraseg+$minutospraseg+$qtdesegundos;

 print "total de segundo foi de: $segundostotais\n";