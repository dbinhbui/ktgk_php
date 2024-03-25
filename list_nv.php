<?php
require_once("./entities/product.class.php");
?>

<?php
include_once("./header.php");
$prods = nhanvien::list_nv();

foreach ($prods as $item) {
    echo "<p>Mã nhân viên: " .$item["Ma_NV"]."</p>";
    echo "<p>Tên nhân viên: ".$item["Ten_NV"]."</p>";
    echo "<p>Phái: ".$item["Phai"]."</p>";
    echo "<p>Nơi sinh: ".$item["Noi_Sinh"]."</p>";
    echo "<p>Mã phòng ban: ".$item["Ma_Phong"]."</p>";
    echo "<p>Lương: ".$item["Luong"]."</p> <br>";
}
include_once("./footer.php");
?>