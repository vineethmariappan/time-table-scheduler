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
include "navbar.php";
if(isset($_SESSION['loggedin'])==false){
    header("location: login.php");
    exit;
}
$academic_year_err =  $semester_err  = $faculty_code_err = "";
$academic_year  = $semester = $faculty_code = "";
$success = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["academic_year"]))){
        $academic_year_err = "Please enter academic year.";
    } else{
        $academic_year = trim($_POST["academic_year"]);
    }
    

    if(empty(trim($_POST["semester"]))){
        $semester_err = "Please enter semester.";
    } else{
        $semester = trim($_POST["semester"]);
    }
    if(empty(trim($_POST["subject_code"]))){
        $subject_code_err = "Please enter subject code.";
    } else{
        $subject_code = trim($_POST["subject_code"]);
    }



    if(empty(trim($_POST["faculty_code"]))){
        $faculty_code_err = "Please enter faculty code";
    } else{
        $faculty_code = trim($_POST["faculty_code"]);
    }
    
    // Validate credentials
    if(empty($academic_year_err) && empty($semester_err) && empty($faculty_code_err)){
        $result = mysqli_query($con,"select subject_id from subject where subject_code like '%".$subject_code."%' LIMIT 1");
        $row = mysqli_fetch_assoc($result);
        $subject_id = $row['subject_id'];
        $result = mysqli_query($con,"select faculty_id from faculty where faculty_code='".$faculty_code."' LIMIT 1");
        $row = mysqli_fetch_assoc($result);
        $faculty_id = $row['faculty_id'];
        $result = mysqli_query($con,"select subject_id from subject_allocation where subject_id=".$subject_id);
        if(mysqli_num_rows($result)>0){
            $subject_code_err = "The Subject has already been allocated to a faculty!";
        }
        else{
            $sql = "INSERT INTO subject_allocation(subject_id,faculty_id,semester,academic_year) values(?,?,?,?)";
            $stmt = mysqli_prepare($con, $sql);
            mysqli_stmt_bind_param($stmt, "ssss", $subject_id,$faculty_id,$semester,$academic_year);
            mysqli_stmt_execute($stmt);
            $success = true;
        }

    }
    
    // Close connection
    mysqli_close($con);
}
?>

<body>
                <div class="container">
                    <br> <br> <br>  
                    <div class="row justify-content-center">
                        <div class="col-md-5">

                            <div class="card" style="border-radius: 1rem;">
                                <div class="card-body p-5">
                                    <h3 class="mb-5 text-center">SUBJECT ALLOCATION</h3>
                                    <?php 
                                    if(!empty($subject_code_err)){
                                        echo '<div class="alert alert-danger">' . $subject_code_err . '</div>';
                                    }        
                                    else if($success){
                                        echo '<div class="alert alert-success">Subject successfully allocated to the faculty</div>';
                                    }
                                    ?>
                                    <form method="post">


                                        <!-- Text input -->
                                        <div class="form-outline mb-4">
                                            <input required type="text" name="academic_year" id="form6Example3" class="form-control"
                                                placeholder="YYYY-YYYY" />
                                            <label class="form-label" for="form6Example3">Academic year</label>
                                        </div>


                                        <!-- Text input -->
                                        <div class="mb-4">
                                            <select required class="form-select" name="department_main" id="department_main">
                                                <option selected value="">Select Department</option>
                                                <option value="CSE">CSE</option>
                                                <option value="ECE">ECE</option>
                                                <option value="MECH">MECH</option>
                                                <option value="GEO">GEO</option>
                                            </select>
                                        </div>

                                        <div class="mb-4"> 
                                            <select required class="form-select" name="semester">
                                                <option selected value=''>Select Semester</option>
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
                                        <select required id="subject_code" class="form-select" name="subject_code">
                                                <option selected value=''>Select Subject code</option>
                                            </select>

                                        </div>
                                        <div class="form-outline mb-4">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <select required class="form-select" id="department" name="department_faculty">
                                                        <option selected value=''>Select Department</option>
                                                        <option value="CSE">CSE</option>
                                                        <option value="ECE">ECE</option>
                                                        <option value="MECH">MECH</option>
                                                        <option value="GEO">GEO</option>
                                                    </select>
                                                    <select required id="faculty_code" class="form-select" name="faculty_code">
                                                        <option selected value=''>Select faculty code</option>
                                                    </select>
                                                    <div class="form-outline">
                                                        <input required type="text" id="faculty_name"
                                                            class="form-control" name="faculty_name" disabled />
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

    <!-- MDB -->
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="js/faculty.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>