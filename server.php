<?php
session_start();

// initializing variables
$name = "";
$email = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'rent');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
 
  // checking for a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users_reg WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }


  if (count($errors) == 0) {
  	$password = md5($password);

  	$query = "INSERT INTO users_reg (id, name, email, phone, password) 
  			  VALUES(uuid(), '$name', '$email', $phone, '$password')";
  	mysqli_query($db, $query);
  	 $_SESSION['name'] = $name;
     $_SESSION['phone'] = $phone;
     $_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are registered successfully";
  	header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users_reg WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
        $fetched = mysqli_fetch_assoc($results);
        $name = $fetched["name"];
        $phone = $fetched["phone"];
        $email = $fetched["email"];
        $id = $fetched["id"];

        if (mysqli_num_rows($results) == 1) {
          $_SESSION['name'] = $name;
          $_SESSION['phone'] = $phone;
          $_SESSION['email'] = $email;
          $_SESSION['id'] = $id;
          $_SESSION['success'] = "You are now logged in";
          header('location: home.php');
        }else {
            //array_push($errors, "Wrong email or password combination");
            //header('location: index.php');
            echo "Wrong email or password combination";
        }
    }
  }

  // Edit Profile Form
  if (isset($_POST['edit_profile'])) {
    
    //$id = mysqli_real_escape_string($db, $_GET['id']);


    if(count($errors) == 0) {
      $query = "SELECT * FROM users WHERE email='$email'";
      $results = mysqli_query($db, $query);
      $fetched = mysqli_fetch_assoc($results);
      $id = $fetched["id"];

      if($fetched){
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $update_query = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id='$id'";

        header("Location: profile-page.php");
      }
    }


    
  }
  
?>