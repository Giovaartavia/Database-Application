<?php

include('index_schedule_post.php');

$conn = mysqli_connect('mysql.eecs.ku.edu', 'agiovanni', 'zai7kaiP', 'agiovanni');
$sql = "SELECT FName, LName, Picture FROM Healer";
$result = mysqli_query($conn, $sql); 

$count = 0;

while ($row = mysqli_fetch_assoc($result)) 
{
    $ID = $row["HealerID"];
    $FName = $row["FName"];
    $LName = $row["LName"];

     $pic = $row["Picture"];

    if($count == 0)
    {
        echo "<div class='row'>";
    }
    echo "<div class='col-md-4 product-men'>";

        echo"<div class='product-shoe-info shoe text-center'>";
            echo"<div class='men-thumb-item'>";
            echo '<img class="img-fluid shrink" src="data:image/jpeg;base64,'.base64_encode( $pic ).'"/>';
            echo"</div>";

            // Service Info
            echo"<div class='item-info-product'>";
                echo"<h4>";

                    echo $FName . " " . $LName;

                echo"</h4>";
            echo"</div>";
        $count += 1;
        echo "</div> </div>";
    if($count == 3)
    {
        echo "</div>";
        $count = 0;
    }


    
}

?>