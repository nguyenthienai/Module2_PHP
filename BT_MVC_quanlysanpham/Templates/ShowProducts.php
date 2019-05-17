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
    <h2>Danh Sách Sản Phẩm</h2>
    <form action="?action=add" method="post">
        <input type="submit" value="ADD">
    </form>

    <table>
        <form action="?action=list" method="post">
        <th>ID</th>
        <th>Tên Sản Phẩm</th>
        <th>Giá</th>
        <th>Mô Tả</th>
        <th>Nhà Sản Xuất</th>

    <?php foreach ($result as $value){?>
        <tr>
            <td><?php echo $value['id'];?></td>
            <td><?php echo $value['tensp'];?></td>
            <td><?php echo $value['giasp'];?></td>
            <td><?php echo $value['mota'];?></td>
            <td><?php echo $value['nsx'];?></td>

            <td>
                <button><a href="?action=edit&id=<?php echo $value['id']; ?>">Edit</a></button>
                <button><a href="?action=delete&id=<?php echo $value['id']; ?>" onclick="return confirm('Bạn chắc chắn muốn xóa dòng này không?')">Delete</a></button>
            </td>
        </tr>
    <?php } ?>
        </form>
    </table>
</div>
</body>
</html>



