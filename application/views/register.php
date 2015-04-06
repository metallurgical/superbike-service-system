<!DOCTYPE HTML>
<html>
<head>
<?php $this->load->view('head_css_js');?>
</head>
<body>
<div class="header-bg">
<div class="wrap">
<div class="header">
	<?php $this->load->view('logo');?>
	<div class="hdr-nav">
	<?php $this->load->view('menu_main');?>
  	</div>
	<div class="clear"></div>
</div>
</div>
</div>
<style type="text/css">
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
</style>
<div class="wrap">
	<div class="content ser">
		<?php $this->load->view('data_messages');?>
		
		<div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" action="" method="POST">
			<h2><span class="label label-primary">Please Sign Up It's free and always will be.</span></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="user_username" id="user_username" class="form-control input-lg" placeholder="Username" tabindex="1" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="user_phone" id="user_phone" class="form-control input-lg" placeholder="Phone" tabindex="2" required>
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="user_name" id="user_name" class="form-control input-lg" placeholder="Your Name" tabindex="3" required>
			</div>
			<div class="form-group">
				<input type="text" name="user_address" id="user_address" class="form-control input-lg" placeholder="Address" tabindex="3" required>
			</div>
			<div class="form-group">
				<input type="email" name="user_email" id="user_email" class="form-control input-lg" placeholder="Email Address" tabindex="4" required>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="user_password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6" required>
					</div>
				</div>
			</div>
			<div class="row">
				
				<div class="col-xs-8 col-sm-9 col-md-9">
					 By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site.
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6">
				<input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7" name="submit">
				</div>
				<div class="col-xs-12 col-md-6"><a href="<?php echo base_url();?>user_management/login" class="btn btn-success btn-block btn-lg">Sign In</a></div>
			</div>
		</form>
	</div>
		</div>
		<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
			</div>
			<div class="modal-body">
				<p>By clicking register button, you are agreed to follow the terms and conditions as following:
					<ul>
						<li> 1) There is no prior notice if changes made onto this site.</li>
						<li> 2) Services and Charges applied will change without prior notice.</li>
						<li> 3) Any figure shown only for promotion.</li>
						<li> 4) We do not responsible for any damage made by users, contact our servic center for more information. <a href="<?php echo base_url();?>welcome/contact_us">Contact Form.</a></li>
				    </ul>
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	</div>
</div>
</div>
<?php $this->load->view('footer');?>

</body>
</html>