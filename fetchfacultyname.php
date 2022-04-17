<?php
require_once "config.php";
if(isset($_POST["faculty_code"])){
    $sql = "select faculty_name from faculty where faculty_code='".$_POST["faculty_code"]."'";
    $result = mysqli_query($con, $sql);
    $response = array();
    while($row = mysqli_fetch_assoc($result)) {
        array_push($response, $row['faculty_name']);
    }
    echo json_encode($response);
}
?>
