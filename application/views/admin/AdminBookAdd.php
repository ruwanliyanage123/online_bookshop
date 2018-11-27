<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script src="main.js"></script>
</head>
<body>

	<?php /*
		echo $this->session->flashdata('msg');
		echo form_open_multipart();
		echo form_upload('file');
		echo form_submit('upload','Upload');
		echo form_close();*/

		//base_url("index.php/admin/ImageUpload/index")
	?>


 <?php echo validation_errors(); ?>


<?php echo form_open_multipart('/admin/ImageUpload/create');?>

	<div class="form-group">
		<label for="naam">Naam</label><br>
		<input type="input" name="naam" class="form-control" /><br />
	</div>

	<div class="form-group">
		<label for="voornaam">Voornaam</label><br>
		<input type="input" name="voornaam" class="form-control"/><br />
	</div>

	<div class="form-group">
		<label for="text">Vertel iets over jezelf:</label><br>
		<textarea name="text" class="form-control" rows="5"></textarea><br />
	</div>

	<div class="form-group">
		<label for="text">Kies een profiel foto:</label><br>
		<input type="file" name="userfile"  class="btn btn-default btn-file" />
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-success" name="submit" value="Create student" " />
	</div>

</form>
 	
</body>
</html>























