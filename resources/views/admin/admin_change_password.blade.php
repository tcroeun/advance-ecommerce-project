@extends('admin.admin_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="content-wrapper">
	<div class="container-full"> 
		<!-- Main content -->
		<section class="content">

		 	<!-- Basic Forms -->
		  	<div class="box">
				<div class="box-header with-border">
					<h4 class="box-title">Admin Change Password</h4>			  
				</div>
			<!-- /.box-header -->
			<div class="box-body">
			  	<div class="row">
					<div class="col">
						<form method="POST" action="{{ route('update.change.password') }}" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="col-12">

                                    <div class="form-group">
                                        <h5>Current Pasword<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="password" name="oldpassword" id="current_password" class="form-control" required="">
                                        </div>
                                    </div>																									
								
                                
                                    <div class="form-group">
                                        <h5>New Password<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="password" name="password" id="password" class="form-control" required="">
                                        </div>
                                    </div>																									
                                
                                
                                    <div class="form-group">
                                        <h5>Confirm Pasword<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required="">
                                        </div>
                                    </div>																									
										
                                    <div class="text-xs-right">
								        <button type="submit" class="btn btn-rounded btn-info">Submit</button>
							        </div>

							    </div>	
                            </div>							
						</form>
					</div>
					<!-- /.col -->
			  	</div>
			  	<!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
	</div>
</div>
@endsection