<?php
 print "Salário incial: ";

 $salario = (float) fgets(STDIN);

 print "Porcentagem do aumento: ";

 $pocentoalmento = (float) fgets(STDIN);

 $porcentagemfinal= $pocentoalmento/100;

 $aumentosalarial= $salario*$porcentagemfinal;

 $salariofinal= $salario+$aumentosalarial;

print "\nSeu Aumento foi de: $aumentosalarial reais\nE Seu salário final foi de: $salariofinal reais\n";