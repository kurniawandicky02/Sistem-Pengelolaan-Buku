<?php 

require_once '../init.php';
require_once '../cek_login.php';

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$query = mysqli_query($koneksi, "DELETE FROM tbl_penerbit WHERE id = $id");
	if($query == TRUE){
		set_flash_message('sukses', 'Data penerbit berhasil dihapus!');
		header('Location: index.php');
	} else die(mysqli_error($koneksi));
}

?>