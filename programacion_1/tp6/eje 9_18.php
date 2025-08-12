<?php
#punto18
$matriz=array(array(
    "columna1"=>2,
    "columna2"=>2,
    "columna3"=>4,),
    array("columna1"=>3,
    "columna2"=>3,
    "columna3"=>1
),
    array("columna1"=>2,
    "columna2"=>1,
    "columna3"=>3 
    )
   

);
$suma1=$matriz[0]["columna1"]+$matriz[1]["columna1"]+$matriz[2]["columna1"];
echo "Columna 1 _$suma1<br/>";
$suma2=$matriz[0]["columna2"]+$matriz[1]["columna2"]+$matriz[2]["columna2"];
echo "Columna 2 _$suma2<br/>";
$suma3=$matriz[0]["columna3"]+$matriz[1]["columna3"]+$matriz[2]["columna3"];
echo "Columna 3_ $suma3<br/>";
#punto9
$alumnos= array(1.80,2.40,1.10,2.16,1.50,1.20,1.15,1.12,0.50,1.67);
$acumulador=0;
$contador=0;
foreach ($alumnos as $valor){$acumulador+=$valor;
$contador++;
$promedio= $acumulador/$contador;}
echo"$promedio<br/>";
#punto8
