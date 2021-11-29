
<?php
   
   include 'dbconnect1.php';
   if(isset($_POST['submit']))
   {
  
     $name = mysqli_real_escape_string($conn,$_POST['fullname']);
     $dob = mysqli_real_escape_string($conn,$_POST['dob']);
     $gender = mysqli_real_escape_string($conn,$_POST['gender']);
     $pass1 = mysqli_real_escape_string($conn,$_POST['password1']);
     $pass2 = mysqli_real_escape_string($conn,$_POST['password2']);

     $phone1 = mysqli_real_escape_string($conn,$_POST['phone1']);
     $aadhar = mysqli_real_escape_string($conn,$_POST['addhar']);
     $email = mysqli_real_escape_string($conn,$_POST['email']);
 
     $address1 = mysqli_real_escape_string($conn,$_POST['address1']);
     $village = mysqli_real_escape_string($conn,$_POST['village']);
     $state = mysqli_real_escape_string($conn,$_POST['state']);
     $pin = mysqli_real_escape_string($conn,$_POST['pin']);
     $country = mysqli_real_escape_string($conn,$_POST['country']);
     $categrory = mysqli_real_escape_string($conn,$_POST['category']);

    

     $queryphone = "select * from tabledb1 where phone1='$phone1'";
     $query = mysqli_query($conn,$queryphone);

     
     
     $phonecount= mysqli_num_rows($query);

     if($phonecount > 0)
     {
        ?>
              <script>
                  alert("Person already exists");
              </script>
            <?php
     }
     else
     {
       if($pass1==$pass2)
       {
        echo $pass2;
         $insert = "insert into tabledb1(name ,dob,gender,pass1,pass2,phone1,addhar,email,address,village,state,pin,country, type) values ('$name','$dob','$gender','$pass1','$pass2','$phone1','$aadhar','$email','$address1','$village','$state','$pin','$country','$categrory')";

         $iquery = mysqli_query($conn,$insert);
    
         if($iquery)
          {
            
            ?>
              <script>
                  alert("Register Succesfully");
                  location.replace("http://localhost/Front-end/login.php");
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
           
          }
        }
        else
        {
          ?>
              <script>
                  alert("Password Not Match");
              </script>
            <?php
        }
      }
   }
   
?>

   