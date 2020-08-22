<?php
#mysql_connect('localhost','root','12345')or die(mysql_error());
#mysql_select_db('sijabud')or die(mysql_error());

$koneksi = mysql_connect("localhost","root","12345")or
	exit ("Koneksi gagal");
	mysql_select_db("arkademy");
?>