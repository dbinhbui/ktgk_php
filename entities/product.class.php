<?php
require_once('config/db.class.php');
class nhanvien {
    public $Ma_NV;
    public $Ten_NV;
    public $Phai;
    public $Noi_Sinh;
    public $Ma_Phong;
    public $Luong;

    public function __construct($ten, $gioitinh, $noisinh, $maphong, $luong)
    {
        $this->Ten_NV=$ten;
        $this->Phai=$gioitinh;
        $this->Noi_Sinh=$noisinh;
        $this->Ma_Phong=$maphong;
        $this->Luong=$luong;
    }
    public function save() {
        $db=new Db();
        $sql="INSERT INTO nhanvien (Ten_NV, Phai, Noi_Sinh, Ma_Phong, Luong) VALUES
        ('$this->Ten_NV', '$this->Phai','$this->Noi_Sinh','$this->Ma_Phong','$this->Luong')";
        $result = $db->query_execute($sql);
        return $result;
    }
    public static function list_nv() {
        $db=new Db();
        $sql = "SELECT * FROM nhanvien";
        $result = $db->select_to_array($sql);

        return $result;
    }
}
?>