<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/th.jpeg">
	</head>
	<body>
	<div class="container">
		<div class="card">
			<div class="card-header">
				Home Page
			</div>
			<div class="card-body">
	        <center><h1>Selamat Datang <?php echo $this->session->userdata('nama'); ?></h1></center><hr/>
				<a href="<?php echo base_url(); ?>Login/logout" class="btn btn-primary btn-lg btn-block">Logout</a>
			</div>
		</div>
	</div>		
	</body>
</html>