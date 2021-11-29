<?php
   include 'php/dbconnect1.php';
   session_start();

   if(isset($_POST['show_Password']))
   {
      $mn = mysqli_real_escape_string($conn,$_POST['mn']);

      $queryid = "select * from tabledb1 where phone1='$mn'";

      $query1 = mysqli_query($conn,$queryid);

      $idcount= mysqli_num_rows($query1);

         if($idcount)
         {
            $password_search = mysqli_fetch_assoc($query1);
            $_SESSION['pass'] = $password_search['pass1'];
            ?>
            <script>
                alert("Your Password Is:<?php echo $_SESSION['pass']?>");
                location.replace("http://localhost/Front-end/login.php");
            </script>
            <?php
         }
         else
         {
            ?>
            <script>
                alert("This Mobile No. Not Register");
            </script>
          <?php
         }
   }
   if(isset($_POST['back']))
   {
    ?>
    <script>
       
        location.replace("http://localhost/Front-end/login.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Forgot Password</title>
     <!--aos css-->
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="components.css">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="css/profile.css">
  </head>
  <body>
  <div class="profile">
    <div class="container" data-aos="fade-down">
    <div class="col-md-12 mt-3">
        <div class="card mb-3 content">
          <h1 class="m-4 pt-3 ">Forgot Password</h1>
    <div>
    <form action="forgot.php" method="POST" class="row g-3 fs-2">
                
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label m-4 pt-3">Enter Mobile No.</label>
                <input type="text" name="mn" class="form-control fs-2" id="inputEmail4">
                
            </div>

                <div class="col-6 md-2">
                  <button type="submit" name="show_Password" class="btn btn-primary fs-2">Update</button>
                </div>

                <div class="col-6 md-2">
                  <button type="submit" name="back" class="btn btn-primary fs-2">Back</button>
                </div>
            </div>

   </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <!--aos script-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
                <script>
                    AOS.init({
                        offset: 200,
                        delay: 100,
                        duration: 400,
                        easing: 'ease',
                        once: false,
                        mirror: false,
                        achorPlacement: 'top-bottom'
                    });
                </script>
  </body>
</html>