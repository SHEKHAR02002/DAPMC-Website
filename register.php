<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
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
                    <h5>डिजिटल कृषि उपज मंडी समिति</h5>
                </div>
            </div>
            <a href="register.php" class='logo'>
                    <img src="images/logo.png" height="150px" width="150px" alt="not found">
            </a>
        </div>


        <div class="container3">
            <form action="php/register.php" method="POST"> 
                <div class="in_container">
                    <div class="header">
                        <strong>
                            <h1>Registration Form</h1>
                        </strong>
                    </div>

                    <div class="personal_d">

                        <h2>Personal Details</h2>
                        <label for="label1" class="form-label1">Full Name</label>
                        <input type="text" name="fullname" class="name" id="name" required>

                        <label for="label2" class="form-label2">DOB</label>
                        <input type="date" name="dob" class="date" id="date" required>

                        <label for="label3" class="form-label3">Gender</label>
                        <select type="text" name="gender" class="gender" id="gender">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                        </select>

                        <label for="label4" class="form-label4">Create Password</label>
                        <input type="password" name="password1" class="pass1" id="pass1" required>

                        <label for="label4" class="form-label4">Confirm Password</label>
                        <input type="password" name="password2" class="pass2" id="pass2" required>



                    </div>

                    <div class="contact_d">

                        <h2>Contact Details</h2>
                        <label for="label5" class="form-label5">Enter Phone No.</label>
                        <input type="number" id="phone" name="phone1" >


                        <label for="label6" class="form-label6">Addhar No.</label>
                        <input type="text" name="addhar"class="A_phone" id="A_phone">

                        <label for="label7" class="form-label7">Email Address</label>
                        <input type="text" name="email" class="email" id="email">

                    </div>

                    <div class="address_d">

                        <h2>Address Details</h2>
                        <label for="label8" class="form-label8">Enter Address</label>
                        <input type="text" name="address1" class="address" id="address" required>

                        <label for="label9" class="form-label9">Village</label>
                        <input type="text" name="village" class="village" id="village" required>

                        <label for="label10" class="form-label10">State</label>
                        <input type="text" name="state" class="state" id="state" required>

                        <label for="label11" class="form-label11">Pin Code</label>
                        <input type="text" name="pin" class="pin" id="pin" required>

                        <label for="label12" class="form-label12">Country</label>
                        <input type="text" name="country" class="Country" id="Country" required>

                    </div>

                    <div class="type">
                        <h2>Type Details</h2>
                        <label for="label13" class="form-label13">Select Type</label>
                        <select class="form-select" name="category" id="inputGroupSelect02" required>
                            <option class="o1" selected>Choose...</option>
                            <option value="1">Farmer</option>
                            <option value="2">Treders</option>
                            <option value="3">Merchant</option>
                        </select>
                    </div>


                    <div class="btn">
                        <button type="submit" name="submit" class="btn1">Submit</button>
                        <button type="reset" class="btn2">Clear</button>
                        <button class="btn3"><a href="login.php">Login Now</a></button>
                    </div>
                </div>
            </form>
        </div>



        <div class="container4">
            <div class="footer">
                <hr>
                <h1>D-APMC</h1>
                <h3>© Copyright: <a href="login.html">D-APMC</a>, Digital Agricultural Produce Market, India.</h3>
                <hr>
            </div>
        </div>

    </div>
</body>

</html>