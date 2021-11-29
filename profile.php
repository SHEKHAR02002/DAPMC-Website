<?php
    session_start();
    if(!isset($_SESSION['name']))
    {
      ?>
      <script>

      location.replace("http://localhost/Front-end/home.php");

      alert("You Are Not Logged");

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

  <title>Profile</title>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="components.css">
  <link rel="stylesheet" href="global.css">
  <link rel="stylesheet" href="css/profile.css">
</head>

<body>
  <?php
    if(isset($_POST['back']))
     {
      ?>
      <script>

       location.replace("http://localhost/Front-end/home.php");

       </script>
       <?php
     }

     if(isset($_POST['edit']))
     {  
      ?>
      <script>

       location.replace("http://localhost/Front-end/edit_form.php");

       </script>
       <?php
         
         
       
       
     }
    ?>
  <div class="profile">
    <div class="container"  data-aos="fade-down">

      <div class="col-md-12 mt-3">
        <div class="card mb-3 content">

          <img src="images/profile.png" height="120px" width="120px" alt="not found">


          <h1 class="m-4 pt-3 ">Personal Details</h1>
          <div class="card-body">
            <div class="row">

              <div class="col-md-3 fs-2 ">
                <h4>Type :</h4>
              </div>
              <div class="col-md-3 text-secondary fs-2">
                <?php 
                  if($_SESSION['type']=='1')
                  {
                    echo'Farmer';
                  }
                  else
                  {
                    echo'Trader';
                  }
                ?>
              </div>
              
          

                <div class="col-md-3 fs-2">
                  <h4>Name :</h4>
                </div>
                <div class="col-md-3 text-secondary fs-2">
                  <?php echo$_SESSION['name']?>
                </div>
                

                <div class="col-md-3 fs-2">
                  <h4>Gender :</h4>
                </div>
                <div class="col-md-3 text-secondary fs-2">
                  <?php 
                  if($_SESSION['gender']==0)
                  {
                        echo"Male";
                  } 
                  elseif($_SESSION['gender']==1)
                  {
                        echo"Female";
                  }
                  else
                  {
                    echo"Other";
                  } 
                  ?>
                </div>
                

                <div class="col-md-3 fs-2">
                  <h4>Brith Date :</h4>
                </div>
                <div class="col-md-3 text-secondary fs-2">
                  <?php  echo$_SESSION['date'] ?>
                </div>
                

            </div>
          </div>

          <h1 class="m-4 pt-3">Contact Details</h1>
          <div class="card-body">
            <div class="row">
              <div class="col-md-3 fs-2">
                <h4>Phone No :</h4>
              </div>
              <div class="col-md-3 text-secondary fs-2">
                <?php echo$_SESSION['phone1'] ?>
              </div>
              

              <div class="col-md-3 fs-2">
                <h4>Email Address:</h4>
              </div>
              <div class="col-md-3 text-secondary fs-2">
                <?php echo$_SESSION['email'] ?>
              </div>
              

              <div class="col-md-3 fs-2">
                <h4>Addhar Card :</h4>
              </div>
              <div class="col-md-3 text-secondary fs-2">
                <?php echo$_SESSION['aadhar'] ?>
              </div>

              
            </div>
          </div>


          <h1 class="m-4 pt-3">Address Details</h1>
          <div class="card-body">
            <div class="row">
              <div class="col-md-3 fs-2">
                <h4>Address :</h4>
              </div>
              <div class="col-md-3 text-secondary fs-2">
                <?php echo $_SESSION['address'] ?>
              </div>
            
              <div class="col-md-3 fs-2">
                <h4>Village/city :</h4>
              </div>
              <div class="col-md-3 text-secondary fs-2">
                <?php echo $_SESSION['village'] ?>
              </div>
              
              <div class="col-md-3 fs-2">
                <h4>State :</h4>
              </div>
              <div class="col-md-3 text-secondary fs-2">
                <?php echo $_SESSION['state']  ?>
              </div>
              
              <div class="col-md-3 fs-2">
                <h4>Country :</h4>
              </div>
              <div class="col-md-3 text-secondary fs-2">
                <?php echo $_SESSION['country'] ?>
              </div>
              
              <div class="col-md-3 fs-2">
                <h4>Pin Code :</h4>
              </div>
              <div class="col-md-3 text-secondary fs-2">
                <?php echo  $_SESSION['pin'] ?>
              </div>
              
            </div>
          </div>
        </div>
        <form action="profile.php" method="POST">
        <button type="submit" name="edit" class="btn btn-info fs-2 m-3">Edit</button>
        <button  type="submit" name="back"  class="btn btn-primary fs-2 m-3">Back</button>
        </form>
      </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
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