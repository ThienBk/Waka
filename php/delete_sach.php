<?php
if (isset($_POST['id'])) {
	$id = $_POST['id'];

	require_once ('./PHP/dbhelp.php');
	$sql = 'delete from sach where id = '.$id;
	execute($sql);
	echo 'Xoá sách';
}
?>