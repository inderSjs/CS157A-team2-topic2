<?php include ("includes/header.php")?>
<?php include ("includes/nav.php")?>
<div class="jumbotron">
   <h1 class="text-center"> Medical Data Screen</h1>
   <h1 class="text-center"> <?php display_message();?></h1>
   <?php validate_insert_medical();?>
</div>
<div class="container-fluid">

<div class="row">
   <div class="panel-body">
      <div class="row">
         <div class="col-lg-12">
            <form id="medical-form" method="post" role="form" >
               <div class="form-group">
                  <input type="text" name="code_id" id="code_id" tabindex="1" class="form-control" placeholder="Code ID" value="" required >
               </div>
               <div class="form-group">
                  <input type="text" name="full_name" id="full_name" tabindex="1" class="form-control" placeholder="Full Name" value="" required >
               </div>
               <div class="form-group">
                  <input type="text" name="abbreviation" id="abbreviation" tabindex="1" class="form-control" placeholder="Abbreviation" value="" required >
               </div>
               <div class="form-group">
                  <input type="text" name="description" id="description" tabindex="1" class="form-control" placeholder="Description" value="" required >
               </div>
               <div class="form-group">
                  <div class="row">
                     <div class="col-md-6">
                        <input type="submit" name="save" id="save" tabindex="4" class="form-control btn btn-register" value="Save">
                     </div>
                     <div class="col-md-6">
                        <input type="reset" name="save" id="save" tabindex="4" class="form-control btn btn-register" value="Cancel">
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<?php include ("includes/footer.php")?>