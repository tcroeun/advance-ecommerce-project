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
					<h4 class="box-title">admin Profile Edit</h4>			  
				</div>
			<!-- /.box-header -->
			<div class="box-body">
			  	<div class="row">
					<div class="col">
						<form method="POST" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="col-12">
									<!-- Row 1 Have 2 Columns-->
									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<h5>admin User Name<span class="text-danger">*</span></h5>
												<div class="controls">
													<input type="text" name="name" class="form-control" required="" value="{{ $editData->name }}">
												</div>
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<h5>admin Email<span class="text-danger">*</span></h5>
												<div class="controls">
													<input type="email" name="email" class="form-control" required="" value="{{ $editData->email }}">
												</div>
											</div>
										</div>
									</div> 
									<!-- End Row 1 -->
									<!-- Row 2 Have 2 Columns -->
									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<h5>Profile Image<span class="text-danger">*</span></h5>
												<div class="controls">
													<input type="file" name="profile_photo_path" class="form-control" required="" id="image">
												</div>
											</div>	
										</div>
										<div class="col-6">
											<img src="{{ (!empty($editData->profile_photo_path)) ? url('upload/admin_images/'.$editData->profile_photo_path) : url('upload/no_image.jpg') }}" style="width:100px; height:100px;" id="showImage">
										</div>
									</div>
									<!-- End Row 2 -->																	
								</div>								
							</div>							
							<div class="text-xs-right">
								<button type="submit" class="btn btn-rounded btn-info">Submit</button>
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
<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>
@endsection