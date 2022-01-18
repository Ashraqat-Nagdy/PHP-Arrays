<!-- Write a PHP program to calculate electricity bill .
Conditions:
For first 50 units – 3.50/unit
For next 100 units – 4.00/unit
For units above 150 – 6.50/unit
You can use conditional statements.
 -->

 <?php 
//  $x = $_REQUEST['x'] ;
//  if ($x <= 50) {

//      $y = $x * 3.5 ;
//      echo "the eletricy bill equal = ". $y . " EG";
//  }
// elseif ($x <= 150 && $x >= 50) {
//     # code... 
//     $y = (($x - 50) * 4) + 50* 3.5 ;
//     echo "the eletricy bill equal = ". $y . " EG";

// }
// else {
//     $y = (($x - 50 ) * 6.5) + 50*3.5;
//     echo "the eletricy bill equal = ". $y . " EG";

// }

$names = ['ahmed' ,'ash' , 'root'];
 foreach($names as $key => $value){
     echo " =>  " . $value;
 }




 
 ?>
<!-- <form action="/action_page.php"  method="post"  >
  <label for="fname">enter you units:</label><br>
  <input type="text" id="fname" name="x" ><br>
  <input type="submit" value="Submit">
</form>  -->
