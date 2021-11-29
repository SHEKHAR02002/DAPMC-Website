<?php
 session_start();
 
?>

<?php
      include 'dbconnect1.php';
      if(isset($_POST['submit']))
      {
         $phone1 = mysqli_real_escape_string($conn,$_POST['phone']);
         $password = mysqli_real_escape_string($conn,$_POST['password']);

         $queryphone = "select * from tabledb1 where phone1='$phone1'";
         $query = mysqli_query($conn,$queryphone);
         
         $phonecount= mysqli_num_rows($query);

         if($phonecount)
         {
            $password_search = mysqli_fetch_assoc($query);
            $db_pass = $password_search['pass1'] ;

            
            
            $_SESSION['type'] = $password_search['type'];
            $_SESSION['name'] = $password_search['name'];
            $_SESSION['gender'] = $password_search['gender'];
            $_SESSION['date'] = $password_search['dob'];
            $_SESSION['phone1'] = $password_search['phone1'];
            $_SESSION['email'] = $password_search['email'];
            $_SESSION['aadhar'] = $password_search['addhar'];
            $_SESSION['address'] = $password_search['address'];
            $_SESSION['village'] = $password_search['village'];
            $_SESSION['state'] = $password_search['state'];
            $_SESSION['country'] = $password_search['country'];
            $_SESSION['pin'] = $password_search['pin'];



            if($db_pass == $password)
           {
              ?>
              <script>
                 
                 location.replace("http://localhost/Front-end/home.php");
                 alert("Login Succesfully");
               </script>
              <?php
           }
           else
           {
            ?>
             <script>
               alert("Wrong Password");
             </script>
            <?php 
           }
         }
         else
         {
            ?>
              <script>
                 alert("Wrong Phone No");
               </script>
              <?php
         }
        }
        if(isset($_POST['fp']))
        {
         ?>
         <script>
   
          location.replace("http://localhost/Front-end/php/forgot.php");
   
          </script>
          <?php
        }
    ?>
   