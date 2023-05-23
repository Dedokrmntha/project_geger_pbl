<div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">HALAMAN</h6>
                        <h1 class="text-white"><span class="text-primary">LOGIN#</span>ADMIN</h1>
                    </div>
                    <p class="text-white"></p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Masukkan Username Anda!</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Masukkan Password Anda!</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Klik Login Untuk Masuk Kehalaman Website!</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Klik Register Jika Belum Mempunyai Akun!</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Login</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                        <?php 
				    if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
 
				<?php 
				if($this->session->flashdata('success_register') !='')
				{
					echo '<div class="alert alert-info" role="alert">';
					echo $this->session->flashdata('success_register');
					echo '</div>';
				}
				?>
                    <form method="post" action="<?php echo base_url(); ?>Login/proses">
					<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
					</div>
					<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				        </form>
                       
                        </body>
                    </div>
                </div>
            </div>
        </div>
    </div>