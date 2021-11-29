<?php
 session_start();
 
?>


<?php

  include 'php/dbconnect1.php';
  
  
  


  if(isset($_POST['fix']))
  {
    $ID = mysqli_real_escape_string($conn,$_POST['pid1']);

    $queryid = "select * from sale1 where product_ID='$ID'";

    $query1 = mysqli_query($conn,$queryid);

    $idcount= mysqli_num_rows($query1);

         if($idcount)
         {
            $password_search = mysqli_fetch_assoc($query1);
            $_SESSION['pid'] = $password_search['product_ID'];
            $_SESSION['pn'] = $password_search['product_name'];
            $_SESSION['pq'] = $password_search['Product_quantity'];
            $_SESSION['pp'] = $password_search['Product_Price'];
            $_SESSION['fn'] = $password_search['First_name'];
            $_SESSION['ln'] = $password_search['Last_name'];
            $_SESSION['village_f'] = $password_search['City'];
            $_SESSION['state_f'] = $password_search['State'];
            $_SESSION['country_f'] = $password_search['Country'];
            
            
            $pp = $password_search['Product_Price'];
            $gst = $pp*0.12;
            $gstpp= $pp-$gst;

            $pid=$_SESSION['pid'];  
            $pn=$_SESSION['pn'];  
            $pq=$_SESSION['pq'];  
            $pp=$_SESSION['pp'];  
            $fn=$_SESSION['fn'];  
            $ln=$_SESSION['ln'];
            $village_f=$_SESSION['village_f']; 
            $state_f=$_SESSION['state_f']; 
            $country_f=$_SESSION['country_f']; 
            $name=$_SESSION['name'];
            $village=$_SESSION['village'];
            $state=$_SESSION['state'];
            $country=$_SESSION['country'];
         }
         else
         {
            ?>
            <script>       
               alert("This Product ID Not Exist");
               location.replace("http://localhost/Front-end/buy.php");
             </script>
            <?php
         }
  }

  if(isset($_POST['confirm']))
  {

    $username="root";
    $password="";
    $server="localhost";
    $db="db2";
    $conn2=mysqli_connect($server,$username,$password,$db);  
    $pid=$_SESSION['pid'];  
    $pn=$_SESSION['pn'];  
    $pq=$_SESSION['pq'];  
    $pp=$_SESSION['pp'];  
    $fn=$_SESSION['fn'];  
    $ln=$_SESSION['ln'];
    $village_f=$_SESSION['village_f']; 
    $state_f=$_SESSION['state_f']; 
    $country_f=$_SESSION['country_f']; 
    $name=$_SESSION['name'];
    $village=$_SESSION['village'];
    $state=$_SESSION['state'];
    $country=$_SESSION['country'];
    $p_price=$_SESSION['pp'];
    $gst = $pp*0.12;
    $gstpp= $pp-$gst;

    $insert="insert into fix(pid,pname,pquantity,pprice,f_name,f_village,f_state, f_country, t_name,t_village,t_state,t_country,p_price,p_gst,final_p) values ('$pid','$pn','$pq','$pp','$fn','$village_f','$state_f','$country_f','$name','$village','$state','$country','$p_price','$gst','$gstpp')";

  
    $iquery = mysqli_query($conn2,$insert);

    if($iquery)
        {

            ?>
              <script>
                  alert("congratulations Deal Fix");
                  location.replace("http://localhost/Front-end/download.php");
              </script>
            <?php
            $deletet="delete from sale1 where product_ID='$pid'";
            $iquery = mysqli_query($conn,$deletet);
        }
         else
        {
            ?>
              <script>
                  alert("Something Went Wrong Try Again!");
              </script>
            <?php
           
        }
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


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Deal</title>
    <link rel="stylesheet" href="components.css">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="css/deal.css">
</head>

<body>

    <div class="dealc">
        <div class="container">
            <div class="heading">
                <a href="bill.html" class='logo'>
                    <img src="images/logo.png" height="60px" width="60px" alt="not found">   
                </a>
                <h1>DAPMC</h1>
            </div>
            <hr>
            <div class="pd">
                <h1>Product Details<span class="badge bg-secondary"></span></h1>
                <h3>Product ID:<?php echo $_SESSION['pid']?></h3>
                <h3>Product Name:<?php echo $_SESSION['pn']?></h3>
                <h3>Product Quantity:<?php echo $_SESSION['pq']?></h3>
                <h3>Product Price:<?php echo $_SESSION['pp']?></h3>
            </div>
            <hr>
            <div class="customer">
                <div class="left_farmer">
                    <h1>Farmer<span class="badge bg-secondary"></span></h1>
                    <h3>Farmer Name:<?php echo $_SESSION['fn']; echo $_SESSION['ln']?></h3>
                    <h3>Village:<?php echo $_SESSION['village_f']?></h3>
                    <h3>State:<?php echo $_SESSION['state_f']?></h3>
                    <h3>Country:<?php echo $_SESSION['country_f']?></h3>
                </div>
                <div class="right_Trader">
                    <h1>Treader<span class="badge bg-secondary"></span></h1>
                    <h3>Treader Name:<?php echo $_SESSION['name'] ?></h3>
                    <h3>Village:<?php echo $_SESSION['village']?></h3>
                    <h3>State:<?php echo $_SESSION['state'] ?></h3>
                    <h3>Country:<?php echo $_SESSION['country'] ?></h3>
                </div>
            </div>
            <hr>
            <div class="bill">
                <h1>Bill<span class="badge bg-secondary"></span></h1>
                <h3>Product Price:<?php echo $_SESSION['pp']?></h3>
                <h3>12% GST:<?php echo $gst ?></h3>
                <h3>Total:<?php echo $gstpp ?></h3>
            </div>
        <form action="bill.php" method="post">
            <button type="submit" name="confirm" class="btn btn-success fs-2">Confirm</button>
            <button type="submit" name="back" class="btn btn-secondary fs-2">Back</button>
            
        </form>
        </div>
    </div>













    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>