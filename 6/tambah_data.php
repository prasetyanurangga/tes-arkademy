<?php

include("koneksi.php");
error_reporting(0);
$id = $_POST["id"];
try {
	$kirim = mysqli_query($kon,"UPDATE candidates SET earned_vote = earned_vote + 1 WHERE id = '". $id ."'");
	$query = mysqli_query($kon,"SELECT * FROM candidates WHERE id = '". $id ."'");
	while ($fetch = mysqli_fetch_array($query)) {
		$idnya = $fetch["earned_vote"];	
	}	
	$data = array(
		'hasil' => 'berhasil',
		'id' => $idnya 
	);
} catch (Exception $e) {
	$data = array(
		'hasil' => 'gagal',
		'id' => '' 
	);
}

echo json_encode($data);


?>