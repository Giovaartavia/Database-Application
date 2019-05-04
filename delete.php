<?php

//delete.php

if(isset($_POST["id"]))
{
 
 $connect = new PDO('mysql:host=mysql.eecs.ku.edu;dbname=agiovanni', 'agiovanni', 'zai7kaiP');
 $query = "
 DELETE from events WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id' => $_POST['id']
  )
 );
}

?>
