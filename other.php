<?php include ("includes/header.php")?>

<?php include ("includes/nav.php")?>
	<div class="jumbotron">
		<h1 class="text-center"> Medical Data Screen</h1>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>
							Code(id):
						</th>
						<th>
							Full name:
						</th>
						<th>
							Abbreviation:
						</th>
						<th>
							Description:
						</th>
					</tr>
				</thead>
				<tbody>
					<?php get_other()?>				
				</tbody>
			</table>
		</div>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<a href="modifyMedical.php"> 
			<button type="button" class="btn btn-block btn-outline-primary">
				Add
			</button>
			</a>
		</div>
		<div class="col-md-6">
			<a href="index.php">			 
			<button type="button" class="btn btn-block btn-outline-primary">
				Cancel
			</button>
			</a>
		</div>
	</div>
	


<?php include ("includes/footer.php")?>