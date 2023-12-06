 <?php
 $x = 30;
 
if($x > 50){
	echo"$x is greater than 50";
}
else{
	echo"$x is lesser than 50";
 }

?>


<?php 
echo"<br/><br/>"; 
$num=15;  
	if($num < 100){  
		echo "$num is less than 100";  
	}  
?>

<?php
echo"<br/><br/>";
$x = 30;
 
 if($x > 50){
	echo"x is greater than 50";
 }
 elseif($x > 20){
  // This block will be executed
	echo"$x is greater than 20 but lesser than 50";
 }
 else{
	echo"$x is lesser than 20";
 }
?>

<?php
echo"<br/><br/>";

  $a = 15;
  $b = 10;
  $c = 5;
  
if($a > $b){
	if($a > $c){
		echo"$a is greater than $b and $c";
	}
	else{
		echo" $a  is lesser then $b & $c";
	}
 }
 else{
	echo" $a, $b and $c is equal";
 }

?>




<?php
echo"<br/><br/>";

  $a = 13;
  $b = 13;
  $c = 13;
  
if($a > $b){
	if($a > $c){
		echo"$a is greater than $b and $c";
	}
	else{
		echo" $a  is lesser then $b & $c";
	}
 }
 else{
	echo" $a, $b and $c is Equal";
 }

?>




<?php
echo"<br/><br/>";

$a = 1;
$b = 10;
$c = 5;
  
if($a > $b && $a > $c){
	echo"$a is greater than $b and Sc";
 }
else{
 echo"$a is less than $b and $c";
}
?>





<?php
echo"<br/><br/>";

$a = 10;
$b = 50;
$c = 30;
  
if($a > $b){
	  if($a > $c){
		echo"$a is greater than $b and $c.";
	  }
	  else{
		echo"$c is greater than $c and $c.";
	  }
}
else{
	if($b > $c){
	   echo"$b is greater than $a and $c.";
	}
	else{
	   echo"$c is greater than $a and $b.";
	}
}
 
?>



<?php  
echo"<br/><br/>";
    $marks=69;      
        if ($marks < 33){    
            echo "Fail";    
        }    
        else if ($marks>=34 && $marks<50) {    
            echo "D grade";    
        }    
        else if ($marks>=50 && $marks<65) {    
           echo "C grade";   
        }    
        else if ($marks>=65 && $marks<80) {    
            echo "B grade";   
        }    
        else if ($marks>=80 && $marks<90) {    
            echo "A grade";    
        }  
        else if ($marks>=90 && $marks<100) {    
            echo "A+ grade";   
        }  
       else {    
            echo "Invalid input";    
        }    
?>  