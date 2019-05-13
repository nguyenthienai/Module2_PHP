<?php
include_once "db-connect.php";

$a = mysqli_query($conn,"SELECT * FROM customers WHERE customerName = 'Atelier Graphique'");
$row1 = mysqli_fetch_assoc($a);
$countRows = mysqli_num_rows($a);

echo "SELECT * FROM customers WHERE customerName = 'Atelier Graphique'";
echo "<table>";
if ($countRows > 0) {
    foreach ($row1 as $key => $value) {
        echo "<th>" . $key . "</th>";
    }
}
while ($row = mysqli_fetch_assoc($a)) {
    echo "<tr>";

    foreach ($row as $key => $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}

echo "</table>";