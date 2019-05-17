<html>
<body>
<div>
    <h2>Thêm mới sản phẩm</h2>
    <form action="?action=doAdd" method="post">
        Tên sản phẩm:
        <input type="text" name="tensp" placeholder="tên sản phẩm"><br><br>
        Giá:
        <input type="text" name="giasp" placeholder="giá sản phẩm"><br><br>
        <label>Mô tả:</label><br>
        <textarea name="mota" placeholder="mô tả" rows="10" cols="50"></textarea><br><br>
        Nhà sản xuất:
        <input type="text" name="nsx" placeholder="nhà sản xuất"><br><br>
        <input type="submit" value="Thêm">
        <button><a href="?action=list">Thoát</a></button>
    </form>
</div>
</body>
</html