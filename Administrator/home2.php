<?php include 'db_connect.php' ?>

<div class="containe-fluid">

	<div class="row">
		<div class="col-lg-12">
			
		</div>
	</div>

	<div class="row mt-3 ml-3 mr-3">
			<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
				<?php echo "Welcome back ".($_SESSION['login_type'] == 3 ? "Dr. ".$_SESSION['login_name'].','.$_SESSION['login_name_pref'] : $_SESSION['login_name'])."!"  ?>
									
				</div>
				<hr>
				<div class="row ml-2 mr-2">
				<div class="col-md-3">
                        <div class="card bg-primary text-white mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-3">
                                        <div class="text-white-75 small">Welcome To Your Dashboard</div>
                                        <div class="text-lg font-weight-bold">	
											Savings 1500000	
                                    	</div>
                                    </div>
                                    <i class="fa fa-calendar"></i>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                
				</div>
			</div>
			
		</div>
		</div>
	</div>

</div>