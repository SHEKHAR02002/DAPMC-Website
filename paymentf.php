<?php
  session_start();
?>

<?php

if(isset($_POST['back']))
{
       ?>
       <script>

            location.replace("http://localhost/Front-end/download.php");

        </script>
        <?php
}

$username="root";
$password="";
$server="localhost";
$db="db2";
$conn2=mysqli_connect($server,$username,$password,$db);

if($conn2)
{
  if(isset($_POST['payment']))
  {
      
      $fname = mysqli_real_escape_string($conn2,$_POST['fullname']);
      $email = mysqli_real_escape_string($conn2,$_POST['email']);
      $address = mysqli_real_escape_string($conn2,$_POST['address']);
      $city = mysqli_real_escape_string($conn2,$_POST['city']);
      $state = mysqli_real_escape_string($conn2,$_POST['state']);
      $zip = mysqli_real_escape_string($conn2,$_POST['zip']);
      $cardname = mysqli_real_escape_string($conn2,$_POST['cardname']);
      $cardnumber = mysqli_real_escape_string($conn2,$_POST['cardnumber']);
      $exmonth = mysqli_real_escape_string($conn2,$_POST['expmonth']);
      $exyear = mysqli_real_escape_string($conn2,$_POST['expyear']);
      $cvv = mysqli_real_escape_string($conn2,$_POST['cvv']);
      $Id=$_SESSION['pid'];  
      
      $insert="INSERT INTO payment_f(product_ID,F_name,email,address1,city,state1,zip, c_name,c_number,e_moth,e_year,cvv) VALUES ('$Id','$fname','$email','$address','$city','$state','$zip','$cardname','$cardnumber','$exmonth','$exyear','$cvv')";

      $iquery = mysqli_query($conn2,$insert);

    if($iquery)
        {
            ?>
              <script>
                  alert("PAYMENT SUCESSFULL");
                  location.replace("http://localhost/Front-end/download.php");
              </script>
            <?php

           
        }
         else
        {
            ?>
              <script>
                  alert("Something Went Wrong Try Again!");
                  location.replace("http://localhost/Front-end/download.php");
              </script>
            <?php
           
        }
  
  }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Checkout Card</title>
    <link href='htt://www.soengsouy.com/favicon.ico' rel='icon' type='image/x-icon'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- library validate -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>
    <!-- style css -->
    <link rel="stylesheet" href="css/check.css">
</head>
<body>

<h2>Responsive Checkout Form</h2>
<div class="row">
    <div class="col-75">
        <div class="container">
            <form id="validate" action="paymentf.php" method="POST">
                <div class="row">
                    <div class="col-50">
                        <h3>Billing Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="fullname" placeholder="Chandrashekhar Ingle" required>
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="shekharingle14@gmail.com" required>
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="Ulhasnagar" required>
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="Mumbai" required>

                        <div class="row">
                            <div class="col-50">
                                <label for="state">State</label>
                                <input type="text" id="state" name="state" placeholder="Maharashtra"required>
                            </div>
                            <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="pin" name="zip" placeholder="421004"required>
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h3>Payment</h3>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>

                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="Chandrashekha Ingle"required>
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"required>
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="September"required>
                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2021"required>
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="123"required>
                            </div>
                        </div>
                    </div>
                </div>
                <label>
                <input type="checkbox" checked="checked" name="sameadr"> Cash On Delivery.
                </label>

               <button type="submit" name="payment">PAY</button>
               <button type="submit" name="back">Back</button>
           </form> 
            
        </div>
    </div>
    
</div>
<!-- script validate js -->
<script>
    $('#validate').validate({
        roles: {
            fullname: {
                required: true,
            },
            email: {
                required: true,
            },
            address: {
                required: true,
            },
            city: {
                required: true,
            },
            state: {
                required: true,
            },
            zip: {
                required: true,
            },
            cardname: {
                required: true,
            },
            cardnumber: {
                required: true,
            },
            expmonth: {
                required: true,
            },
            expyear: {
                required: true,
            },
            cvv: {
                required: true,
            },
           
        },
        messages: {
            fullname:"Please input full name*",
            email:"Please input email*",
            city:"Please input city*",
            address:"Please input address*",
            state:"Please input state*",
            zip:"Please input address*",
            cardname:"Please input card name*",
            cardnumber:"Please input card number*",
            expmonth:"Please input exp month*",
            expyear:"Please input exp year*",
            cvv:"Please input cvv*",
        },
    });
</script>
</body>
</html>