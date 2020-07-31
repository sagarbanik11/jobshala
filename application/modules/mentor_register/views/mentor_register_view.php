<div class="container" style="margin-top:20px;">
	<div class="row justify-content-center">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 ">
			<form class="form-horizontal" action="<?= site_url('mentor_register/save') ?>" method="post"><br>
				<fieldset>
					<center><h5>Signup as a Mentor</h5></center>
					<hr>
					<div class="form-group">
						<label for="name" class="cols-sm-2 control-label">Full Name</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<input type="text" class="form-control" name="auth" id="auth" value='1' hidden>
								<input type="text" class="form-control" name="name" id="name" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="cols-sm-2 control-label">Email</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<input type="email" class="form-control" name="email" id="email" required>
							</div>
						</div>
						<?php echo form_error('email', '<div class="error">', '</div>'); ?>
					</div>

					<div class="form-group">
						<label for="username" class="cols-sm-2 control-label">Mobile No</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<input type="number" class="form-control" name="mobile" id="mobile" maxlength="10" minlength="10" 
								onchange="javascript: if(this.value.length==0) document.querySelector('#mobile').style.border='solid 1px red'; else document.querySelector('#country_code').style.borderBottom='solid 1px #9e9e9e'; "
              	oninput=" javascript: if (this.value.length > this.maxLength) this.value=this.value.slice(0, this.maxLength);"
								required>
							</div>
						</div>
						<?php echo form_error('mobile', '<div class="error">', '</div>'); ?>
					</div>
					<div class="form-group">
						<label for="skill" class="cols-sm-2 control-label">Skill</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<select id="skill" name="skill" class="custom-select">
									<?php foreach ($data->result() as $r) { ?>
										<option value="<?= $r->sk_id ?>"><?= $r->skname ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>


					<div class="form-group">
						<label for="password" class="cols-sm-2 control-label">Password</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<input type="password" class="form-control" name="password" id="password" required>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<input type="password" class="form-control" name="confirmpassword" id="confirmpassword" required>
							</div>
						</div>
						<?php echo form_error('confirmpassword', '<div class="error">', '</div>'); ?>
					</div>

					<div class="form-group ">
						<center>
						<button type="submit" onclick="return Validate()" class="btn btn-info">Register</button>

						</center>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
</div>

<style>
	.error {
		color: red;

	}
</style>
<script type="text/javascript">
	function Validate() {
		var password = document.getElementById("password").value;
		var confirmPassword = document.getElementById("confirmpassword").value;
		if (password != confirmPassword) {
			document.getElementById('confirmpassword').style.borderColor = "red";
			alert("Password do not match.");

			return false;
		}
	}
</script>