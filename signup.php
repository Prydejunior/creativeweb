<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login Page</title>
</head>

<body>
    <header>

        <nav class="topheader">
            <span class="left">Info.oursite.com</span>
            <span class="right">Contact us:612090876</span>
            <div class="clear"></div>
        </nav>
        <nav class="navmenu">
            <div class="logo">
                Lewis.Devs
            </div>
            <ul>
                <li> <a href="index.html">Home</a> </li>
                <li> <a href="login.html">Login</a></li>
                <li> <a href="Shop.html">Shop</li>
                <li> <a href="about.html#about">About Us</a> </li>
                <li> <a href="contact.html">Contact</a> </li>
                <li> <a href="signup.html">signup</a></li>
            </ul>
            <div class="clear"></div>
        </nav>
    </header>

    <br>
    <section class="container align-items-center">
        <div class="card">
            <div class="card-header">
                Sign Up Now
            </div>
            <div class="card-body">
                <div class="alert alert-danger" id="message" role="alert"></div>
                <form>
                    <div class="row g-3">

                        <!-- First name   -->
                        <div class="col-md-6">
                            <label for="Name" class="form-label"> First Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" size="20" maxlength="20"
                                placeholder="Enter Your First Name" name="Name" required>
                        </div>

                        <!-- Last Name  -->
                        <div class="col-md-6">
                            <label for="lastame" class="form-label"> Last Name <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" size="20" maxlength="20"
                                placeholder="Enter Your Last Name" name="lastname" required>
                        </div>

                        <!-- Email Address  -->
                        <div class="col-md-6">
                            <label class="form-label" for="email">Email Address <span
                                    class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" required>
                        </div>

                        <!-- Home Address  -->
                        <div class="col-md-6">
                            <label class="form-label" for="address">Home Address <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="address" required>
                        </div>

                        <!-- Place of Birth  -->
                        <div class="col-md-5">
                            <label for="POB" class="form-label">Place Of Birth</label>
                            <select name="POB" id="POB" class="form-select">
                                <option selected>Choose...</option>
                                <option value="limbe">Limbe</option>
                                <option value="buea">Buea</option>
                                <option value="douala">Douala</option>
                            </select>
                        </div>

                        <!-- Date Of Birth  -->
                        <div class="col-md-4">
                            <label for="DOB" class="form-label">Date Of Birth</label>
                            <input type="date" name="DOB" class="form-control">
                        </div>

                        <!-- Gender  -->
                        <div class="col-md-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select name="gender" id="gender" class="form-select">
                                <option selected>Choose...</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <!-- Phone Number  -->
                        <div class="col-md-6">
                            <label for="number" class="form-label"> Phone Number <span
                                    class="text-danger">*</span></label>
                            <input type="tel" placeholder="XXX-XXX-XXX" name="number"
                                pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" class="form-control">
                        </div>
                        
                    
                    <!-- Marital Status -->
                    <div class="col-md-6">
                        <label for="status" class="form-label">marital status <span class="text-danger">*</span></label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="married" value="married">
                            <label class="form-check-label" for="married">married</label>

                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="single" value="single">
                            <label class="form-check-label" for="single">single</label>

                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="divorced" value="divorced">
                            <label class="form-check-label" for="divorced">divorced</label>

                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="widowed" value="widowed">
                            <label class="form-check-label" for="widowed">widowed</label>
                        </div>
                    </div>
                    <!-- Password -->
                    <div class="col-md-6">
                        <label class="form-label" for="password"> </label> password <span class="text-danger">*</span>
                        </label>
                        <input type="password" class="form-control" name="password" id="password" required>

                    </div>
                    <!-- Confirm Password  -->
                    <div class="col-md-6">
                        <label class="form-label" for="cpassword">confirmed password <span
                                class="text-danger">*</span></label>
                        <input type="password" class="form-control" name="cpassword" id="cpassword" onchange="check()"
                            required>
                        
                    </div>
                    <span id="message"></span><br>
                    </div>
                    
                    <div class="d-grid gap-2 col-6 max-auto">
                        <button class="btn btn-primary" type="button" id="submit">submit</button>
    
                    </div>



                </form>
           
    </section>

</body>

<script>
    document.getElementById('messqage').style.display="none";
    function check() {
        // this is where i fetch the values of password and confirm password 
        if (document.getElementById('password').value == document.getElementById('cpassword').value) {
            // If The paswords Match Do... 
            document.getElementById('message').style.display="none";
            document.getElementById('submit').disabled = false;
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'Password Matches';

        }
        else {
            // if they do not match do this 
            document.getElementById('message').style.display='block';
            document.getElementById('submit').disabled = true;
            
            document.getElementById('message').innerHTML = 'Passwords Do Not Match';

        }
    }
</script>

</html>