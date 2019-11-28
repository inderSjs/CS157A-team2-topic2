<?php include ("includes/header.php")?>

<?php include ("includes/nav.php")?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<form role="form" class="form-inline">
						<div class="form-group">
							 
							<label for="exampleInputEmail1">
								Visit ID:
							</label>
							<input type="email" class="form-control" id="exampleInputEmail1" />
						</div>

					</form>
				</div>
				<div class="col-md-6">
					<form role="form" class="form-inline">
						<div class="form-group">
							 
							<label for="exampleInputEmail1">
								Date
							</label>
							<input type="email" class="form-control" id="exampleInputEmail1" />
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<form role="form" class="form-inline">
						<div class="form-group">
							 
							<label for="exampleInputEmail1">
								Patient THC#:
							</label>
							<input type="email" class="form-control" id="exampleInputEmail1" />
						</div>
					</form>
				</div>
				<div class="col-md-4">
					<form role="form" class="form-inline">
						<div class="form-group">
							 
							<label for="exampleInputEmail1">
								THC#:
							</label>
							<input type="email" class="form-control" id="exampleInputEmail1" />
						</div>
					</form>
				</div>
				<div class="col-md-4">
					<form role="form" class="form-inline">
						<div class="form-group">
							 
							<label for="exampleInputEmail1">
								Visit No.
							</label>
							<input type="email" class="form-control" id="exampleInputEmail1" />
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<a href ="initial_Interview.php"> 
					<button type="button" class="btn btn-block btn-outline-primary btn-md">
						Initial Interview
					</button>
				    </a>
				</div>
				<div class="col-md-4">
					 <a href ="follow_up_Interview.php">
					<button type="button" class="btn btn-block btn-outline-primary">
						Follow-up Interview 
					</button>
				    </a>
				</div>
				<div class="col-md-4">
					 
					<button type="button" class="btn btn-block btn-outline-primary">
						Tinnitus Handicap Inventory (THI)
					</button>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include ("includes/footer.php")?>