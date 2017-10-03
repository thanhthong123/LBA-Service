<?php
	require "dbCon.php";

	$sotin1trang = 5;
	$trang = $_GET["trang"];
	settype($trang,"int");
	$from = ($trang -1)*$sotin1trang;

	$qr = "SELECT * FROM CaSi LIMIT $from, $sotin1trang";

	$ds = mysqli_query($con, $qr) ;

	$mang = array();
	while( $row = mysqli_fetch_array($ds)){
		array_push($mang,new Casi(
			$row["id"],
			$row["Name"],
			$row["Hinh"],
			$row["MoTa"]
		));
	}
	echo json_encode($mang);
?>
