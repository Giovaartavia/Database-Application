<?php
 session_start();

// initializing variables
$Email = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('mysql.eecs.ku.edu', 'agiovanni', 'zai7kaiP', 'agiovanni');

// REGISTER Appointment
if (isset($_POST['reg_appt'])) {
  // receive all input values from the form
  $HealerID = mysqli_real_escape_string($db, $_POST['Healer_ID']);
  $UserID = mysqli_real_escape_string($db, $_POST['UserID']);
  $ServiceID = mysqli_real_escape_string($db, $_POST['ServiceID']);
  $Date = mysqli_real_escape_string($db, $_POST['Date']);
  $Time = mysqli_real_escape_string($db, $_POST['Time']);
  $LocationID = "1"; //only current location is 1


    //convert time to appropriate format
    $PM = strpos($Time, 'P');
    $Datetime = $Date . ' ';
    $TimeArr = str_split($Time); 
    $hour = '';
    $minute = ':00:00';

    if($PM === false){
        //AM
        if(count($TimeArr) == 7)
        {
            $hour = '0' . $TimeArr[0];
        }
        else//8
        {
            $hour = $TimeArr[0] . $TimeArr[1];
        }
        $DateTimeStamp = $Datetime . $hour . $minute;
    } 
    else 
    {
        //PM (add 12 hours)
        if(count($TimeArr) == 7)
        {
            $hour = (string)((int)$TimeArr[0] + 12);
        }
        else//8
        {
            $hour = (string)((int)($TimeArr[0] . $TimeArr[1]) + 12);
        }
        $DateTimeStamp = $Datetime . $hour . $minute;

    }

  // first check the database to make sure no appointment overlap
  $user_check_query = "SELECT Date FROM Appointment WHERE UserID='$UserID'";
  $healer_check_query = "SELECT Date FROM Appointment WHERE HealerID='$HealerID'";
  $resultUDate = mysqli_query($db, $user_check_query);
  $resultHDate = mysqli_query($db, $healer_check_query);
  
  while($userDate = mysqli_fetch_assoc($resultUDate))
  {
    $uTime = $userDate["Date"];
    if ($DateTimeStamp === $uTime) 
    {
      array_push($errors, "Appointment exists for User during this time.");
    }

  }
  
  while($healerDate = mysqli_fetch_assoc($resultHDate))
  {
    $hTime = $userDate["Date"];
    if ($DateTimeStamp === $hTime) 
    {
      array_push($errors, "Appointment exists for Healer during this time.");
    }
  }


  // If no errors: Schedule
    if (count($errors) == 0) {
        $sql = "INSERT INTO Appointment (HealerID, LocationID, UserID, ServiceID, Date) 
                    VALUES('$HealerID', '$LocationID', '$UserID', '$ServiceID', '$DateTimeStamp')";
                    
        $query = $db->query($sql) or die("Error sending information");
    }
  }

?>