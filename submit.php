<?php

if($_POST){

  date_default_timezone_set("America/New_York");

  $address = $_POST['address']; //HoneyPot
  $dayOfWeek = date('w');
  $date = date("m/d/y");
  $time = date("h:i:sa");
  $name = $_POST['name'];
  $question1 = $_POST['question1'];
  $question2 = $_POST['question2'];
  $question3 = $_POST['question3'];

  switch($dayOfWeek) {
    case 0:
      $dayOfWeek = "Sunday";
    break;
    case 1:
      $dayOfWeek = "Monday";
    break;
    case 2:
      $dayOfWeek = "Tuesday";
    break;
    case 3:
      $dayOfWeek = "Wednesday";
    break;
    case 4:
      $dayOfWeek = "Thursday";
    break;
    case 5:
      $dayOfWeek = "Friday";
    break;
    case 6:
      $dayOfWeek = "Saturday";
    break;
  }

  if(!empty($address)){

    return; //you may add code here to echo an error etc.
    
	} else{

		//Save Data
    $data = array(
    "\n",
    $dayOfWeek,
    $date,
    $time,
    $name,
    "What is 2 + 2: ${question1}",
    "Is the earth round: ${question2}",
    "What is 4 - 2: ${question3}"
    );

    //Save Backup Data
    file_put_contents('myfile.txt', implode(PHP_EOL, $data), FILE_APPEND);
    
    //Redirect to Success page
    header("Location: success.php");
    
	}

}

?>