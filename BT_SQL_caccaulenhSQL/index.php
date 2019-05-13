<style>
    table, th, td {
        border: 1px solid black;
    }
</style>

<html>

<body>
<?php
if (!$_POST){
    $cau1 = false;
    var_dump($cau1);
}


?>

<div>
    <form method="post">
        <select name="select">
            <option value="selectHere" >---select Here---</option>
            <option value="cau1" >select * from customers</option>
            <option value="cau2">SELECT customerName, phone, city, country FROM customers </option>
            <option value="cau3" >SELECT * FROM customers WHERE customerName = 'Atelier Graphique'</option>
            <option value="cau4">SELECT * FROM customers WHERE customername like '%A%'</option>
            <option value="cau5">SELECT * FROM customers WHERE city IN ('Nantes',' Las Vegas',' Warszawa','NYC') </option>
        </select>
        <input name="ok" onclick="submit()" type="submit" value="OK">
    </form>
    <label><p>Result:</p></label>
</div>
</body>

</html>

<?php
include "db-connect.php";
echo "<br>";
$cau1 = false;

$select = $_POST["select"];
$ok = $_POST["ok"];
if ($_POST){
    if ($ok){
        switch ($select){
            case "selectHere":
                echo "Please select";
                break;
            case "cau1":
                include "cau1.php";
                break;
            case "cau2":
                include "cau2.php";
                break;
            case "cau3":
                include "cau3.php";
                break;
            case "cau4":
                include "cau4.php";
                break;
            case "cau5":
                include "cau5.php";
                break;
        }
    }
}



