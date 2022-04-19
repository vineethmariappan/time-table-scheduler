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
    <link rel="stylesheet" href="css/tableassistant.css" />
</head>
<?php 
include "navbar.php";
if(isset($_SESSION['loggedin'])==false){
    header("location: login.php");
    exit;
}
?>

<body>
    <div class="mask d-flex align-items-center h-200">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <table class="table">
                        <thead class="table-secondary">
                                <th>S.No</th>
                                <th>Academic year</th>
                                <th>Semester</th>
                                <th>Subject code</th>
                                <th>Subject name</th>
                                <th>Faculty code</th>
                                <th>Faculty name</th>
                                <th>Faculty department</th>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "select * from subject_allocation inner join subject on subject.subject_id=subject_allocation.subject_id inner join faculty on faculty.faculty_id = subject_allocation.faculty_id ";
                            $result = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                                
                            }
                            ?>
                            <tr>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</body>

</html>