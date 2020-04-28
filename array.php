<?php
// $angka = [1,2,3,4,5];
// echo $angka[2];
// // 3

// echo $angka[0] + $angka[4];
// // 6

$abjad = ["A","B","C",["D","E",["F","G","H"]],"I"];
     //  [ 0 , 1 , 2 ,[ 0 , 1 ,[ 0 , 1 , 2 ]], 4 ]
echo $abjad[0].$abjad[3][2][2];
// AH

?>

