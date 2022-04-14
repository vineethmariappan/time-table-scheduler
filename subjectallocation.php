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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/login.css" />
</head>
<?php 
include "navbar.php"
?>
<body>
    
            
            <div class="col-md-5">

                <div class="bg-image-vertical h-20" style="background-color: #EFD3E4;">
                    <div class="mask d-flex align-items-center h-200">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-5 col-md-5">

                                    <div class="card" style="border-radius: 1rem;">
                                        <div class="card-body p-5">
                                            <h3 class="mb-5 text-center">SUBJECT ALLOCATION</h3>

                                            <form>


                                                <!-- Text input -->
                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form6Example3" class="form-control"
                                                        placeholder="YYYY-YYYY" />
                                                    <label class="form-label" for="form6Example3">Academic year</label>
                                                </div>

                                             
                                                <!-- Text input -->
                                                <div class="mb-4">
                                                    <select class="form-select">
                                                        <option selected>Select Department</option>
                                                        <option value="CSE">CSE</option>
                                                        <option value="ECE">ECE</option>
                                                        <option value="MECH">MECH</option>
                                                        <option value="GEO">GEO</option>
                                                    </select>
                                                </div>

                                                <div class="mb-4">
                                                    <select class="form-select">
                                                        <option selected>Select Semester</option>
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                        <option value="5">05</option>
                                                        <option value="6">06</option>
                                                        <option value="7">07</option>
                                                        <option value="8">08</option>
                                                    </select>
                                                </div>
                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="subject_code" class="form-control" />
                                                    <label class="form-label" for="subject_code">Subject code</label>
                                                </div>
                                                <div class="form-outline mb-4">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <select class="form-select"
                                                                aria-label="Default select example">
                                                                <option selected></option>
                                                            </select>
                                                            <select class="form-select"
                                                                aria-label="Default select example">
                                                                <option selected></option>
                                                            </select>
                                                            <div class="form-outline">
                                                                <input required type="text" id="form6Example3"
                                                                    class="form-control" placeholder="" />
                                                                <label class="form-label" for="form6Example3">Faculty code</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <button type="submit"
                                                    class="btn btn-secondary btn-rounded btn-block">Allocate</button>
                                            </form>

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