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
				<form class="form" method="POST" action="<?php echo base_url();?>Welcome/cariPengunjung">
                                <div class="header header-success text-center">
                                    <h4>LOGIN</h4>
                                    
                                </div>
                        
                                <br>
                                
                                <div class="content">
                                    <div class="form-group label-floating">
                                        <input type="text" name="noKtp" id="noKtp" placeholder="NO KTP" size="18" class="form-control" required>
                                    </div>

                                    <!-- If you want to add a checkbox to this form, uncomment this code

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes" checked>
                                            Subscribe to newsletter
                                        </label>
                                    </div> -->
                                </div>
                                <div class="footer text-center">
                                    <br>
                                    <br>
                                    <input type="submit" class="btn btn-success  btn-lg" value="CARI">
                                    <br>
                                    
                                    <br>
                                    <br>
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
