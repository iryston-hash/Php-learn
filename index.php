<?php

$arr = ['water', 'bread', 'juice'];

?>

// <?php 
    
//     $str = "w/e";
//     $arr = explode(', ', $str);  // turns array into Strings
    
//     foreach($arr as $key => $value) {
//         echo $value.'<br>';
//     }



// array_push($arr, 'apple');
// array_push($arr, 'apple');
// array_unshift($arr, 'tomato');
// $arr = array_unique($arr);
// $arr = array_reverse($arr);
// // sort($arr);
// shuffle($arr);
// // unset($arr[2]); removes

foreach ($arr as $key => $value) {
    echo 'array key '.$key.' | value of array = '.$value.'<br>';
}






// ---
// $arr = ['water' ,'juice' , 'bread'];

// // ----
// // $arr = array ('component'=>'products','water'=>'bottle of water');

// // ---
// // $arr[0] = 'water';
// // $arr[1] = 'juice';

// foreach ($arr as $key  => $value) {
//     echo 'Array key '.$key.' - value of array = '.$value.'<br>';
// }
// ---








    // define('DBNAME', 'Filmon'); // Constants

    // $nickname = 'Iryston';
    // $money = 0;
    // $addmoney = 1.2;
    // $addmoney2 = 35;
    // $money = $addmoney + $addmoney2;

// --- Loops

// for($i = 5; $i <= 10; $i++) {
//     echo $i.'<br>';
// }

    


// $i = 12;

    // while($i <=10) {
    //     echo $i.'<br>';
    //     $i++;
    // }

    // do {
    //     echo $i.'<br>';
    //     $i++;
    // } while($i <= 10);

// -----
    // $tlight = 'green';

    // switch ($tlight) {
    //     case 'green':
    //         echo 'green lights';
    //         break;
    //     case 'yellow':
    //         echo 'yellow lights';
    //         break;
    //     case 'red':
    //         echo 'red lights';
    //         break;
        
    //     default:
    //         echo 'Traffic lights are not working';
    //         break;
    // }
// -----
    // if($tlight == 'green') {
    //     echo 'Lights are green , ill cross the road lol';
    // } else if ($tlight == 'yellow') { 
    //     echo 'Now its yellow';
    // } else {
    //     echo 'ill wait for the green lights';
    // }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php test</title>
</head>


<body>
    <!-- <h1>Hello , <?php echo $nickname; ?> </h1> -->
    <?php
        // echo '<div>'.$money.'</div>';
        // echo DBNAME
    ?>

</body>
</html>


