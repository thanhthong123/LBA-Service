<?php
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"FlatList");
	mysqli_query($con,"SET NAMES 'utf8'");


	class Casi{
		public $key;
		public $HOTEN;
		public $HINH;
		public $MOTA;
		function Casi($id,$hoten,$hinh,$mota){
			$this->key  = $id;
			$this->HOTEN  = $hoten;
			$this->HINH  = $hinh;
			$this->MOTA  = $mota;
		}
	}
?>