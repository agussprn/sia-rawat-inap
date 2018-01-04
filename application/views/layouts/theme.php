<!doctype html>

<html lang="en" class="no-js">
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title> Sistem Informasi Administrasi Rawat Inap </title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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
	
	<!-- DataTables CSS -->
    <link href="<?php echo base_url();?>style/css/plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>style/css/plugins/dataTables.tableTools.css" rel="stylesheet">
	<script src="<?php echo base_url();?>style/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>style/js/dataTables/dataTables.bootstrap.js"></script>
	<!--HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	
	</style>
</head>
<body>

<div class="no-padding-top no-padding-bottom text-maroon print-hidden" 
style="background:#fff url('<?php echo base_url();?>style/img/logo.png') no-repeat;background-size: 100% 100%;height:90px;">
<div class="col-md-11" style="padding:0;display:block !important;float:none !important; margin:0px auto !important;">

</div>
</div>	
<nav class="navbar flat bg-menu print-hidden" role="navigation">
<div class="navbar-left bg-menu">
	<ul class="nav navbar-nav custom-nav-top-1 bg-menu">
			<li><a href="<?=base_url();?>" class="<?=$home;?>"><i class="fa fa-home  fa-fw"></i> HOME </a></li>
			<?php
			if($_SESSION['jabatan']=="ADMIN"){
			?>
			<li><a href="<?=base_url();?>petugas" class="<?=$petugas;?>"><i class="fa fa-users  fa-fw"></i> DATA PETUGAS</a></li>
			<?php
			}
			?>
			
			<li><a href="<?=base_url();?>pasien" class="<?=$pasien;?>"><i class="fa fa-user  fa-fw"></i> DATA PASIEN</a></li>
            <li><a href="<?=base_url();?>dokter" class="<?=$dokter;?>"><i class="fa fa-user-md  fa-fw"></i> DATA DOKTER</a></li>
			<li><a href="<?=base_url();?>ruang" class="<?=$ruang;?>"><i class="fa fa-list  fa-fw"></i> DATA RUANG</a></li>
			<li><a href="<?=base_url();?>inap" class="<?=$inap;?>"><i class="fa fa-wheelchair  fa-fw"></i> RAWAT INAP</a></li>
			<li><a href="<?=base_url();?>bayar" class="<?=$bayar;?>"><i class="fa fa-credit-card  fa-fw"></i> BAYAR</a></li>
	
		
	
		
	
    </ul>
</div>
<div class="navbar-right">
	<ul class="nav navbar-nav custom-nav-top-1">
			<li><a href="<?=base_url();?>gantipass/edit/<?=$_SESSION['id_petugas'];?>" class="<?=$gantipass;?>"><i class="fa fa-users  fa-fw"></i> GANTI PASSWORD</a></li>
			<li><a href="<?=base_url();?>login/keluar"><i class="fa fa-sign-out fa-fw"></i> KELUAR</a>
    </ul>
</div>
</nav>
 


	
	

<div class="clearfix"></div>

<section class="content no-padding-top no-padding-bottom no-border ganti_bg" style="">
<div class="col-md-11" style="padding:0;display:block !important;float:none !important; margin:10px auto !important;">
<div class="box box-primary flat no-margin no-padding no-border">
<div class="box-body">	
	<?php
	echo $template['body'];
	?>
</div>
</div>
</div>	
</section>		
		
	



	
</body>
    
	
	
	
	
	
	
	
	<script type="text/javascript">
				
		$(function(){
		$('a.menu-klik').click(function(){
		$('a.menu-klik').removeClass("active");
		$(this).addClass("active");
		});
		});
		
		$(document).ready(function(){
		var h=$('.samping-kanan').height();
		if (h > 300){
		$('.menu-samping').height(h);
		}
		});
	</script>
	
<script>
$(function(){
$(".print").click(function(){
var c=confirm("-Untuk Kembali tekan tombol 'Esc' \n-Untuk print dokumen ini klik 'CTRL+P'\n-Lanjutkan ?");
if (c==true){
$(".print-hidden").hide();
$(".kop").show();
$(".ganti_bg").addClass("bg-gray");

}
return false;
});
// kemabali ke halaman normal
$(document).keyup(function(e){
if (e.keyCode==27){
$(".print-hidden").show();
$(".kop").hide();
$(".ganti_bg").removeClass("bg-gray");

}
});
// EXPORT EXCEL =========================================================================
$(".export").click(function () {
$("#tabelExport").btechco_excelexport({
 containerid: "tabelExport",
 datatype: $datatype.Table
});
});
});

$(document).ready(function() {
		$('#table').dataTable();
});
</script>

</html>