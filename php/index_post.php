<?php

$conn = mysqli_connect('mysql.eecs.ku.edu', 'agiovanni', 'zai7kaiP', 'agiovanni');
$sql = "SELECT ServiceName FROM Service";
$sql_price = "SELECT ServicePrice FROM Service";
$sql_desc = "SELECT ServiceDesc FROM Service";

$result = mysqli_query($conn, $sql); 
$result_price = mysqli_query($conn, $sql_price); 
$result_desc =  mysqli_query($conn, $sql_desc);

$count = 0;
while ($row = mysqli_fetch_assoc($result)) 
{
    $row_price = mysqli_fetch_assoc($result_price);
    $row_desc = mysqli_fetch_assoc($result_desc);

    if($count == 0)
    {
        echo "<div class='row'>";
    }
    echo "<div class='col-md-4 product-men'>";

        echo"<div class='product-shoe-info shoe text-center'>";
            echo"<div class='men-thumb-item'>";
                echo"<img src='images/s1.jpg' class='img-fluid' alt=''>";
            echo"</div>";

            echo"<div class='item-info-product'>";
                echo"<h4>";
                    //popout window and title of service
                    foreach ($row as $field => $value){
                        echo $value;
                    }
                echo"</h4>";

                echo"<div class='product_price'>";
                    echo"<div class='grid-price'>";
                        foreach ($row_price as $field => $value){
                            echo"<span class='money'>" . $value . "</span>";
                        }
                    echo"</div>";
                echo"</div>";
                
                foreach ($row_desc as $field => $value){
                    echo "<p>" . $value . "</p>"; // text </p>
                }
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