<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Rental Service || Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
  </head>
  <body>

  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                <!-- image -->
                <!-- <img src="https://t3.ftcdn.net/jpg/03/58/16/06/360_F_358160626_45fJ6k9AhrZzSyRedvemX3ofxWEUD1r7.jpg" alt=""> -->
                <!-- <div class="text">
                    <p>Rent a Car according to your own comfort!</p>
                </div> -->
            </div>
            <div class="col-md-6 right">
                <div class="input-box">
                <!-- <img src="https://t3.ftcdn.net/jpg/03/58/16/06/360_F_358160626_45fJ6k9AhrZzSyRedvemX3ofxWEUD1r7.jpg" class="img-fluid" alt=""> -->
                    <header><img src="https://t3.ftcdn.net/jpg/03/58/16/06/360_F_358160626_45fJ6k9AhrZzSyRedvemX3ofxWEUD1r7.jpg" class="img-fluid" alt=""></header>
                    <div class="input-field">
                        <input type="text" class="input" id="email" required autocomplete="off">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" class="input" id="password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="input-field">
                        <a href="home.php"></a>
                        <input type="submit" onClick="myFunction()" class="submit" value="Login">
                        <script>
                            function myFunction() {
                            window.location.href="home.php";  
                            }
                        </script>
                        
                    </div>
                    <div class="signin">
                        <span>Don't Have an account? <a href="register.php">Register Here</a></span>
                    </div>
                    <p><a href="forgetpass.php">Forgot password</a></p>
                </div>
            </div>
        </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>