<style>
    table, th, td {
        border: 1px solid black;
    }
</style>
<?php
include_once "db-connect.php";


$sql = $conn->prepare("SELECT * FROM offices");
$sql->execute();
$sql->setFetchMode(PDO::FETCH_ASSOC);

$data = $sql->fetchAll();
?>
<form method="post">
    <button><a href="Add.php">ADD</a> </button><br><br>
<table>
    <th>Office Code</th>
    <th>City</th>
    <th>Phone</th>
    <th>Country</th>
    <?php
    foreach ($data as $key => $value){?>
        <tr>
            <td> <?php echo $value['officeCode']; ?></td>
            <td> <?php echo $value['city']; ?></td>
            <td> <?php echo $value['phone']; ?></td>
            <td> <?php echo $value['country']; ?></td>
            <td>
                <button><a href="Edit.php?id=<?php echo $value['officeCode'];?>">EDIT</a></button>

            <td>
                <button>
                    <a href="Delete.php?id=<?php echo $value['officeCode'];?>" onclick="return confirm('Are you sure you want to delete?')" value="<?php echo $value['officeCode'];?>">Delete</a>
                </button>
            </td>
        </tr>
    <?php } ?>

</table>
</form>

