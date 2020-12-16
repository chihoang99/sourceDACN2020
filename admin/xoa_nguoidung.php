 <?php
 session_start();
include '../include/connect.php';
include 'function/function.php';

// echo "<pre>";
//    print_r($_SESSION);
//    exit();

if($_SESSION['idnd']!=$_GET['idnd']){
	$delete = "delete from nguoidung where idnd='{$_GET['idnd']}'";
	$del = mysql_query($delete);
	if ($del)
	//echo "thanh cong";
	//header("location: index.php?admin=hienthind");
		redirect ("admin.php?admin=hienthind", "Xóa người dùng thành công. ", 2);
	else
		echo "Xóa người dùng thất bại";
}
else
		echo "Không được tự xóa!!!";
?>