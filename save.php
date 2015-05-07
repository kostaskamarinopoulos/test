<?php
	if (($_POST['submitbutton'])){                                   //if the button has been pressed 
	             if( ($_POST['name'])&&($_POST['tickets'])&&(isset($_POST['start']))&&(isset($_POST['end']))){                  //if not empty
				 
				       $name=$_POST['name'];
					   $tickets=$_POST['tickets'];
					   $start=$_POST['start'];
					   $end=$_POST['end'];
					   $posts = "{$name} {$tickets}{$start}{$end}";
					   
					       if ( ( (int)$tickets == $tickets && (int)$tickets > 0 )){    // if not integer and not positive		
                                  file_put_contents("records.dat", $posts . file_get_contents('records.dat') );
						           include("index.php");
						   }else{
						         echo "<script>alert('Insert a valid number');</script>";
                                 include("index.php"); 
						   }
			     }else{
				           echo "<script>alert('Complete all the fields.');</script>";
				 }
    }
?>