<!doctype html>
<html lang="en">
<head>
	
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/utama/img/faicon.png">
	<title>BUKU TAMU</title>
	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="<?php echo base_url(); ?>assets/utama/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/utama/css/material-kit.css" rel="stylesheet"/>
	<link href="<?php echo base_url(); ?>assets/utama/css/demo.css" rel="stylesheet" />

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

</head>
<body class="components-page">
<div class="wrapper">
	<div class="header"  >
	<div class="container">
		<div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel"><center><img src="<?php echo base_url(); ?>assets/utama/img/Logo-Bapenda.png" width="200px" height="100px"></h4></center>
	      </div>
	      <div class="modal-body">
	        <div class="title">				          
				<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>Welcome/tambahPengunjung2">
					<div class="col-sm-12" >
					    	
						<?php 
	                    	foreach ($dapat as $akses) {
	                    ?>
							<div class="form-group label-floating">
								<label class="control-label">No KTP </label>
								<input type="text" name="noKtp" id="noKtp" value="<?php echo $akses->noKtp ?>" class="form-control" readonly required>
							</div>

							<div class="form-group label-floating">
								<label class="control-label">Nama </label>
								<input type="text" name="nama" id="nama" value="<?php echo $akses->nama ?>" class="form-control" readonly required>
							</div>

							<label >Tujuan Bidang :</label>
							<select class="form-control" name="idBidang" id="idBidang" required>
								<option value="" selected="true" disabled="true">Pilih data</option>  
									<?php foreach ($data as $bidang) {
													?>
								<option value="<?php echo $bidang->idBidang;?>"><?php echo $bidang->namaBidang;?></option>
									<?php } ?>
							</select>

							<div class="form-group label-floating">
								<label class="control-label">Institiusi </label>
								<input type="text" name="institusi" id="institusi" class="form-control" required>
							</div>
							
							<div class="form-group label-floating">
								<label class="control-label">Tujuan</label>
								<textarea name="tujuan" id="tujuan" class="form-control" rows="5" required> </textarea>
							</div>

						<?php } ?>

							
					</div>
					<div class="col-sm-12">
					
						<center>
							<input type="submit" value="SIMPAN" class="btn btn-success">
						</center>
					
					
					</div>
				</form>

	      </div>
	      <div class="modal-footer">
	      </div>
	    </div>		
	</div>
	</div>

	


    <footer class="footer footer-transparent">
        <div class="container">           
            <div class="copyright pull-right">
                &copy; 2018, Developer Web RIZKI.
            </div>
        </div>
    </footer>
</div>
</body>
</html>
