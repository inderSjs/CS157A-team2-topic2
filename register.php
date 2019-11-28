
<?php include ("includes/header.php")?>
<?php include ("includes/nav.php")?>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php validate_user_registration_first();?>						
		</div>
	</div>
    	<div class="row">
			<div class="w-100 p-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="login.php" class="active" id="">LOG IN</a>
							</div>
							<div class="col-xs-6">
								<a href="register.php" class="active" id="">REGISTER NEW PATIENT</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="panel-body">
								<form id="register-form" method="post" role="form" >
									<!--First Table-->
									<div class="form-group now">
										<label class="col-sm-2 col-form-label"> THC#: </label>
										<div class="col-sm-10">
										<input type="number" name = "thc_no" class="form-control" id="inputPassword" placeholder="THC#" value =<?php 

										$sql = "SELECT thc_no
												FROM PATIENT
												ORDER BY thc_no DESC LIMIT 1";
										$result =query($sql);
										$row = fetch_array($result);
										echo $row['thc_no'];?>>
									    </div>
									</div>

									<div class="form-group now">
										<label class="col-sm-2 col-form-label"> Current Date </label>
										<div class="col-sm-10">
										<input type="text" name = "current_day" class="form-control" id="inputPassword" value ='<?php echo date('Y-m-d');?>'>
									    </div>
									</div>

									<div class="form-group now">
										<label class="col-sm-2 col-form-label"> First Name </label>
										<div class="col-sm-10">
										<input type="text" name = "first_name" class="form-control" id="inputPassword" placeholder ="First Name">
									    </div>
									</div>

									<div class="form-group now">
										<label class="col-sm-2 col-form-label"> Middle Name </label>
										<div class="col-sm-10">
										<input type="text" name = "middle_name" class="form-control" id="inputPassword" placeholder ="Middle Name">
									    </div>
									</div>

									<div class="form-group now">
										<label class="col-sm-2 col-form-label"> Last Name </label>
										<div class="col-sm-10">
										<input type="text" name = "last_name" class="form-control" id="inputPassword" placeholder ="Last Name">
									    </div>
									</div>

									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-3 ">
												<button type="submit" name="register-submit" id="register-submit" tabindex="1" class="form-control btn btn-register btn-block" value="Register">Register</button>
											</div>

											<div class="col-sm-3 ">
												<a href = "demographics.php">
												<button type ="button" class="form-control btn btn-register btn-block">Add Demographics</button>
												</a>		
											</div>

											<div class="col-sm-3 ">
												<a href = "interview.php">
												<button type ="button" class="form-control btn btn-register btn-block">New Visit</button>
												</a>
											</div>

											<div class="col-sm-3 ">
												<input type="reset" name="register-submit" id="register-submit" tabindex="1" class="form-control btn btn-register" value="Cancel">
											</div>

										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php include ("includes/footer.php")?>