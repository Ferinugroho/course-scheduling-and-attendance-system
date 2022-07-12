<?php 
session_start();
error_reporting(E_ALL);
include_once('config/config.php');
include_once('lib/inc.php');
include_once('lib/Core.php');
$apps = new Core();
?>
<html>
	
<head>
	<meta content="" name="description" />
	 <script src="<?php echo root; ?>assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="<?php echo root; ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo root; ?>assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="<?php echo root; ?>assets/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo root; ?>assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo root; ?>assets/plugins/flot/jquery.flot.time.js"></script>
     <script  src="<?php echo root; ?>assets/plugins/flot/jquery.flot.stack.js"></script>
    <script src="<?php echo root; ?>assets/js/for_index.js"></script>
    <script src="<?php echo root; ?>assets/js/for_index.js"/></script>
    <link rel="stylesheet" href="<?php echo root; ?>assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo root; ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo root; ?>assets/css/theme.css" />
    <link rel="stylesheet" href="<?php echo root; ?>assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="<?php echo root; ?>assets/plugins/Font-Awesome/css/font-awesome.css" />
    <link href="<?php echo root; ?>assets/css/layout2.css" rel="stylesheet" />
    <link href="<?php echo root; ?>assets/plugins/flot/examples/examples.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo root; ?>assets/plugins/timeline/timeline.css" />
	<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.rightt{float:right ; margin-right:100px; padding:4px}
-->
    </style>
    <link href="assets/css/form.css" rel="stylesheet" type="text/css">
</head>  
<body class="padTop53 " >
    <div id="top">
		<nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 0px; padding-left: 0px ;">
		<a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle"><i class="icon-align-justify"></i></a>
			<header class="navbar-header">
                <a href="<?php echo root; ?>index.php" class="navbar-brand">
					<img src="<?php echo root; ?>assets/img/logo.png" alt="" class="img img-responsive"  />
				</a>
			</header>
		</nav>

	</div>
	<div id="left" >
	  <ul id="menu" class="collapse">                
            <li class="panel active">
                <a href="../../index.html" >
                    <i class="icon-table"></i> 
					<?php if(isset($_SESSION['log']))
					{?>
					<?php
					echo $_SESSION['username'];  
					}
					else
					{
					echo "Politeknik Negeri Sriwijaya";
					 }?>   
                </a>                   
            </li>
            <li class="panel ">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
					<i class="icon-tasks"> </i> Profil <span class="pull-right">
                    <i class="icon-angle-left"></i></span></a>
						<ul class="collapse" id="component-nav">
							<li class=""><a href="<?php echo set_link('content/sejarah'); ?>">sejarah</a></label>
							<li class=""><a href="<?php echo set_link('content/visi_misi'); ?>"> Visi &amp; Misi</a></li>
							<li class=""><a href="<?php echo set_link('content/struktur'); ?>"> Struktur </a></li>
						</ul>
            </li>
            <li class="panel ">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                   <span class="pull-right"><i class="icon-angle-left"></i></span>Data</a>
					<ul class="collapse" id="form-nav">
                        <li class=""><a href="<?php echo set_link('content/data_dosen'); ?>"><i class="icon-angle-right"></i> Dosen</a></li>
            			<li class=""><a href="<?php echo set_link('content/data_mhs'); ?>"><i class="icon-angle-right"></i> Mahasiswa</a></li>
                        <li class=""><a href="<?php echo set_link('content/data_matkul'); ?>"><i class="icon-angle-right"></i> Mata Kuliah</a></li>
                   </ul>
            </li>
			<li class="panel">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                    Pages<span class="pull-right"><i class="icon-angle-left"></i></span>
                </a>
                    <ul class="collapse" id="pagesr-nav">
                        <li><a href="<?php echo set_link('content/Kelas'); ?>"><i class="icon-angle-right"></i> Kelas</a></li>
                        <li><a href="<?php echo set_link('content/out_jadwal'); ?>"><i class="icon-angle-right"></i>Jadwal</a></li>
                    </ul>
			</li>
            <li class="panel">
				<?php if(isset($_SESSION['log']))
{
?>
<li class="panel" id="pagesr-nav"><li><a href="<?php echo set_link('logout'); ?>">Log Out</a></li>
</li>

<?php
}
else
{
	?>
<li class="panel" id="pagesr-nav"><li><a href="<?php echo set_link('content/login'); ?>">Log In</a></li>
</li>
					 
<?php } ?>					 
	  </ul>
</div>
<div id="content">
      <div class="inner" style="min-height: 700px;">
            <div class="row">
		</div>
                  
			    <?php $apps->modul($mysqli,$config,$apps);?>
			 
  </div>                
</div>

<?php
if (isset($_SESSION['log']))
{
if($_SESSION['level']== "admin_jur")
{ ?>
<div id="left" >
	  <ul id="menu" class="collapse">                
            <li class=""><center><p class="BODYTABLE ">FORM INPUT</p></center></li>
			<li class=""><a href="<?php echo set_link('content/in_mhs'); ?>">Mahasiswa</a>
    		<li class=""><a href="<?php echo set_link('content/in_matkul'); ?>">Mata Kuliah</a>           
    		<li class=""><a href="<?php echo set_link('content/in_dosen'); ?>">Dosen</a>           
    		<li class=""><a href="<?php echo set_link('content/out_absen'); ?>">Presensi</a>
  	</ul>
</div>
<?php 
}
	else if($_SESSION['level']== "sekjur")
		{
		?>
		<div id="left" >
		  <center>
	        <p class="BODYTABLE">FORM INPUT</p>
		  </center>
		  <ul id="menu" class="collapse"><li class=""><a href="<?php echo set_link('content/jadwal'); ?>">Proses Jadwal</a>
			<li class=""><a href="<?php echo set_link('content/post_jadwal'); ?>">Post Jadwal </a></li>
			<li class=""><a href="<?php echo set_link('content/f_jadwal'); ?>">Jadwal </a></li>
			<li class=""><a href="<?php echo set_link('content/end_jadwal'); ?>">End Jadwal </a></li>
			<li class=""><a href="<?php echo set_link('content/t_jadwal'); ?>">Finish Jadwal </a></li>
  		</ul>
</div>
		<?php } 
		else if($_SESSION['level']== "dosen")
		 {
		 ?>
		<div id="left" >
		  <center>
	       <p class="BODYTABLE">FORM INPUT</p>
		  </center>
		  <ul id="menu" class="collapse"><li class=""><a href="<?php echo set_link('content/absen'); ?>">Presensi</a>
	      <li class=""><a href="<?php echo set_link('logout'); ?>">Log Out</a></li>
  		</ul>
</div>
		 <?php }  } ?>
</body>
</html>
