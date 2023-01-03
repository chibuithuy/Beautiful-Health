<?php
	$host = "localhost";
	$dbname = "db_beautifulhealth";
	$dbusername = "root";
	$dbpassword = "";
	$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
	mysqli_query($ketnoi,'set names utf8');

;?>