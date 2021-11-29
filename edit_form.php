<?php
    include 'php/dbconnect1.php';
    session_start();
    $phone=$_SESSION['phone1'];

    if(isset($_POST['update']))
   {
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $type = mysqli_real_escape_string($conn,$_POST['type']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $bd = mysqli_real_escape_string($conn,$_POST['bdate']);
    $email = mysqli_real_escape_string($conn,$_POST['Email']);
    $aadhar = mysqli_real_escape_string($conn,$_POST['aadhar']);
    $add = mysqli_real_escape_string($conn,$_POST['address']);
    $city = mysqli_real_escape_string($conn,$_POST['City']);
    $country = mysqli_real_escape_string($conn,$_POST['Country']);
    $state = mysqli_real_escape_string($conn,$_POST['State']);
    $zip = mysqli_real_escape_string($conn,$_POST['Zip']);


    $queryphone = "select * from tabledb1 where phone1='$phone'";
    $query = mysqli_query($conn,$queryphone);
    
    $phonecount= mysqli_num_rows($query);

    if($phonecount > 0)
    {
        $update="update tabledb1 set name='$name',dob='$bd',gender='$gender',addhar='$aadhar',email='$email',address='$add ',village='$city',state='$state',pin='$zip',country='$country',type='$type' WHERE phone1 = '$phone'";

        $query1 = mysqli_query($conn,$update);

        if($query1)
        {
          
          ?>
            <script>
                alert("Update Succesfully");
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
         
        }
    }
    else
    {
      ?>
        <script>
            alert("This No. Not Exists");
        </script>
      <?php
     
    }
 }
 if(isset($_POST['back']))
 {
    ?>
    <script>
        location.replace("http://localhost/Front-end/profile.php");
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

    <title>Edit Form</title>
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

          <img src="images/profile.png" height="120px" width="120px" alt="not found">


          <h1 class="m-4 pt-3 ">Edit Profile</h1>
    <div>
    
        <form action="edit_form.php" method="POST" class="row g-3 fs-2">
                <div class="col-md-3 fs-1">
                    <h4 class="fs-2 m-4 pt-3">Phone No : <?php echo $phone ?></h4>
                </div>
                
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label m-4 pt-3">Name</label>
                <input type="text" name="name" class="form-control fs-2" id="inputEmail4">
            </div>
            <div class="col-md-3">
              <label for="inputPassword4" class="form-label fs-2">Type</label>
              <select id="type" name="type" class="form-select fs-2">
                <option selected>Choose...</option>
                <option>Farmer</option>
                <option>Trader/Merchant</option>
              </select>
            </div>
            <div class="col-md-3">
              <label for="inputPassword4" class="form-label">Gender</label>
              <select id="type" name="gender" class="form-select fs-2">
                <option selected>Choose...</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">Brith Date</label>
              <input type="Date" name="bdate" class="form-control fs-2" id="inputCity">
            </div>

            
            <div class="col-6">
              <label for="inputAddress" class="form-label fs-2">Email</label>
              <input type="text" name="Email" class="form-control fs-2"  id="inputAddress" >
            </div>
            <div class="col-6">
              <label for="inputAddress" class="form-label">Aadhar Card No.</label>
              <input type="text" name="aadhar"  class="form-control fs-2" id="inputAddress" >
            </div>

            <div class="col-12">
              <label for="inputAddress" class="form-label fs-2">Address</label>
              <input type="text" name="address" class="form-control fs-2" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-md-3">
              <label for="inputCity" class="form-label fs-2">City</label>
              <input type="text" name="City" class="form-control fs-2" id="inputCity">
            </div>
            <div class="col-md-3">
              <label for="inputCity" class="form-label">Country</label>
              <input type="text" name="Country" class="form-control fs-2" id="inputCity">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">State</label>
              <input type="text" name="State" class="form-control fs-2" id="inputCity">
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text"  name="Zip" class="form-control fs-2" id="inputZip">
            </div>
           
            <div class="col-6 md-2">
              <button type="submit" name="update" class="btn btn-primary fs-2">Update</button>
            </div>
            <div class="col-6 md-2">
              <button type="submit" name="back" class="btn btn-primary fs-2">Back</button>
            </div>
        </form>
    </div>
  </div>

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