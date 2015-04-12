            <?php 
            if($this->session->userdata('category') == "")
            {
                ?>
            <ul class="nav">
                <li><a href="<?php echo base_url();?>welcome">Home</a></li>
                <li><a class="hsubs" href="about.html">About</a></li>
                <li><a class="hsubs" href="service.html">Services</a>
                    <ul class="subs">
                        <li><a href="service.html">Service 01</a></li>
                        <li><a href="service.html">Service 02</a></li>
                        <li><a href="service.html">Service 03</a></li>
                        <li><a href="service.html">Service 04</a></li>
                     </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="<?php echo base_url();?>user_management/login">Login</a></li>
                <li><a href="<?php echo base_url();?>user_management/register">Register</a></li>
                <div id="lavalamp"></div>
            </ul>
            <?php
            }
            else if($this->session->userdata('category') == "user")
            {
                ?>
            
            <ul class="nav">
                <li><a href="<?php echo base_url();?>welcome">Home</a></li>
                <li><a class="hsubs" href="about.html">About</a></li>
                <li><a class="hsubs" href="service.html">Services</a>
                    <ul class="subs">
                        <li><a href="service.html">Service 01</a></li>
                        <li><a href="service.html">Service 02</a></li>
                        <li><a href="service.html">Service 03</a></li>
                        <li><a href="service.html">Service 04</a></li>
                     </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
                <li><a class="hsubs" href="#">My Account(Hi, <?php echo $this->session->userdata('username');?>)</a>
                    <ul class="subs">
                        <li><a href="service.html">Booking</a></li>
                        <li><a href="service.html">History</a></li>
                     </ul>
                </li>
                <li><a href="<?php echo base_url();?>user_management/logout">Logout</a></li>                
                <div id="lavalamp"></div>
            </ul>
            <?php
            }
            else if($this->session->userdata('category') == "admin")
            {
                ?>
            
            <ul class="nav">
                <!-- <li><a href="<?php echo base_url();?>welcome">Home</a></li> -->
                <li><a class="hsubs" href="about.html">Service management</a></li>
                <!-- <li><a class="hsubs" href="service.html">Services</a>
                    <ul class="subs">
                        <li><a href="service.html">Service 01</a></li>
                        <li><a href="service.html">Service 02</a></li>
                        <li><a href="service.html">Service 03</a></li>
                        <li><a href="service.html">Service 04</a></li>
                     </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
                <li><a class="hsubs" href="service.html">My Account</a>
                    <ul class="subs">
                        <li><a href="service.html">Service 01</a></li>
                        <li><a href="service.html">Service 02</a></li>
                        <li><a href="service.html">Service 03</a></li>
                        <li><a href="service.html">Service 04</a></li>
                     </ul>
                </li> -->
                <li><a href="<?php echo base_url();?>user_management/logout">Logout</a></li>                
                <div id="lavalamp"></div>
            </ul>
          <?php
         }
      ?>