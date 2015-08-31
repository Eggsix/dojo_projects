<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		#submitted {
			border: 1px solid black;
			height: 400px;
			width: 400px;
			margin: 0 auto;
			padding: 10px;
		}
		label {
    display: inline-block;
    float: left;
    clear: left;
    width: 200px;
   
		}
		p {
		  display: inline-block;
		  float: left;
		}
		.success {
			margin: 0 auto;
			border: 1px solid black;
			background-color: green;
			width: 400px;
			height: 50px;
			padding: 10px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
	<h2 class="success">Thanks for submitting this form! You have submitted this form <?= $this->session->userdata('counter') ?> times now.</h2>
	
	<div id="submitted">
		<h2>Submitted Information</h2>
		<label>Name:</label> <p><?= $this->session->userdata('name') ?></p>
		<label>Dojo Location:</label> <p><?= $this->session->userdata('location') ?></p>
		<label>Favorite Language:</label><p><?= $this->session->userdata('Favorite_Language') ?></p>
		<label>Comment:</label><p><?= $this->session->userdata('comment') ?></p>
	</div>
		<a href="/"><button>Back</button></a>
</body>
</html>