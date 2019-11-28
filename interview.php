<?php include ("includes/header.php")?>
<?php include ("includes/nav.php")?>
<div class="container-fluid">
   <div class="row">
   <h1 class="text-center"> <?php display_message();?></h1>
  	<?php validate_intial_interview_visit_id();?>
      <div class="col-lg-12">

         <form id="interview-form"  method="post" role="form" style="display: block;">
         	<div class="form-group">
							 
							<label for="exampleInputEmail1">
								Visit No: <?php
												$sql = "SELECT visit_no 
														FROM patient 
														WHERE thc_no ='".escape($_SESSION['thc_no'])."'";
												$result = query($sql);
												while($row=fetch_array($result)) {
													$current_visits = $row['visit_no'];
													$new_visits = $current_visits+1;
													$update_count = query("UPDATE `login_db`. `patient` SET `visit_no` = $new_visits");
													echo $new_visits;
												}
										  ?>
							</label>
			</div>
         	<div class ="form-group">
         		<label for="exampleInputEmail1">
								THC#: <?php echo($_SESSION['thc_no']);?>
				</label>
         	</div>
         	<div class ="form-group">
         		<label for="exampleInputEmail1">
         			Date:
         		</label>
         		<input type="text" class="form-control" value ='<?php echo date('Y-m-d');?>'>
         	</div>
         	
            <div class="form-group">
               <input type="text" name="visit_id" tabindex="1" class="form-control" placeholder="Visit ID" required>
            </div>
            <div class="form-group">
               <div class="row">
                  <div class="col-sm-6 col-sm-offset-3">
                     <button type="submit" name = "initial_interview_visit_id" id="initial_interview_visit_id" value="initial_interview_visit_id" class="btn btn-block btn-outline-primary btn-md">
                     	<a href="#">Initial Interview</a>
                     </button>
                  </div>
                  <div class="col-sm-6 col-sm-offset-3">      
                     <button type="submit" name = "follow_up_interview_visit_id" id="follow_up_interview_visit_id" value ="follow_up_interview_visit_id"class="btn btn-block btn-outline-primary">
                     	<a href="#">Follow-up Interview </a>
                     </button>
                    
                  </div>
                  <div class="col-sm-6 col-sm-offset-3">
                     <button type="button" class="btn btn-block btn-outline-primary">
         				Tinnitus Handicap Inventory (THI)
         			 </button>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
<?php include ("includes/footer.php")?>