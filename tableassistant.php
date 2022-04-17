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
                    <table cellspacing="0" cellpadding="0" dir="ltr" border="1">
                        <colgroup>
                            <col width="100" />
                            <col width="100" />
                            <col width="100" />
                            <col width="100" />
                            <col width="100" />
                            <col width="100" />
                            <col width="100" />
                            <col width="100" />
                            <col width="100" />
                            <col width="100" />
                            <col width="100" />
                            <col width="100" />
                        </colgroup>
                        <tbody>
                            <tr>
                                <td class="diagonalCross2" rowspan="2" colspan="1" >
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  HOUR <br> <br> DAY &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </td>
                                <td>
                                    1
                                </td>
                                <td>
                                    2
                                </td>
                                <td rowspan="2" colspan="1">
                                    <div>
                                        10:50 - 11:10
                                    </div>
                                </td>
                                <td>
                                    3
                                </td>
                                <td>
                                    4
                                </td>
                                <td rowspan="2" colspan="1">
                                    <div>
                                        12:50 - 1:40
                                    </div>
                                </td>
                                <td>
                                    5
                                </td>
                                <td>
                                    6
                                </td>
                                <td rowspan="2" colspan="1">
                                    <div>
                                        3:20 - 3:30
                                    </div>
                                </td>
                                <td>
                                    7
                                </td>
                                <td>
                                    8
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    9:10 - 10:00
                                </td>
                                <td>
                                    10:00 - 10:50
                                </td>
                                <td>
                                    11:10 - 12:00
                                </td>
                                <td>
                                    12:00 - 12:50
                                </td>
                                <td>
                                    1:40 - 2:30
                                </td>
                                <td>
                                    2:30 - 3:20
                                </td>
                                <td>
                                    3:30 - 4:10
                                </td>
                                <td>
                                    4:10 - 5:00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Moday
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td rowspan="5" colspan="1">
                                    <div>
                                        BREAK
                                    </div>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td rowspan="5" colspan="1">
                                    <div>
                                        LUNCH
                                    </div>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td rowspan="5" colspan="1">
                                    <div>
                                        BREAK
                                    </div>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tuesday
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Wednesday
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Thursday
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Friday
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                                <td>
                                    <?php include "tablecelloption.php" ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12" style="text-align: center;">
                    <br>
                    <button class="btn btn-secondary">Finalize</button>
                    <button class="btn btn-secondary">Generate PDF</button>

                </div>
            </div>
        </div>

    </div>
</body>

</html>