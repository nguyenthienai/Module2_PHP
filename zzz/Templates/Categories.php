<style>
    table, td {
        border: 1px solid black;
    }
    th {
        background: #9fcdff;
    }
    .content{
        width:800px;
        margin: 0 auto;

    }
</style>

<html>
<body>
<div>
    <h2>Categories:</h2>

    <table>
        <th>Category Code</th>
        <th>Category Name</th>
        <th>Descriptions</th>

    <?php foreach ($category as $value){?>
        <tr>
            <td><?php echo $value['categoryCode'];?></td>
            <td><?php echo $value['categoryName'];?></td>
            <td><?php echo $value['description'];?></td>

        </tr>
    <?php } ?>
    </table>
</div>
</body>
</html>
