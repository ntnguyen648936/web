<?php
// Connect to the database
include_once '../database/database.php';

// Request
$DepartmentId = $_REQUEST["manageid"];
if ($DepartmentId != 0) {
    $sql = "SELECT * 
    FROM `employee` , `user`
    WHERE employee.id=user.id AND dept = $DepartmentId;";
    $result = $conn->query($sql);
}


if ($result->num_rows > 0) {
    header("Content-type: text/xml");
    while ($row = $result->fetch_assoc()) {

        $typeOfEmp = "";
        if ($row["lv"] == 1) {
            $typeOfEmp = "elc_red";
        } else if ($row["lv"] == 2) {
            $typeOfEmp = "elc_yellow";
        } else {
            $typeOfEmp = "elc_green";
        }

        echo "<tr class='employee_level_color $typeOfEmp' name=" . $row["id"] . " onclick={getCmtEmployee(" . $row["id"] . ")}>";
        echo "<td  > <input type='checkbox' class='employee_checkbox' name=" . $row["id"] . "> </input></td>";
        echo "<td >" . $row["fname"] . "</td>";
        echo "<td > " . $row["lv"] . "</td>";
        echo "<td >" . "NONE" . "</td>";
        echo "<td >7" . $row["id"] . "</td>";
        echo "<td >None</td>"
        ;
        echo "<td >" . $row["bdate"] . "</td>"
        ;
        echo "</tr>";
    }
} else {
    echo '<tr class="employee_level_color elc_red" >';
    echo '<td > <input type="checkbox"> </input></td>';
    echo '<td >NO EMPLOYEE FOUND !!!</td>';
    echo '<td >?</td>';
    echo '<td >?</td>';
    echo '<td >?</td>';
    echo '<td >None</td>'
    ;
    echo '<td >1 Feb</td>'
    ;
    echo '</tr>';
}

$conn->close();