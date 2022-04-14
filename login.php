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
include "navbar.php"
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
                  
                                  <form>
                              
                  
                                    <!-- Text input -->
                                    <div class="form-outline mb-4">
                                      <input type="text" id="adminname" name="admin_name" class="form-control" />
                                      <label class="form-label" for="adminname">Admin name</label>
                                    </div>
                  
                                    <!-- Text input -->
                                    <div class="form-outline mb-4">
                                      <input type="password" id="password" name="password" class="form-control" />
                                      <label class="form-label" for="password">Password</label>
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