<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="purple" data-image="<?php echo base_url('assets/admin/img/sidebar-1.jpg');?>">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="" class="simple-text">
					Admin Buku Tamu 
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li>
	                    <a href="<?php echo base_url('operator/beranda');?>">
	                        <i class="material-icons">dashboard</i>
	                        <p>Beranda</p>
	                    </a>
	                </li>
	               	<li>
	                    <a href="<?php echo base_url('operator/tampilSeluruh');?>">
	                        <i class="material-icons">content_paste</i>
	                        <p>Daftar Pengunjung</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="<?=base_url('login/logout');?>">
	                        <i class="material-icons">exit_to_app</i>
	                        <p>Log Out</p>
	                    </a>
	                </li>
	               	
	            </ul>
	    	</div>
	    </div>