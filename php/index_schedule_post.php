<?php
session_start();

// initializing variables
$Email = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('mysql.eecs.ku.edu', 'agiovanni', 'zai7kaiP', 'agiovanni');

// REGISTER USER
if (isset($_POST['reg_appt'])) {
  // receive all input values from the form assume location is 1
  $tempVar = mysqli_real_escape_string($db, $_POST['Date']);
  echo "
  <script>
  
  alert('HELLO PLEASE WORK')
  </script>
  ";
  // header("Location: /../index.php");
//   Time
//   Healer_Name
  

/*
  $HealerID = mysqli_real_escape_string($db, $_POST['Healer_Name']);
  $LocationID = mysqli_real_escape_string($db, $_POST['LocationID']);
  $UserID = mysqli_real_escape_string($db, $_POST['Healer_Name']);
  $ServiceID = mysqli_real_escape_string($db, $_POST['Healer_Name']);
  $DateTime = mysqli_real_escape_string($db, $_POST['Healer_Name']);

  // first check the database to make sure no appointment overlap
  $user_check_query = "SELECT Date FROM Appointment WHERE UserID='$UserID'";
  $healer_check_query = "SELECT Date FROM Appointment WHERE HealerID='$HealerID'";

  $resultUDate = mysqli_query($db, $user_check_query);
  $resultHDate = mysqli_query($db, $healer_check_query);
  
  while($userDate = mysqli_fetch_assoc($resultUDate))
  {
    $uTime = $userDate["Date"];
    if ($DateTime === $uTime) 
    {
      array_push($errors, "Appointment exists for User during this time.");
    }

  }
  
  while($healerDate = mysqli_fetch_assoc($resultHDate))
  {
    $hTime = $userDate["Date"];
    if ($DateTime === $hTime) 
    {
      array_push($errors, "Appointment exists for Healer during this time.");
    }
  }


  // If no errors: Schedule
    if (count($errors) == 0) {
        $sql = "INSERT INTO Appointment ('HealerID', 'LocationID', 'UserID', 'ServiceID', 'Date') 
                    VALUES('$HealerID', '$LocationID', '$UserID', '$ServiceID', '$DateTime')";
                    
        $query = $db->query($sql) or die("Error sending information");
        if($query){
            header("Location: login.php");
        }
    }
    */
  }

?>