<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard - Login</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?= base_url('assets/login/css/style.css')?>">
	
	<link rel="stylesheet" href="<?= base_url ('assets/extensions/toastify-js/src/toastify.css')?>">
	</head>

	

	<body class="img js-fullheight" style="background-color: #1e1e2d ;">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
        <img src="data:image/jpeg;base64,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" class="rounded-circle" style="width: 150px;"
  alt="Avatar" />
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center font-weight-bold">LOGIN</h3>

				  <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success">
                <a href="#" class="close" data-bs-dismiss="alert">&times;</a>
                <strong><i class="fa fa-circle" aria-hidden="true"></i></strong> <?= $this->session->flashdata('success'); ?>
            </div>
			<?php } ?>

			<?php if ($this->session->flashdata('pesan')) { ?>
            <div class="alert alert-danger">
                <a href="#" class="close" data-bs-dismiss="alert">&times;</a>
                <strong><i class="fa fa-circle" aria-hidden="true"></i></strong> <?= $this->session->flashdata('pesan'); ?>
            </div>

        <?php } ?>
              <form method="POST" action="<?= base_url('login') ?>" class="needs-validation">
		      	<form action="#" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="username"  placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" name="password"  placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
				<br>
	            <div class="form-group">
	            	<button type="submit" id="top-center" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
					<div class="form-group d-md-flex">
						<div class="w-50">
									</div>
									<div class="w-50 text-md-right">
										<a href="" data-toggle="modal" data-target="#signup" style="color: #fff">Register</a>
									</div>
					</div>
	          </form>
	          <!-- <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p> -->
	          <div class="social d-flex text-center">
	          	<!-- <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a> -->
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<!-- Modal Sign Up -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="POST" action="<?= base_url('register/signup') ?>" enctype="multipart/form-data">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Sign Up</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="col">
                        <div class="px-3">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control rounded-0 text-black-50" name="nama" placeholder="John Doe" required>
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control rounded-0" name="username" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" class="form-control rounded-0" name="password" placeholder="Password">
                            </div>
							<div class="form-group">
                            <label>Level</label>
                            <select class="form-control rounded-0 bg-dark" name="level">
                                <option value=""> -- Pilih Level User -- </option>
                                <option value="admin"> Admin </option>
                                <option value="alumni"> Siswa </option>
								<option value="perusahaan"> Perusahaan </option>
								<option value="guru"> Guru </option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

	<script src="<?= base_url('/assets/login/js/jquery.min.js')?>"></script>
  <script src="<?= base_url('/assets/login/js/popper.js')?>"></script>
  <script src="<?= base_url('/assets/login/js/bootstrap.min.js')?>"></script>
  <script src="<?= base_url('/assets/login/js/main.js')?>"></script>
 

	</body>
</html>

