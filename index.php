<?php
include 'login.check.php';
include "helper.php";

$cron = getCron();
$release = getRelease();
?>
<html>
<head>
	<title>Repo Macan</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<form action="submit.php" method="post">
			<div class="form-group">
				<label class="control-label" for="week">Hari</label>
				<select name="week" id="week" class="form-control">
					<?php echo getListDay($cron['week']) ?>
				</select>
			</div>

			<div class="form-group">
				<label class="control-label" for="hour">Jam</label>
				<select name="hour" id="hour" class="form-control">
					<?php for ($i=0; $i<=23; $i++): ?>
					<option value="<?php echo $i ?>" <?php if($cron['hour']==$i) echo "selected"; ?>><?php echo $i ?></option>
					<?php endfor ?>
				</select>
			</div>

			<div class="form-group">
				<label class="control-label" for="release">Rilis Kode</label>
				<input type="text" name="release" id="release" class="form-control" value="<?php echo $release ?>">
			</div>

			<div class="form-group">
				<input type="submit" value="Save" class="btn btn-primary">
			</div>

		</form>
	</div>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
