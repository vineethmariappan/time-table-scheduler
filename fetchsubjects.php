<?php
require_once "config.php";
if(isset($_POST["department"])){
    $sql = "select subject_code from subject inner join department on subject.department_id=department.department_id where department_name='".$_POST["department"]."'";
    $result = mysqli_query($con, $sql);
    $response = array();
    while($row = mysqli_fetch_assoc($result)) {
        array_push($response, $row['subject_code']);
    }
    echo json_encode($response);
}
?>
