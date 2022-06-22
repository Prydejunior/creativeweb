<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
                PRYDE.Devs
            </div>
            <ul>
                <li> <a href="index.html">Home</a> </li>
                <li> <a href="login.html">Login</a></li>
                <li> <a href="shop.html">Shop</li>
                <li> <a href="about.html#about">About Us</a> </li>
                <li> <a href="Contact.html">Contact</a> </li>
                <li> <a href="signup.html">signup</a></li>
            </ul>
            <div class="clear"></div>
        </nav>
    </header>
    <br>
   
        <section class="container align-items-center">
            <div class="card">
                <div class="card-header">
                    welcome sign in.
                </div>
                <div class="card-body">
                   
                    <form method="Post  ">
                    <div class="row d-grid max-auto">
                        <!-- Email adress -->
                        <div class="col">
                            <label class="form-control" for="email">Email address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email"  required>

                        </div>
                        <!--password-->
                        <div class="col">
                            <label class="form-label" for="password">password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password" id="password" required>

                    </div>
                        </div>

                  
                </div>
                <div class="d-grid gap-2 col-6 max-auto">
                    <button class="btn btn-primary" type="button" id="submit">sign in</button>

                </div>
                <br><br>
            </form>

            </div>

        </section>
   
</body>
</html>