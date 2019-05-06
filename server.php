<?php
session_start();

// initializing variables
$Email = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('mysql.eecs.ku.edu', 'agiovanni', 'zai7kaiP', 'agiovanni');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $FName = mysqli_real_escape_string($db, $_POST['FName']);
  $LName = mysqli_real_escape_string($db, $_POST['LName']);
  $DoB = mysqli_real_escape_string($db, $_POST['DoB']);
  $Email = mysqli_real_escape_string($db, $_POST['Email']);
  $PhoneNumber = mysqli_real_escape_string($db, $_POST['PhoneNumber']);
  $Address = mysqli_real_escape_string($db, $_POST['Address']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($FName)) { array_push($errors, "Name is required"); }
  if (empty($LName)) { array_push($errors, "Last Name is required"); }
  if (empty($DoB)) { array_push($errors, "Date of Birth is required"); }
  if (empty($Email)) { array_push($errors, "Email is required"); }
  if (empty($PhoneNumber)) { array_push($errors, "Phone Number is required"); }
  if (empty($Address)) { array_push($errors, "Address is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same email
  $user_check_query = "SELECT * FROM User WHERE Email='$Email'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$sql = "INSERT INTO User (FName, LName, Password, DoB, Email, PhoneNumber, Address) 
  			  VALUES('$FName', '$LName', '$password', '$DoB', '$Email', '$PhoneNumber', '$Address')";
    $query = $db->query($sql) or die("Error sending information");
    if($query){
        header("Location: login.php");
    }
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($Email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM User WHERE Email='$Email' AND Password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['loggedin'] = true;
            $_SESSION['Email'] = $Email;
            header('location: index.php');
        }else {
            array_push($errors, "Wrong Email/password combination");
        }
    }
}
  
?>