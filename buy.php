<?php
 session_start();
 if(!isset($_SESSION['name'])){
  ?>
<script>

  location.replace("http://localhost/Front-end/home.php");
  alert("You Are Not Logged");
</script>
<?php
 }
?>

<?php
      if(($_SESSION['type'])==1){
        ?>
      <script>
      
        location.replace("http://localhost/Front-end/home.php");
        alert("You Login with Farmer Account");
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

    <title>DAPMC Buyers</title>
     <!--aos css-->
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="css/sale.css">
    <link rel="stylesheet" href="css/buy.css">
    <link rel="stylesheet" href="components.css">
    <link rel="stylesheet" href="globals.css">
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
?>
    <!--popup1-->
    <div class="container">
        <div class="popup1" data-aos="fade-Down">

            <div class="main-popup1">
                <div class="popup-content1">


                    <div class="buy_form">

                        <h1>View Product Detail</h1>


                        <form action="buy.php" method="POST" class="row g-3">

                            <div class="col-md-3">
                                <label for="pname1" class="form-label">Product Name</label>
                                <input type="text" name="pname1" class="form-control" id="inputpname1">
                            </div>

                            <div class="col-md-3">
                                <label for="country1" class="form-label">Country</label>
                                <input type="text" name="country1" class="form-control" id="inputcountry1">
                            </div>

                            <div class="col-md-3">
                                <label for="state1" class="form-label">State</label>
                                <input type="text" name="state1" class="form-control" id="inputstate1">
                            </div>
                            <div class="col-md-3">
                                <label for="District" class="form-label">City/Village</label>
                                <input type="text" name="city1" class="form-control" id="inputstate1">
                            </div>

                            <div class="col-12">
                                <button name="buy" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                    <div class="table">
                        <div class="row my-5" data-aos="fade-left">
                            <h1 class="fs-1 mb-3">Recent Deals</h1>
                            <div class="col">
                                <table class="table bg-white rounded shadow-sm  table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="70" height="40">Product Id</th>
                                            <th scope="col">Farmer name</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Qunatiy</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        include 'php/dbconnect1.php';

                                        if(isset($_POST['buy']))
                                        {
                                          

                                          
                                          $p_name1 = mysqli_real_escape_string($conn,$_POST['pname1']);
                                          $country1 = mysqli_real_escape_string($conn,$_POST['country1']);
                                          $state1 = mysqli_real_escape_string($conn,$_POST['state1']);
                                          $city1 = mysqli_real_escape_string($conn,$_POST['city1']);
                                          
 
                                          $query1 = "select * from sale1 where product_name = '$p_name1' and Country = '$country1' and State = '$state1' and City='$city1'";

                                          $fetch = mysqli_query($conn,$query1);

                                          while($res = mysqli_fetch_assoc($fetch))
                                          {
                    
                                            ?>
                      

                                                <tr>
                                                  <td><?php echo $res['product_ID'] ?></td>
                                                  <td> <?php echo $res['First_name']  ?> </td>
                                                  <td> <?php echo $res['product_name']  ?> </td>
                                                  <td> <?php echo $res['Product_quantity']  ?> </td>
                                                  <td> <?php echo $res['Product_Price']  ?> </td>
                                                  <td> <?php echo $res['Date']  ?> </td>
                                                </tr>

                                            <?php
                                          }
                                        } 

                                        

                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                    <div class="fix-Deal">

                        <form action="bill.php" method="POST" class="row g-3">

                            <div class="col-md-12">
                                <label for="pid1" class="form-label">Product Id</label>
                                <input type="text" name="pid1" class="form-control" id="pid1">
                            </div>

                            <div class="col-md-6">
                                <button name="fix" type="submit" class="btn btn-primary">Fix Deal</button>
                            </div>

                            <div class="col-md-6">
                                <button name="back" type="submit" class="btn btn-primary">Back</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
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