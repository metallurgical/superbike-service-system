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
.panel-heading {
    padding: 5px 15px;
}

.panel-footer {
	padding: 1px 15px;
	color: #A0A0A0;
}

.profile-img {
	width: 96px;
	height: 96px;
	margin: 0 auto 10px;
	display: block;
	-moz-border-radius: 50%;
	-webkit-border-radius: 50%;
	border-radius: 50%;
}
</style>
<div class="wrap">
	<div class="content ser">
		
		
		<div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-12 col-md-11">
			<?php $this->load->view('data_messages');?>
				<div class="panel panel-default">
				  <div class="panel-heading"><h3>Dashboard</h3></div>
				  <div class="panel-body">
				    Welcome admin, please choose menu above to do the operation.
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php $this->load->view('footer');?>

</body>
</html>