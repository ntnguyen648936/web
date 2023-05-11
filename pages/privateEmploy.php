<?php

$departmentName = $_GET['name'];
// echo 'employee page' . $id;

include('process/dbh.php');
$sql = "SELECT * FROM employee, rank WHERE employee.dept = '" . $departmentName . "' AND rank.eid = employee.id order by rank.points desc";
// echo $sql;
$result = mysqli_query($conn, $sql);

// $mysql = "SELECT * FROM employee WHERE employee.id = '104'";
// $myResult = $conn->query($mysql);
// $departmentName = mysqli_fetch_all($myResult, MYSQLI_ASSOC);
// echo $departmentName[0]['dept'];

?>


<html>

<head>
    <title>Admin Panel | XYZ Corporation</title>
    <link rel="stylesheet" type="text/css" href="styleemplogin.css">
</head>

<body>
    <h1>Department name: <?php echo $departmentName; ?></h1>

    <div class="divider"></div>
    <div id="divimg">
        <h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Empolyee Leaderboard </h2>
        <table>
            <tr bgcolor="">
                <th align="center">Seq.</th>
                <th align="center">Emp. ID</th>
                <th align="center">Name</th>
                <th align="center">Points</th>
            </tr>

            <?php
            $seq = 1;
            while ($employee = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $seq . "</td>";
                echo "<td>" . $employee['id'] . "</td>";
                echo "<td>" . $employee['firstName'] . " " . $employee['lastName'] . "</td>";
                echo "<td>" . $employee['points'] . "</td>";
                $seq += 1;
            }
            ?>

        </table>

        <div class="p-t-20">
            <button><a href="reset.php"> Reset Points</button>
        </div>
    </div>
</body>

</html>