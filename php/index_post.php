<?php

include('index_schedule_post.php');

$conn = mysqli_connect('mysql.eecs.ku.edu', 'agiovanni', 'zai7kaiP', 'agiovanni');
$sql = "SELECT ServiceID, ServiceName, ServicePrice, ServiceDesc, Picture FROM Service";
$result = mysqli_query($conn, $sql); 

$count = 0;

echo "<scipt src='js/login.js'></script>";

while ($row = mysqli_fetch_assoc($result)) 
{
    $ID = $row["ServiceID"];
    $service = $row["ServiceName"];
    $price = $row["ServicePrice"];
    $desc = $row["ServiceDesc"];
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
                    //popout window and title of service

                    // Button trigger modal
                    echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal".$ID."'>";
                    echo $service;
                    echo "</button>";



                    // Modal
                    echo "<div class='modal fade' id='exampleModal".$ID."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                    echo "<div class='modal-dialog' role='document'>";
                        echo "<div class='modal-content'>";
                        echo "<div class='modal-header'>";
                            echo "<h5 class='modal-title' id='exampleModalLabel'>". $service."</h5>";
                            echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                            echo "<span aria-hidden='true'>&times;</span>";
                            echo "</button>";
                        echo "</div>";
                        echo "<div class='modal-body'>";
                        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                            
                            $user = "SELECT FName, UserID FROM User WHERE User.Email = '". $_SESSION['Email']  ."'";
                            $user_result = mysqli_query($conn, $user); 
                            $row_user = mysqli_fetch_assoc($user_result);
                            $FName = $row_user["FName"];
                            $UserID = $row_user["UserID"];

                            $healer = "SELECT FName, Healer.HealerID 
                            FROM Healer, HealerSpecialize 
                            WHERE Healer.HealerID = HealerSpecialize.HealerID
                            AND HealerSpecialize.ServiceID = $ID";

                            $healer_result = mysqli_query($conn, $healer); 


                            //User Logged In:
                            echo "Welcome " . $FName . "!
                            </div>

                            Set Up Your Appointment
                            
                            <form method='post' action='index.php'>";
                            include('errors.php');
                            echo"
                                <div class='input-group'>
                                <label>Healer</label>
                                <select class='input-group' name='Healer_ID'>
                                ";
                                while($val = mysqli_fetch_assoc($healer_result))
                                {
                                    $hName = $val["FName"];
                                    $hID = $val["HealerID"];
                                    echo "<option value='$hID'>" . $hName . "</option>";
                                }
                            echo"

                                </select>

                                <div class='input-group'>
                                <label>Date</label>
                                <input type='date' name='Date' value='$Date'>
                                </div>

                                <div class='input-group'>
                                <label>Time</label>
                                <select class='input-group' name='Time' id='$Time' value='$Time'>
                                  <option>6:00 PM</option>
                                  <option>7:00 PM</option>
                                  <option>8:00 PM</option>
                                  <option>9:00 PM</option>
                                  <option>10:00 PM</option>
                                  <option>11:00 PM</option>
                                </select>
                                </div>

                                
                                <div class='input-group'>
                                <input type='hidden' name='UserID' value='$UserID'>
                                </div>

                                <div class='input-group'>
                                <input type='hidden' name='ServiceID' value='$ID'>
                                </div>

                                <div class='input-group'>
                                <button type='submit' class='btn' name='reg_appt'>Reserve</button>
                                </div>
                            </form>
                            ";
                            echo "<div class='modal-footer'>";
                                echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>";
                                echo "<button type='button' class='btn btn-primary'>Reserve</button>";
                        } 
                        else {
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

                echo"</h4>";

                // Service Price
                echo"<div class='product_price'>";
                    echo"<div class='grid-price'>";
                        echo"<span class='money'>" . $price . "</span>";
                    echo"</div>";
                echo"</div>";
                
                // Service Description 
                echo "<p>" . $desc . "</p>"; // text </p>

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