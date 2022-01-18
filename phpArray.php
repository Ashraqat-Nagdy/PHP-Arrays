<?php

// 
echo "Indexed Array <br>" ;
$fatherInfo = ['Ahmed' , '50' ,'engineer' ];
//or
 $fatherInfo = array('ahmed', '50' , 'enginner');
 //to print a specific value 
 echo $fatherInfo[0] . ' <br>';
 echo $fatherInfo[1]. ' <br>';
 echo $fatherInfo[2]. ' <br>';
 echo count($fatherInfo). ' <br>';

 //to loop in array use foreach
 foreach($fatherInfo as $key => $value ){
     echo $key. " = ". $value . ' <br>';
 }


 // 
 echo "Associative Array <br>" ;

 $fatherInfo = ['name' => 'Ahmed' ,'age' => '50' , 'job' => 'engineer' ];

 //to access any value use its key 

 echo $fatherInfo['name']. "<br>";
 echo $fatherInfo['job']."<br>";

//to loop in associative array
foreach ($fatherInfo as $key => $value) {
    # code...
    echo $key . "  => " . $value . "<br>";
}

echo "Multidimensions Array <br>" ;
$userInfo = [

    ['name' , 'age' , 'email'],
    ['Ahmed' , 23 ,'asd@asd.com'],
    ['john ' ,60 ,'john.john@ex.com'], 


];


// echo $userInfo[0][1];
// foreach ($userInfo as $key => $value) {
//     # code...
//     // foreach ($variable as $key => $value) {
//     //     # code...
//     // }
//      echo $key  . "<br>";
// }
foreach ($userInfo as $keys => $value) {
    # code...
     foreach($userInfo[$keys] as $key =>  $value ){
     echo  $keys. " = ". $value . "<br>";

    }
 
}
?>
