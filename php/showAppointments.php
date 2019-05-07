<?php
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
    die("You need to be logged in to view this page");
}

// connect to the database
$db = mysqli_connect('mysql.eecs.ku.edu', 'agiovanni', 'zai7kaiP', 'agiovanni');

//Print appointments from logged in user
$sql = "SELECT ServiceName, Healer.FName, Location.Address, Appointment.Date, Appointment.AppointmentID
FROM Appointment, User, Healer, Location, Service
WHERE Email = '$_SESSION[Email]'
AND User.UserID = Appointment.UserID
AND Appointment.HealerID = Healer.HealerID
AND Appointment.LocationID = Location.LocationID
AND Appointment.ServiceID = Service.ServiceID;";

$results = mysqli_query($db, $sql) or die("Unable to show");
$count = 1;


//Print table
echo "<table class='table table-striped'>";
  echo "<thead>";
    echo "<tr>";
      echo "<th scope='col'>#</th>";
      echo "<th scope='col'>Service</th>";
      echo "<th scope='col'>Healer</th>";
      echo "<th scope='col'>Location</th>";
      echo "<th scope='col'>Date</th>";
      echo "<th scope='col'></th>";
    echo "</tr>";
  echo "</thead>";
  echo "<tbody>";
  while ($row = mysqli_fetch_assoc($results)) 
  {
    echo "<tr>";
    echo "<th scope='row'>$count</th>";
    echo "<td>" . $row["ServiceName"] . "</td>";
    echo "<td>" . $row["FName"] . "</td>";
    echo "<td>" . $row["Address"] . "</td>";
    echo "<td>" . $row["Date"] . "</td>";
    echo "<td>";
        echo "<form action = 'POST'>";
            // echo "<input type='button' name='" . $row["AppointmentID"] . "' id='" . $row["AppointmentID"] . "'value='DELETE'>";
            echo "<button type='submit' class='btn' name='test'>Register</button>";
        echo "</form>";
    echo "</td>";
    echo "</tr>";
    $count = $count + 1;
  }
  echo "</tbody>";
echo "</table>";
?>