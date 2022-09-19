<?php
function validacaoCPF(){
    if (isset($_POST['cadastrar'])) {
  
     $CPF = ($_POST['CPF']) ;


   $cont = 0; 
   $digito = 0; 
   $soma= 0;
 
   for ($cont=0; $cont <= 8; $cont++) { 
        $soma = $soma + $CPF[$cont] * (10 - $cont);  
   }
   $soma = $soma * 10;
   $digito = $soma % 11;
   if (10== $digito || 11 == $digito) {
    $digito = 0 ;
    }
  $soma =0;
  $digito = 0;
  for ($cont=0; $cont < 9; $cont++) { 
    $soma = $soma + $CPF[$cont] * (11 - $cont);
  }
  $soma= $soma * 10;
  $digito=$soma%11;
  if(10 == $digito || 11== $digito){
    $digito =0;
  }
if ($digito == $CPF[10]) {
    echo "CPF correto"; 
}
else{
    echo"CPF incorreto";
}
}
}
?>

