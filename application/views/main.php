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
<div class="wrap">
	<div  class="slider">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="<?php echo base_url();?>assets/images/slider1.jpg" data-thumb="<?php echo base_url();?>assets/images/slider1.jpg" alt="" />
                <a href="http://dev7studios.com"> <img src="<?php echo base_url();?>assets/images/slider2.jpg" data-thumb="<?php echo base_url();?>assets/images/slider2.jpg" alt="" title="This is an example of a caption" /> </a>
                <img src="<?php echo base_url();?>assets/images/slider3.jpg" data-thumb="<?php echo base_url();?>assets/images/slider3.jpg" alt="" data-transition="slideInLeft" />
                <img src="<?php echo base_url();?>assets/images/slider4.jpg" data-thumb="<?php echo base_url();?>assets/images/slider4.jpg" alt="" title="#htmlcaption" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>
    
    
    </div>
</div>
<div class="wrap">
<div class="content">
<?php $this->load->view('data_messages');?>
		<div class="section group">

				<div class="grid_1_of_4 images_1_of_4">
					<h3>Welcome</h3>
		            <a href="details.html"><img src="<?php echo base_url();?>assets/images/pic1.jpg" alt="" /></a>
				    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
		          	<div class="btn"><a href="details.html" class="link"><span><span>Read more</span></span></a></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					 <h3>Custom Models</h3>
					 <a href="details.html"><img src="<?php echo base_url();?>assets/images/pic2.jpg" alt=""/></a>
					 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
					 <div class="btn"><a href="details.html" class="link"><span><span>Read more</span></span></a></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					 <h3>Peace of mind</h3>
					 <a href="details.html"><img src="<?php echo base_url();?>assets/images/pic3.jpg" alt=""/></a>
					 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
					 <div class="btn"><a href="details.html" class="link"><span><span>Read more</span></span></a></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><img src="<?php echo base_url();?>assets/images/call.png"> Call Us Now</h4>
					<h5>438 5049 432</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
				</div>
			</div>
			<div class="section group">
				<div class="cont span_2_of_3">
				       <h3>international Models</h3>
				       <a href="details.html"><img src="<?php echo base_url();?>assets/images/pic5.jpg" alt=""/></a> 
				       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt consectetur adipisicing elit, sed do eiusmod tempor incididunt  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
					   <div class="btn"><a href="details.html" class="link"><span><span>Read more</span></span></a></div>	    
				</div>
				
		    </div>
</div>
</div>
<?php $this->load->view('footer');?>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</body>
</html>