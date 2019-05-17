<?php
require_once ('Models/DBconnect.php');

$connect = new DBconnect();
$conn = $connect->connect();
$id = $_GET['id'];
$sql = "SELECT * FROM sanpham WHERE id ='$id'";
$data = $conn->prepare($sql);
$data->execute();
$obj=$data->fetch(PDO::FETCH_OBJ);
?>

<html>
<body>
<div>
    <h2>Chỉnh sửa sản phẩm</h2>
    <form action="?action=doEdit" method="post">
        Id sản phẩm:
        <input type="text" name="id" value="<?php echo $obj->id; ?>"><br><br>
        Tên sản phẩm:
        <input type="text" name="tensp" value="<?php echo $obj->tensp; ?>"><br><br>
        Giá:
        <input type="text" name="giasp" value="<?php echo $obj->giasp; ?>"><br><br>
        <label>Mô tả:</label><br>
        <textarea name="mota" placeholder="mô tả" rows="10" cols="50"><?php echo $obj->mota; ?></textarea><br><br>
        Nhà sản xuất:
        <input type="text" name="nsx" value="<?php echo $obj->nsx; ?>"><br><br>
        <input type="submit" value="Sửa">
        <button><a href="?action=list">Thoát</a></button>
    </form>
</div>
</body>
</html
