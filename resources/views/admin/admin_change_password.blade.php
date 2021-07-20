@extends('admin.admin_master')

@section('admin')


<div class="container-full">
	<!-- Main content -->
	<section class="content">
		<!-- Basic Forms -->
		<div class="box">
			<div class="box-header with-border">
			  	<h4 class="box-title">Admin Şifre Değiştirme</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="row">
					<div class="col">
						<form method="POST" action="{{ route('update.change.password') }}" >
							@csrf
						  	<div class="row">
								<div class="col-12">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<h5>Mevcut Şifre <span class="text-danger">*</span></h5>
												<div class="controls">
													<input type="password" id="current_password" name="oldpassword" class="form-control" required=""> 
												</div>
											</div>		
										</div>  <!-- end col-md-6 -->
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<h5>Yeni Şifre <span class="text-danger">*</span></h5>
												<div class="controls">
													<input type="password" id="password" name="password" class="form-control" required=""> 
												</div>
											</div>		
										</div>  <!-- end col-md-6 -->
									</div>
									<div class="row">

										<div class="col-md-6">
											<div class="form-group">
												<h5>Yeni Şifre Onay<span class="text-danger">*</span></h5>
												<div class="controls">
													<input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required=""> 
												</div>
											</div>		
										</div>  <!-- end col-md-6 -->
									</div> <!-- end row -->
									
								</div>
						  	</div>
						  	<div class="row">
							<div class="text-xs-right mt-5 col-md-6">
								<input type="submit" class="btn btn-primary rounded-0 btn-block" value="Kaydet">
							</div>
							</div
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



@endsection