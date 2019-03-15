<?php

print "Distância pretendida em Km: ";

$distanciapretendida = (float) fgets(STDIN);

print "Velocidade média esperada(Km/h): ";

$velocidaesperada = (float) fgets(STDIN);
$tempototaldeviagem= $distanciapretendida/$velocidaesperada;

print "Tempo de viagem estimado: $tempototaldeviagem horas\n";