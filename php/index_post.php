<?php

$conn = mysqli_connect('mysql.eecs.ku.edu', 'agiovanni', 'zai7kaiP', 'agiovanni');
$sql = "SELECT ServiceName FROM Service";
$sql_price = "SELECT ServicePrice FROM Service";
$sql_desc = "SELECT ServiceDesc FROM Service";

$result = mysqli_query($conn, $sql); 
$result_price = mysqli_query($conn, $sql_price); 
$result_desc =  mysqli_query($conn, $sql_desc);

$count = 0;

echo "<scipt src='js/login.js'></script>";

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
                        // Button trigger modal
                        echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>";
                        echo $value;
                        echo "</button>";
                        $val = $value;
                        // Modal
                        echo "<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                        echo "<div class='modal-dialog' role='document'>";
                            echo "<div class='modal-content'>";
                            echo "<div class='modal-header'>";
                                echo "<h5 class='modal-title' id='exampleModalLabel'>".$val."</h5>";
                                echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                                echo "<span aria-hidden='true'>&times;</span>";
                                echo "</button>";
                            echo "</div>";
                            echo "<div class='modal-body'>";
                            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                                //User Logged In:
                                echo "Welcome to the member's area, " . $_SESSION['Email'] . "!";
                                echo "</div>";
                                echo "<div class='modal-footer'>";
                                    echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>";
                                    echo "<button type='button' class='btn btn-primary'>Reserve</button>";
                                } else {
                                    //User not Logged In:
                                    echo "Please log in to make a reservation";
                                    echo "</div>";
                                    echo "<div class='modal-footer'>";
                                        echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>";
                                        echo"<a href='login.php'><button class='btn btn-primary'>Log In</button></a>";;
                                }
                            echo "</div>";
                            echo "</div>";
                        echo "</div>";
                        echo "</div>";
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