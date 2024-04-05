<?php

//PHP ESERCIZI 01

//Esercizio 1
// $int = 7;
// $string = "Ciao mondo crudele";
// $float = 9.8;
// $bool = true;


// var_dump($int);
// var_dump($string);
// var_dump($bool);

// define('FLOAT_COSTANTE', $float);
// define('STRING_COSTANTE', $string);
// define('BOOL_COSTANTE', $bool);
// define('INT_COSTANTE', $int);

// echo  FLOAT_COSTANTE;
// echo  STRING_COSTANTE;
// echo  BOOL_COSTANTE;
// echo  INT_COSTANTE;


//ESERCIZIO 2

// $text = "Marco";

// $text2 = "hai";

// $text3 = "sete";

// $text4 = "?";

// $text5 = "Perché";

// $text6 = $text2;

// $text7 = 'bevuto';

// $text8 = "tutto";

// echo $text . " " . $text2 . " " . $text3 . $text4 . " " . $text5 . " " . $text6 . " " . $text7 . " " . $text8 . $text4;



//ESERCIZIO 3

// $words1 = [
    
//     'vostro' , 67 , 'essere' , 'colle' , 'mi' , 'sempre' , [
        
//         'oscuro' , 'era' , 89 , ['mezzo' , 'E'],
        
//         'ritrovai' , 'per'
        
//     ],
//     'diritta'
    
// ];
// $words2 = [
    
//     'elemento1' => 25.89,
    
//     'elemento2' => 'possa',
    
//     'elemento3' => [
        
//         'Virgilio',
        
//         'Favore',
        
//         'favore',
        
//         ['Fortuna']
        
//     ],
    
//     'fine' => '!'
    
// ];

//  echo $words1[6][3][1] . " " . $words2['elemento2'] . " " . "la" . " " . $words2['elemento3'][3][0] . " " . $words1[2] . " " . $words1[5] . " " . "a" . " " . $words1[0] . " " . $words2['elemento3'][2];
 

//ESERCIZIO 4

// $users = [
//     ['name' => 'Federico', 'surname' => 'Cotzia', 'gender' => 'M'],
// ];
// for ($i=0; $i < count($users); $i++) {
//     echo "Buongiorno Sig.".  " " . $users[$i]["name"] . " " . $users[$i]["surname"] ;
// }

//ESERCIZIO 5

// $array = [ 1 , 10 , 12 , 5 , 8 , 6]; 

// $array = [ 1 , 10 , 12 , 5 , 8 , 6];
// $contatorePari = 0;
// $sommaPari = 0;
// foreach ($array as $numero) {
//     if ($numero % 2 === 0) {
//         $contatorePari++;
//         $sommaPari += $numero;
//     }
// }
// echo $sommaPari;


// ESERCIZIO 6

// for($i=1; $i<=100; $i++) {
//     switch ($i) {
//         case $i % 15 == 0:
//             echo "HACKADEMY \n";
//             break;
//         case $i % 3 == 0:
//             echo "PHP \n";
//             break;
//             case $i % 5 == 0:
//                 echo "JS \n";
//                 break;
//         default:
//             echo "$i \n";
//             break;
//     }
// }