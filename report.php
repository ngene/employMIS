<?php
include_once "header.php";
include_once "includes/register.inc.php";
?>
	<div class="row">
		<div class="col-md-12">
			<?php display_message(); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" name="registration_form">
				<h2>Report Crime <small>And Be Rewarded </small></h2>
				<hr class="colorgraph">
				<div class="row">
					
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" name="crime" id="" class="form-control input-lg" placeholder="Crime Incidence" tabindex="4" required>
						</div>
					</div>
				</div>
				<div class="form-group">
					<input type="text" name="location" id="" class="form-control input-lg" placeholder="State The Crime Location" tabindex="3" required>
				</div>
				<div class="form-group">
					<input type="text" name="casual" id="" class="form-control input-lg" placeholder="List Casualties if any" tabindex="4" required>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" name="suspect" id="suspect" class="form-control input-lg" placeholder="Give Names of Suspects if any" tabindex="1" required>
						</div>
					</div>
				
				
				
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" name="phone" id="" class="form-control input-lg" placeholder="Your Phone Number" tabindex="5" required>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" name="address" id="" class="form-control input-lg" placeholder="Your Address" tabindex="6" required>
						</div>
					</div>
				</div>
				
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12 col-md-6"><a href="index.php" class="btn btn-success btn-block btn-lg">Exit</a></div>
					<div class="col-xs-12 col-md-6"><input type="submit" name="report" value="Report Crime" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
				
				</div>
			</form>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
				</div>
				<div class="modal-body">
					<p>Under no nconditions shall we the Administrators of this Crime Tracking SYstem ever disclose the information of our reporters </p>
					<p>In the same way we shall not also malhandle the information given unto us </p>
					<p>Our job here is to ensure that whatever criminal reported to us must be made to face the law and if found indited or involved in thye crime as reported  </p>
					<p>he shall be made to face the full wrath of the law</p>
					<p>....</p>
					<p>.....</p>
					<p>.....</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<script>
	var password = document.getElementById("password")
	, confirm_password = document.getElementById("confirm_password");

	function validatePassword(){
		if(password.value != confirm_password.value) {
			confirm_password.setCustomValidity("Passwords Don't Match");
		} else {
			confirm_password.setCustomValidity('');
		}
	}

	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
</script>
<?php
include_once "footer.php";
?>