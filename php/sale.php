<?php
     include 'dbconnect1.php';
     
     if(isset($_POST['sale']))
     {
        $f_name = mysqli_real_escape_string($conn,$_POST['fname']);
        $l_name = mysqli_real_escape_string($conn,$_POST['lname']);
        $p_name = mysqli_real_escape_string($conn,$_POST['pname']);
        $p_qunantity = mysqli_real_escape_string($conn,$_POST['pquantity']);
        $p_price = mysqli_real_escape_string($conn,$_POST['pprice']);
        $country = mysqli_real_escape_string($conn,$_POST['country']);
        $state = mysqli_real_escape_string($conn,$_POST['state']);
        $city = mysqli_real_escape_string($conn,$_POST['city']);
        $zip = mysqli_real_escape_string($conn,$_POST['zip']);
        $date = mysqli_real_escape_string($conn,$_POST['date']);
        
        $sinsert = "insert into sale1(First_name, Last_name, product_name, Product_quantity, Product_Price, Country, State, City, Zip, Date) VALUES ('$f_name','$l_name','$p_name','$p_qunantity','$p_price','$country','$state','$city','$zip','$date')";

        $sinsertq = mysqli_query($conn,$sinsert);
    
        if($sinsertq)
        {
            ?>
              <script>
                  alert("Detail Insert Succesfully");
                  location.replace("http://localhost/Front-end/home.php");
              </script>
            <?php
           
        }
         else
        {
            ?>
              <script>
                  alert("Something Went Wrong Try Again!");
              </script>
             
            <?php
             die("Error". mysqli_connect_error());
           
        }
     }
     else{
         echo"notest";
     }

     if(isset($_POST['back']))
     {
        ?>
        <script>
            location.replace("http://localhost/Front-end/home.php");
        </script>
        <?php
     }
?>