<?php
session_start();

mysql_connect('localhost', 'root', '');
mysql_select_db('repo');

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM login WHERE username='".$username."'";
$result = mysql_query($query);
$nums = mysql_num_rows($result);
$data = mysql_fetch_assoc($result);

if ($nums == 1) {
	if (md5($password) == $data['password']) {
		$_SESSION['login'] = $data['id'];

		header('Location: index.php');
	}
}

header('Location: login.php');
?>