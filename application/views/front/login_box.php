<div class="login-box card">
		<div class="card-body">
			<?php echo validation_errors() ?>
			<?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');} ?>
			<?php echo form_open($action) ?>
				<h3 class="box-title m-b-20">Sign In</h3>
				<div class="form-group ">
					<div class="col-xs-12">
						<input id="username" name="username" class="form-control" type="text" required="" placeholder="Username"> </div>
				</div>
				<div class="form-group">
					<div class="col-xs-12">
						<input id="password" name="password" class="form-control" type="password" required="" placeholder="Password"> </div>
				</div>
				<div class="form-group row">
					<div class="col-md-12 font-14">
						<div class="checkbox checkbox-primary pull-left p-t-0">
							<input id="checkbox-signup" type="checkbox">
							<label for="checkbox-signup"> Remember me </label>
						</div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><!-- <i class="fa fa-lock m-r-5"></i> --> Forgot pwd?</a> </div>
				</div>
				<div class="form-group text-center m-t-20">
					<div class="col-xs-12">
						<button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
					</div>
				</div>
				<div class="form-group m-b-0">
					<div class="col-sm-12 text-center">
						<div>Don't have an account? <a href="pages-register.html" class="text-info m-l-5"><b>Sign Up</b></a></div>
					</div>
				</div>
			<?php echo form_close() ?>
			
		</div>
	</div>