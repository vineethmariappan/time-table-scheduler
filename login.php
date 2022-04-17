<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/login.css" />
</head>
<?php 
include "navbar.php";
?>

<?php
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: tableassistant.php");
    exit;
}
 
$admin_name = $password = "";
$admin_name_err = $password_err = $login_err = $track_err = "";
 $track = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["admin_name"]))){
        $admin_name_err = "Please enter admin name.";
    } else{
        $admin_name = trim($_POST["admin_name"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }


    
    // Validate credentials
    if(empty($admin_name_err) && empty($password_err) && empty($track_err)){
        // Prepare a select statement
        $sql = "SELECT admin_name, password FROM admin WHERE admin_name = ? and password=?";
        
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_admin_name,$param_password);
            
            // Set parameters
            $param_admin_name = $admin_name;
            $param_password = $password;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if admin_name exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    if(mysqli_stmt_fetch($stmt)){
                            session_start();
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["admin_name"] = $admin_name;                            
                            header("location: tableassistant.php");
                    }
                } else{
                    // admin_name doesn't exist, display a generic error message
                    $login_err = "Invalid admin name or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($con);
}
?>


<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 ">
                    <div class="bg-image-vertical h-20" style="background-color: #EFD3E4;">
                      <div class="mask d-flex align-items-center h-200">
                        <div class="container">
                          <div class="row justify-content-center">
                            <div class="col-md-5 col-md-5">
                          <h1 class="mb-5 text-center">TIMETABLE ASSISTANT</h1>

                              <div class="card" style="border-radius: 1rem;">
                                <div class="card-body p-5">
                  
                                  <h3 class="mb-5 text-center">LOGIN</h3>

                                  <?php 
                                    if(!empty($login_err)){
                                        echo '<div class="alert alert-danger">' . $login_err . '</div>';
                                    }        
                                    ?>
                  
                                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                              
                  
                                    <!-- Text input -->
                                    <div class="form-outline mb-4">
                                      <input type="text" id="adminname" name="admin_name" class="form-control <?php echo (!empty($admin_name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $admin_name; ?>" />
                                      <label class="form-label" for="adminname">Admin name</label>
                                      <span class="invalid-feedback"><?php echo $admin_name_err; ?></span>
                                    </div>
                  
                                    <!-- Text input -->
                                    <div class="form-outline mb-4">
                                      <input type="password" id="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" />
                                      <label class="form-label" for="password">Password</label>
                                      <span class="invalid-feedback"><?php echo $password_err; ?></span>
                                    </div>
                  
                               
                  
                                 
                  
                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-secondary btn-rounded btn-block">Login</button>
                                  </form>
                  
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
            </div>
        </div>

    </div>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>