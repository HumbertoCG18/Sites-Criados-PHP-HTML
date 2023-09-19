<?php

include('conecta.php');

$id=0;
$um=1;
$radio=$_POST['radio'];

if($radio == 'BL'){ $sql=$mysqli->prepare('update ENQUETE set q1=q1+? where id=?'); }
if($radio == 'MA'){ $sql=$mysqli->prepare('update ENQUETE set q2=q2+? where id=?'); }
if($radio == 'IP'){ $sql=$mysqli->prepare('update ENQUETE set q3=q3+? where id=?'); }
if($radio == 'MT'){ $sql=$mysqli->prepare('update ENQUETE set q4=q4+? where id=?'); }

$sql->bind_param("ii",$um,$um);
$sql->execute();

$sql=$mysqli->prepare('select * from ENQUETE');
$sql->execute();
$sql->bind_result($idfinal,$q1,$q2,$q3,$q4);
$sql->fetch();

$total=$q1+$q2+$q3+$q4;
$BL=round(($q1*100)/$total). '%';
$MA=round(($q2*100)/$total). '%';
$IP=round(($q3*100)/$total). '%';
$MT=round(($q4*100)/$total). '%';

echo "
    Resultado:
    <br>
    <br>
    Total de votos: $total
    <br>
    <br>
    Bruce Lee: $q1<br>
    Porcentagem: $BL <br><br>
    Muhammad Ali: $q2<br>
    Porcentagem: $MA <br><br>
    Yip Man: $q3<br>
    Porcentagem: $IP<br><br>
    Mike Tyson: $q4<br> 
    Porcentagem: $MT <br><br>
";


?>