<?php
require_once("connect1.php");
require_once("pagination.php");
$db = new Database();
if($_SERVER['REQUEST_METHOD']==='POST'):
    $statement = "select * from product where concat(id, name_pro, price, quantity, description_pro, create_date) like ?";
    $param = ["%{$_POST['search']}%"];
    $stmt = $db->selectDataParam($statement, $param);
else:
    $statement = "select id from product";
    $stmt= $db->selectData($statement);
    $total = $stmt->rowCount();
    $config = array(
        'current_page'  => isset($_GET['page']) ? $_GET['page'] : 1, // Trang hiện tại
        'total_record'  => $total, // Tổng số record
        'limit'         => 5,// limit
        'link_full'     => 'index.php?page={page}',// Link full có dạng như sau: domain/com/page/{page}
        'link_first'    => 'index.php',// Link trang đầu tiên
        'range'         => 9 // Số button trang bạn muốn hiển thị
    );

    $paging = new Pagination();
    $paging->init($config);

    $statement = "select * from product " .$paging->get_limit();
    $stmt= $db->selectData($statement);
endif;
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Select Database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body align="center">
<form action="#" method="post">
    <label for="search">Tìm kiếm:</label><br/>
    <input type="search" name="search" placeholder="Nhập từ khóa cần tìm" required>
    <hr/>
    <input type="submit" value="Tìm">
    <a href="insert.php">Thêm Sản Phẩm</a>
</form>
<br/>
<table border="1" cellspacing="0" align="center">
    <tr>
        <th>STT</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Mô tả sản phẩm</th>
        <th>Ảnh sản phẩm</th>
        <th>Trạng thái</th>
        <th>Ngày tạo</th>
        <th>Chỉnh sửa</th>
        <th>Xóa</th>
    </tr>
    <?php while($product = $stmt->fetch(PDO::FETCH_ASSOC)):
        extract($product);
        ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?= $name_pro ?></td>
            <td><?= $price?></td>
            <td><?= $quantity?></td>
            <td><?= $description_pro?></td>
            <td><img height="100" width="auto" src="images/<?= $photo?>"></td>
            <td><?= $status_pro?></td>
            <td><?= $create_date?></td>
            <td><a href="edit.php?id=<?=$id?>">Sửa</a></td>
            <td><a href="delete.php?id=<?=$id?>">Xóa</a></td>
        </tr>
    <?php
    endwhile;
    $db->closeConn();
    ?>
</table>
<?php echo $paging->html();?>
</body>
</html>