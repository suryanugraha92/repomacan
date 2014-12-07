<html>
<head>
	<title>Repo Macan</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<form action="">
			<div class="form-group">
				<label class="control-label" for="days">Hari</label>
				<select name="days" id="days" class="form-control">
					<option value="*">Semua hari</option>
					<option value="1">Senin</option>
					<option value="2">Selasa</option>
					<option value="3">Rabu</option>
					<option value="4">Kamis</option>
					<option value="5">Jum'at</option>
					<option value="6">Sabtu</option>
					<option value="7">Minggu</option>
				</select>
			</div>

			<div class="form-group">
				<label class="control-label" for="hours">Jam</label>
				<select name="hours" id="hours" class="form-control">
					<?php for ($i=0; $i<=23; $i++): ?>
					<option value="<?php echo $i ?>"><?php echo $i ?></option>
					<?php endfor ?>
				</select>
			</div>

			<div class="form-group">
				<label class="control-label" for="hours">Rilis Kode</label>
				<input type="text" name="release" class="form-control" value="">
			</div>

			<div class="form-group">
				<input type="submit" value="Save" class="btn btn-primary">
			</div>

		</form>
	</div>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>