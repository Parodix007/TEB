<?php 
	$conn = mysqli_connect('localhost', 'sebastian', 'dupadupa', 'sebastian_') or die("BLAD KWERENDY");
	$que = mysqli_query($conn,"SELECT * FROM _uprawnieni") or die("BLAD KWERENDY");
	$arr = array();
	while($x = mysqli_fetch_assoc($que)){
		array_push($arr, $x);
	}
	echo json_encode($arr);
?>