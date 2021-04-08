<?php
$a=$_GET["a"];
$b=$_GET["b"];
$c=$_GET["c"];
if($c=="+"){
    $sum=$a+$b;
    echo "la somme de A et B est: ".$sum."<br>";
}
elseif($c=="-"){
    $sust=$a-$b;
    echo "la sustraction de A et B est :".$sust."<br>";
}
elseif($c=="*"){
    $mult=$a*$b;
    echo "la multiplication de A et B est :".$mult."<br>";
}
elseif($c=="/"){
    $div=$a/$b;
    echo "la division de A et B est :".$div."<br>";
}


?>