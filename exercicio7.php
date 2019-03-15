<?php

print "Quantidade de Km percorridos com o carro: ";

$kmtotal = (float) fgets(STDIN);

print "Quantidade de dias que o carro foi alugado: ";

$diasAlugado = (float) fgets(STDIN);
$alugueldia= $diasAlugado*60;
$aluguelkm= $kmtotal*0.15;
$precototal= $alugueldia+$aluguelkm;

print "\nO Preço total a pagar pelo carro por km é de: $aluguelkm reais\nO Preço total a pagar por dia(S): $alugueldia reais\nO Preço total a pagar foi de: $precototal reais\n";