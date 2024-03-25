<?php
require_once("./entities/product.class.php");

if(isset($_POST["btnsubmit"])) {
    $Ten_NV=$_POST["txtName"];
    $Phai=$_POST["txtPhai"];
    $Noi_Sinh=$_POST["txtNoisinh"];
    $Ma_Phong=$_POST["txtMP"];
    $Luong=$_POST["txtLuong"];

    $newNhanVien=new nhanvien($Ten_NV, $Phai, $Noi_Sinh, $Ma_Phong, $Luong);

    $result = $newNhanVien->save();
    if(!$result)
    {
        header("Location: add-nv.php?failure");
    }
    else {
        header("Location: add-nv.php?inserted");
    }
}
?>

<?php include_once("header.php");
?>

<?php
if(isset($_GET["inserted"])){
    echo "<h2>Thêm nhân viên thành công</h2>";
}
?>

<form method="post">
    <div class="row">
        <div class="lbltitle">
            <label>Tên nhân viên</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtName" value="<?php echo isset($_POST["txtName"]) ? $_POST["txtName"] : "" ; ?>"/>
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label>Phái</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtPhai" value="<?php echo isset($_POST["txtPhai"]) ? $_POST["txtPhai"] : "" ; ?>"/>
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label>Nơi sinh</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtNoisinh" value="<?php echo isset($_POST["txtNoisinh"]) ? $_POST["txtNoisinh"] : "" ; ?>"/>
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label>Phòng ban</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtMP" value="<?php echo isset($_POST["txtMP"]) ? $_POST["txtMP"] : "" ; ?>"/>
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label>Lương</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtLuong" value="<?php echo isset($_POST["txtLuong"]) ? $_POST["txtLuong"] : "" ; ?>"/>
        </div>
    </div>
    <div class="row">
        <div class="submit">
            <input type="submit" name="btnsubmit" value="thêm nhân viên">
        </div>
    </div>
</form>
<?php include_once("./footer.php");