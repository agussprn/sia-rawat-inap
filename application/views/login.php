<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SISTEM INFORMASI 
ADMINISTRASI RAWAT INAP | LOGIN</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/css/bootstrap.css" media="all">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/font/css/font-awesome.css" media="all">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/css/flexslider.css" media="all">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/css/styles.css" media="all">
		<!-- <link rel="stylesheet" type="text/css" href="css/print.css" media="print"> -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/css/tooltipster.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/css/pagination.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/css/jquery.ui.all.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/css/jquery-ui-1.10.4.custom.css" />
		<!-- javascript jquery -->
		<script type="text/javascript" src="<?php echo base_url();?>style/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>style/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>style/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>style/js/jquery-ui-1.10.4.custom.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>style/js/jquery-ui-1.10.4.custom.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>style/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>style/js/script.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url();?>style/js/jquery.base64.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>style/js/jquery.btechco.excelexport.js"></script>
			<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
		<style>
		html,body {
		 overflow-x: hidden!important;
		  font-family: 'Arial';
		  -webkit-font-smoothing: antialiased;
		  min-height: 100%;
		  background:#000;
		  
		}
		</style>
    </head>
    <body>

        <div class="form-box flat bg-white"  style="border:1px solid #EEE !important">
            <div class="header bg-green"><b><i class="fa fa-lock fa-fw"></i>USER LOGIN</b></div>
            <form action="<?=base_url();?>login/masuk" method="post">
                <div class="body  bg-avocado">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="USERNAME" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="PASSWORD" required/>
                    </div>          
                    <?php 
					echo $salah;
					?>
                </div>
                <div class="footer bg-green flat" style="border-top:3px solid #008447 !important">                                                               
                    <button type="submit" class="btn btn-block flat no-border hover">LOGIN</button>  
                    
                    <!--<p><a href="#">I forgot my password</a></p>
                    
                    <a href="register.html" class="text-center">Register a new membership</a>-->
                </div>
            </form>

           <div class="margin text-center">
                <span>SISTEM INFORMASI <BR>ADMINISTRASI RAWAT INAP <i class="fa fa-copyright fa-fw"></i> 2015</span>
                 
                 <!--<button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>-->

            </div>
			</div>
        </div>


       
        <!-- Bootstrap -->
        <script src="<?=base_url();?>style/js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>