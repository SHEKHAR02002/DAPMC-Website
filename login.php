

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    
    <div class="container">

        <div class="container1">
            <strong>D-APMC SELLING & BUYING WEBSITE</strong>
        </div>

        <div class="container2">

            <div class="logo">
                <strong>
                    <h1>D-APMC</h1>
                </strong>
                <div class="ffe">
                    <h4>Digital Agricultural Produce Market Committee</h4>
                </div>
                <div class="ffm">
                    <h5>आधुनिक कृषि उपज मंडी समिति</h5>
                </div>
               
            </div>
            <a href="register.php" class='logo'>
                    <img src="images/logo.png" height="150px" width="150px" alt="not found">
            </a>

            

        </div>



        <div class="container3">
            <div class="header">
                <strong>
                    <h1>Login Form</h1>
                </strong>
            </div>
            <form action="php/login.php" method="POST">
                <div class="d_header">
                    <div class="co1">
                        <div class="row">
                            <label for="label1" class="form-label1">Phone No.</label>
                            <input type="text" name="phone" class="Phone" id="phone_no" required>
                            <div id="labe2" class="form-label2"></div>
                        </div>
                    </div>

                    <div class="co2">
                        <div class="row1">
                            <label for="label3" class="form-label1">Password</label>
                            <input type="password" name="password" class="pass" id="pass" required>
                            <div id="labe4" class="form-label2"></div>
                        </div>
                    </div>

                    <div class="co3">
                        <div class="row2">
                            <button type="submit" name="submit" class="btn1">Submit</button>
                            <button  class="btn2"><a href="forgot.php">Forgot  Password</a></button>
                            <button class="btn3"><a href="register.php">New user? Register Here</a></button>
                        </div>
                    </div>
                </div>
        </div>

        </form>

        <div class="containerb"></div>

        <div class="container4">
            <div class="footer">
                <hr>
                <h1>D-APMC</h1>
                <h3>© Copyright: <a href="login.html">D-APMC</a>, Digital Agricultural Produce Market, India.</h3>
                <hr>
            </div>
        </div>

    </div>

<!-- script validate js -->
<script>
    $('#validate').validate({
        roles: {
            phone: {
                required: true,
            },
            pass: {
                required: true,
           
           
        },
        messages: {
            phone:"Please input Phone*",
            pass:"Please input Password*",
            
        },
    });
</script>
</body>
</html>