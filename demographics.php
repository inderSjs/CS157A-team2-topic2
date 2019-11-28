
<?php include ("includes/header.php")?>
<?php include ("includes/nav.php")?>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
									
		</div>
	</div>
    	<div class="row">
			<div class="w-100 p-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-12">
								<a href="demographics.php" class="active" id="">DEMOGRAPHICS SCREEN</a>
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
										<input type="text" name = "thc_no" class="form-control" id="inputPassword" placeholder="THC#">
									    </div>
									</div>

									<div class="form-group now">
										<label class="col-sm-2 col-form-label"> Patient Name </label>
										<div class="col-sm-10">
										<input type="text" name = "current_day" class="form-control" id="inputPassword" placeholder="Name">
									    </div>
									</div>

									<div class="form-group now">
										<label class="col-sm-2 col-form-label"> Current Date </label>
										<div class="col-sm-10">
										<input type="text" name = "first_name" class="form-control" id="inputPassword" value ='<?php echo date('Y-m-d');?>'>
									    </div>
									</div>

									<div class="form-group now">
										<label class="col-sm-2 col-form-label"> Occupation </label>
										<div class="col-sm-10">
										<input type="text" name = "middle_name" class="form-control" id="inputPassword" placeholder ="Occupation">
									    </div>
									</div>

									<div class="form-group now">
										<label class="col-sm-2 col-form-label"> Work Status </label>
										<div class="col-sm-10">
										<input type="text" name = "last_name" class="form-control" id="inputPassword" placeholder ="Work Status">
									    </div>
									</div>

									<div class="form-group now">
										<label class="col-sm-2 col-form-label"> Educational Degree </label>
										<div class="col-sm-10">
										<input type="text" name = "dob" class="form-control" id="inputPassword" placeholder ="Educational Degree">
									    </div>
									</div>

									<div class="form-group now">
										<label class="col-sm-2 col-form-label"> Tinnitus Onset </label>
										<div class="col-sm-10">
										<input type="text" name = "gender" class="form-control" id="inputPassword" placeholder ="Tinnitus Onset">
									    </div>
									</div>
									<!--Second Table-->
									<div class="form-group now">
										<label class="col-sm-2 col-form-label"> Tinnitus Etiology </label>
										<div class="col-sm-10">
										<input type="text" name = "phone_no" class="form-control" id="inputPassword" placeholder ="Tinnitus Etiology">
									    </div>
									</div>

									<div class="form-group now">
										<label class="col-sm-2 col-form-label"> Hyperracusus Onset </label>
										<div class="col-sm-10">
										<input type="text" name = "email" class="form-control" id="inputPassword" placeholder ="Hyperracusus Onset">
									    </div>
									</div>

									<div class="form-group now">
										<label class="col-sm-2 col-form-label"> Hyperacusis Etiology </label>
										<div class="col-sm-10">
										<input type="text" name = "street_address" class="form-control" id="inputPassword" placeholder ="Hyperacusis Etiology">
									    </div>
									</div>

									<div class="form-group now">
										<label class="col-sm-2 col-form-label"> Additional Comments </label>
										<div class="col-sm-10">
										<input type="text" name = "city" class="form-control" id="inputPassword" placeholder ="Comments">
									    </div>
									</div>

								
									<div class="form-group">
										<div class="row">
											<div class="col-sm-3 ">
												<button type="submit" name="register-submit" id="register-submit" tabindex="1" class="form-control btn btn-register btn-block" value="Register">Save</button>
											</div>

											<div class="col-sm-3 ">
												<a href = "register.php">
												<button type ="button" class="form-control btn btn-register btn-block">Back</button>
												</a>		
											</div>

											<div class="col-sm-3 ">
												<a href = "#">
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