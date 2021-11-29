<?php
 session_start();
 
?>
<?php
   include 'php/dbconnect1.php';

   if(isset($_POST['mail']))
  {
          //mailing
          $full_name=$_SESSION['fn']; 

          $queryid = "select * from tabledb1 where name='$full_name'";

          $query1 = mysqli_query($conn,$queryid);

          $idcount= mysqli_num_rows($query1);

          if($idcount)
          {
            $password_search = mysqli_fetch_assoc($query1);
            $_SESSION['email'] = $password_search['email'];
            $to_email=$_SESSION['email'];
            
            $subject = "D-APMC Product Sale";
            $body = "Hi,congratulations You Product Sale Copy the underline link (http://localhost/Front-end/download.php) link and Download the Bill ";
            $headers = "From: shekharingale14@gmail.com";

            if (mail($to_email, $subject, $body, $headers)) 
            {
               echo "Email successfully sent to $to_email...";
               ?>
               <script>

                location.replace("http://localhost/Front-end/download.php");
                alert("Send Mail");
                </script>

                <?php
            } 
            else 
            {
              echo "Email sending failed...";
              ?>
              <script>

               location.replace("http://localhost/Front-end/download.php");
               alert("Error");
               </script>

               <?php
             }
          }

  }


   if(isset($_POST['back_h']))
     {
        ?>
        <script>
            location.replace("http://localhost/Front-end/home.php");
        </script>
        <?php
     }

     if(isset($_POST['payment']))
     {
        ?>
        <script>
            location.replace("http://localhost/Front-end/paymentf.php");
        </script>
        <?php
     }
     if(isset($_POST['cancel']))
     {
      $username="root";
      $password="";
      $server="localhost";
      $db="db2";
      $conn2=mysqli_connect($server,$username,$password,$db);  

      $pid=$_SESSION['pid']; 

      $deleteq="DELETE FROM fix WHERE pid=$pid";
      $iquery = mysqli_query($conn2,$deleteq);

      if($iquery)
      {
          ?>
            <script>
                alert(" Deal Cancel Succesfully");
                location.replace("http://localhost/Front-end/buy.php");
               
            </script>
          <?php
          
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
          
           $sinsert = "insert into sale1(First_name, Last_name, product_name, Product_quantity, Product_Price, Country, State, City, Zip, Date) VALUES ('$fn','$ln','$pn','$pq','$pp','$country_f','$state_f','$village_f',' ',' ')";

           $sinsertq = mysqli_query($conn,$sinsert);
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
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Download</title>
  </head>
  <body>
  <div class="container">
            <div class="heading" style="text-align:center;">
                <a href="bill.html" class='logo' >
                    <img style="text-align:center;" src="images/logo.png" height="60px" width="60px" alt="not found">   
                </a>
                <h1 style="text-align:center;">DAPMC</h1>
            </div>
            <h1 style="text-align:center; margin-top:2rem">Congratulation Your Deal Fix Succesfully</h1>
            
            <form action="download.php" method="POST" style="text-align:center; ">
            <a href="genrate_bill.php" class="btn btn-success btn-lg" style="margin-top:2rem; margin-left:2rem;">Download Bill</a>
            <button type="submit" name="payment" class="btn btn-success btn-lg" style="margin-top:2rem; margin-left:2rem;">Payment</button>
            <button type="submit" name="cancel" class="btn btn-secondary btn-lg" style="margin-top:2rem; margin-left:2rem;">Cancel Deal</button>
            <button type="submit" name="back_h" class="btn btn-secondary btn-lg" style="margin-top:2rem; margin-left:2rem;">Back</button>
            <button type="submit" name="mail" class="btn btn-secondary btn-lg" style="margin-top:2rem; margin-left:1rem;">Send Mail to Farmer</button>
            </form>
  </div>  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>