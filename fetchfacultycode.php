<?php
require_once "config.php";
if(isset($_POST["department"])){
    $sql = "select faculty_code,faculty_name from faculty inner join department on faculty.department_id=department.department_id where department_name='".$_POST["department"]."'";
    $result = mysqli_query($con, $sql);
    $response = array();
    while($row = mysqli_fetch_assoc($result)) {
        array_push($response, $row['faculty_code']);
    }
    echo json_encode($response);
}
?>
