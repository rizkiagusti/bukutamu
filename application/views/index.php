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
				<form id="register" >
					<div class="col-sm-12" >
					    	<label >Tujuan Bidang :</label>
							<select class="form-control" name="idBidang" id="idBidang" required>
								<option value="" selected="true" disabled="true">Pilih data</option>  
									<?php foreach ($data as $bidang) {
													?>
								<option value="<?php echo $bidang->idBidang;?>"><?php echo $bidang->namaBidang;?></option>
									<?php } ?>
							</select>

							<div class="form-group label-floating">
								<label class="control-label">No KTP </label>
								<input type="text" name="noKtp" id="noKtp" value="<?= $noKtp?>" class="form-control" readonly required>
							</div>

					        <div class="form-group label-floating">
								<label class="control-label">Nama </label>
								<input type="text" name="nama" id="nama" class="form-control" required>
							</div>


							<div class="form-group label-floating">
								<label class="control-label">Institiusi </label>
								<input type="text" name="institusi" id="institusi" class="form-control" required>
							</div>
							
							<div class="form-group label-floating">
								<label class="control-label">Tujuan</label>
								<textarea name="tujuan" id="tujuan" class="form-control" rows="5" required> </textarea>
							</div>
							
							<div class="form-group label-floating">
								<center>
                            		<div id="my_camera">
								</center>	
							</div>

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


	<script src="<?php echo base_url(); ?>assets/utama/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/utama/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/utama/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="<?php echo base_url(); ?>assets/utama/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="<?php echo base_url(); ?>assets/utama/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="<?php echo base_url(); ?>assets/utama/js/material-kit.js" type="text/javascript"></script>
	
	<script src="<?php echo base_url();?>assets/webcamjs/webcam.min.js"></script>
    <script src="<?php echo base_url();?>assets/webcamjs/webcam.min.js"></script>
		<script language="JavaScript">
			Webcam.set({
				width: 320,
				height: 240,
				image_format: 'jpeg',
				jpeg_quality: 90
			});
			Webcam.attach( '#my_camera' );
		</script>
		<!-- Code to handle taking the snapshot and displaying it locally -->
		<script type="text/javascript">
			$('#register').on('submit', function (event) {
				event.preventDefault();
				var image = '';
				var idBidang = $('#idBidang').val();
				var nama = $('#nama').val();
				var noKtp = $('#noKtp').val();
				var institusi = $('#institusi').val();
				var tujuan = $('#tujuan').val();

				Webcam.snap( function(data_uri) {
					image = data_uri;
				});
				$.ajax({
					url: '<?php echo base_url();?>Welcome/tambahPengunjung',
					type: 'POST',
					dataType: 'json',
					data: {idBidang: idBidang, nama: nama, noKtp: noKtp, institusi: institusi, tujuan: tujuan, image:image},
				})
				.done(function(data) {
					if (data > 0) {
						alert('insert data sukses');
						$('#register')[0].reset();
					}
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
					window.location = "<?php echo base_url();?>Welcome/index";
				});
				
				
			});
			
		</script>
		


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
