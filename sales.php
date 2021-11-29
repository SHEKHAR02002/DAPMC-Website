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
      if(($_SESSION['type'])==2){
        ?>
      <script>
      
        location.replace("http://localhost/Front-end/home.php");
        alert("You Login with Trader Account");
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
    <!--aos css-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="css/sale.css">
    <link rel="stylesheet" href="components.css">
    <link rel="stylesheet" href="global.css">
    <title>DAPMC Sales</title>
</head>

<body>
    <div class="container">
        <div class="popup" data-aos="fade-Down">
            <div class="popup-overlay"></div>
            <div class="main-popup">
                <div class="popup-content">


                    <div class="sale_form">

                        <h1>Enter Product Detail</h1>

                        <form action="php/sale.php" method="POST" class="row g-3">

                            <div class="col-md-12">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" name="fname" class="form-control fs-2" id="inputEmail4">
                            </div>

                            

                            <div class="col-12">
                                <label for="pname" class="form-label">Product Name</label>
                                <input type="text" name="pname" class="form-control fs-2" id="inputAddress"
                                    placeholder="rice,wheat,etc.">
                            </div>

                            <div class="col-12">
                                <label for="quantity" class="form-label">Product quantity</label>
                                <input type="text" name="pquantity" class="form-control fs-2" id="inputAddress2"
                                    placeholder="like 50kg,100kg">
                            </div>

                            <div class="col-md-6">
                                <label for="price" class="form-label ">Product Price</label>
                                <input type="text" name="pprice" class="form-control fs-2" id="inputCity">
                            </div>

                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Country</label>
                                <input type="text" name="country" class="form-control fs-2" id="inputCity">
                            </div>

                            <div class="col-md-6">
                                <label for="inputState" class="form-label">State</label>
                                <select id="inputState" name="state" class="form-select fs-2">
                                    <option selected>Choose...</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="city" class="form-label">City</label>
                                <input type="text" name="city" class="form-control fs-2" id="inputZip">
                            </div>

                            <div class="col-md-6">
                                <label for="zip" class="form-label">Zip</label>
                                <input type="number" name="zip" class="form-control fs-2" id="inputZip">
                            </div>

                            <div class="col-md-6">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" name="date" class="form-control fs-2" id="inputZip">
                            </div>

                            <div class="col-md-6">
                                <button name="sale" type="submit" class="btn btn-primary fs-2">Submit</button>
                            </div>

                            <div class="col-md-6">
                                <button name="back" type="submit" class="btn btn-primary fs-2">Back</button>
                            </div>

                        </form>
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
