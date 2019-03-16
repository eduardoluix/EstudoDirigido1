<?php
print "Seja Bem Vindo A Loja Das Tintas;\n";
Print "\nQuantos Metros Quadrados Pretente Pintar?: ";

$areaparapintar = fgets(STDIN);

    $Area = $areaparapintar + (($areaparapintar*10)/100);
//18L
    $Qtdedelatas = ceil($Area/108);
    $Precodalata = $Qtdedelatas*80;
print "Você precisará de $Qtdedelatas lata(s) de 18L. \n";
print "Comprar as latas custará um total de: " .'R$' ."$Precodalata. \n";

print "\n";

//3,6
    $Qtdedegalao = ceil($Area/21.6);
    $Precodogalao = $Qtdedegalao*25;
print "Você precisará de $Qtdedegalao galão(ões) de 3,6L. \n";
print "Que custará um total de " .'R$' ."$Precodogalao. \n";

print "\n";

//18L e 3,6L
    $Qtdedegalao2 = $Qtdedegalao;
    $Qtdedelata = 0;

while ($Qtdedegalao2 >= 5) {
    $Qtdedelata = $Qtdedelata + 1;
    $Qtdedegalao2 = $Qtdedegalao2;
}
    $Total_a_pagar = ($Qtdedegalao2*25) + ($Qtdedelata*80);
print "Você precisará de $Qtdedelata lata(s) e $Qtdedegalao2 galão(ões) de tinta. \n";
print "O prço total a pagar será de " .'R$' ."$Total_a_pagar\n";
    