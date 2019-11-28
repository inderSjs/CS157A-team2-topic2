<?php include ("includes/header.php")?>
<?php include ("includes/nav.php")?>
<div class="jumbotron">
   <h1 class="text-center">Tinnitus/Hyperacusis </h1>
   <h1 class="text-center">Initial Interview Form </h1>
   <h1 class="text-center"> <?php display_message();?></h1>
   <?php validate_submit_initial_interview_final();?>
</div>


<div class="container-fluid">
   <div class="row">
      <form id="login-form"  method="post" role="form" style="display: block;">
      <div class="col-md-12">
         <div class="row">
            <div class="col-md-6">
                  <div class="form-group">
                     <label for="exampleInputEmail1">
                     T&HC#: <?php echo($_SESSION['thc_no']);?> <br>
                     Visit ID: <?php echo($_SESSION['visit_id']);?> <br>
                     </label>
                  </div>             
            </div>
         </div>
         <div class="row">
               <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
               <h2>TINNTITUS</h2>
               <div class="col-md-6">
                  <!---one line-->
            <div class="form-group">
            <label for="exampleInputPassword1">

            Choose one of the following : 
            </label><br>
            
            <input class="form-check-input" type="checkbox" name = "RE" value="1">
            <label class="form-check-label" for="inlineCheckbox1">RE</label>
            <input class="form-check-input" type="checkbox" name = "LE" value="1">
            <label class="form-check-label" for="inlineCheckbox1">LE</label> 
            <input class="form-check-input" type="checkbox" name = "T_Both" value="1">
            <label class="form-check-label" for="inlineCheckbox1">Both</label>
            <input class="form-check-input" type="checkbox" name = "Head" value="1">
            <label class="form-check-label" for="inlineCheckbox1">Head</label>    
            
            </div>
            <label for="exampleInputPassword1">

            Choose one of the following for the option chosen above: 
            </label><br>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="Intermittent" value="1">
            <label class="form-check-label" for="inlineCheckbox1">Intermittent</label>
            <input class="form-check-input" type="checkbox" name="Constant" value="1">
            <label class="form-check-label" for="inlineCheckbox1">Constant</label>
            </div>
             
            <!---one line-->
            
            <div class="form-group">   
            <label for="exampleInputPassword1">
            Onset:
            </label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="Gradual" value="1">
            <label class="form-check-label" for="inlineCheckbox1">Gradual</label>
            <input class="form-check-input" type="checkbox" name="Sudden" value="1">
            <label class="form-check-label" for="inlineCheckbox1">Sudden</label>
            </div>
            <!---one line-->
            
            <div class="form-group">   
            <label for="exampleInputPassword1">
            When:
            </label>
            </div>
            <div class="btn-group" role="group"> 
            <input type="text" class="form-control" name ="Initial_Date" placeholder="YYYY/MM/DD" /> 
            </div>
           
            <!---one line-->
            
            <div class="form-group">   
            <label for="exampleInputPassword1">
            Fluctuations in volume
            </label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="Fl_In_Volume_Yes" value="1">
            <label class="form-check-label" for="inlineCheckbox1">Yes</label>
            <input class="form-check-input" type="checkbox" name="Fl_In_Volume_No" value="1">
            <label class="form-check-label" for="inlineCheckbox1">No</label>
            </div>
            
            <!---one line-->
              
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Description of T sound(s):</label>
            <input class="form-check-input" type="text" name="Description">
            </div>
             
            <!---one line-->
              
            <div class="form-group">   
            <label for="exampleInputPassword1">
            Activities prevented or affected:
            </label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="T_Concentration" value="1">
            <label class="form-check-label" for="inlineCheckbox1">Concentration</label>
            <input class="form-check-input" type="checkbox" name="T_Sleep" value="1">
            <label class="form-check-label" for="inlineCheckbox1">Sleep</label>
            <input class="form-check-input" type="checkbox" name="T_Qra" value="1">
            <label class="form-check-label" for="inlineCheckbox1">QRA</label>
            <input class="form-check-input" type="checkbox" name="T_Work" value="1">
            <label class="form-check-label" for="inlineCheckbox1">Work</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="T_Restaurents" value="1">
            <label class="form-check-label" for="inlineCheckbox1">Restaurants</label>
            <input class="form-check-input" type="checkbox" name="T_Sports" value="1">
            <label class="form-check-label" for="inlineCheckbox1">Sports</label>
            <input class="form-check-input" type="checkbox" name="T_Social" value="1">
            <label class="form-check-label" for="inlineCheckbox1">Social</label>
            <input class="form-check-input" type="checkbox" name="T_Other" value="1">
            <label class="form-check-label" for="inlineCheckbox1">Other</label>
            </div>
             
            <!--one line-->
              
            <div class="form-group">   
            <label for="exampleInputPassword1">
            % of time when:
            </label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="text" name="T_Aware" placeholder="Between 1-100" >
            <label class="form-check-label" for="inlineCheckbox1">Aware</label>
            <input class="form-check-input" type="text" name="T_Annoyed" placeholder="Between 1-100">
            <label class="form-check-label" for="inlineCheckbox1">Annoyed</label>
            </div>
             
            <!---one line-->
              
            <div class="form-row align-items-center">
            <div class="col-auto my-1">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Severity:</label>
            <select class="custom-select mr-sm-2" name="T_Severity">
            <option selected>Choose...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            </select>
            </div>
            </div>
             
            <!---one line-->
              
            <div class="form-row align-items-center">
            <div class="col-auto my-1">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Annoyance:</label>
            <select class="custom-select mr-sm-2" name="T_Annoyance">
            <option selected>Choose...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            </select>
            </div>
            </div>
             
            <!---one line-->
              
            <div class="form-row align-items-center">
            <div class="col-auto my-1">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Effect on Life:</label>
            <select class="custom-select mr-sm-2" name="T_Annoyance">
            <option selected>Choose...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            </select>
            </div>
            </div>
             
            <!---one line-->
              
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Comments:</label>
            <input class="form-check-input" type="text" name="T_Comments" placeholder="Between 1-100" >
            </div>
             
            </div>
            <!--Left side End-->
            <div class="col-md-6">
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     "Bad Days"
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name="T_BadDays_Yes" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox" name="T_BadDays_No" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                  </div>
                
               <!--one line-->
                 
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Frequency:</label>
                     <input class="form-check-input" type="text" placeholder="How many days?">
                  </div>
                
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     Effect of sound:
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name="T_None" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">None</label>
                     <input class="form-check-input" type="checkbox" name="T_Louder" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Louder</label>
                     <input class="form-check-input" type="checkbox" name="T_Softer" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Softer</label>
                  </div>
                
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     How long:
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name="T_Minutes" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">min</label>
                     <input class="form-check-input" type="checkbox" name="T_Hours" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">hours</label>
                     <input class="form-check-input" type="checkbox" name="T_Days" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">days</label>
                  </div>
                
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     Ear overprotection
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name="T_EarProtection_Yes" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox" name="T_EarProtection_No" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                  </div>
                
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     % of time
                     </label>
                  </div>
                  <div class="btn-group" role="group"> 
                     <input class="form-check-input" type="text" name="T_PercentOfTime" placeholder="% of time">
                  </div>
                
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     In quiet
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name="T_InQuiet_Yes" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox" name="T_InQuiet_No" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                  </div>
                
               <!--one line-->
                 
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Any other T specific treatments:</label>
                     <input class="form-check-input" type="text" name="T_SpecificTreatment" placeholder="Comments">
                  </div>
                
               <!--one line-->
                 
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Why is T a problem?</label>
                     <input class="form-check-input" type="text" name="T_Problem" placeholder="Comments">
                  </div>
                
            </div>
            <!--for col-md-6-->
         </div>
         <!--for row-->
         <div class="row">
            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
            <h2>SOUND TOLERANCE HL</h2>
            <div class="col-md-6">
               <!---one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     Oversensitivity: 
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name="S_Oversensitivity_Yes" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox" name="S_Oversensitivity_No" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                  </div>
                
               <!---one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     Physical discomfort:
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name="S_PhysicalDiscomfort_Yes" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox" name="S_PhysicalDiscomfort_No" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                  </div>
                
               <!---one line-->
                 
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Description of troublesome sound(s):</label>
                     <input class="form-check-input" type="text" name="S_Description" placeholder="Comments">
                  </div>
                
               <!---one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     Activities prevented or affected:
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name="S_Concerts" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Concerts</label>
                     <input class="form-check-input" type="checkbox" name="   S_Shopping" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Shopping</label>
                     <input class="form-check-input" type="checkbox" name="S_Movies" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Movies</label>
                     <input class="form-check-input" type="checkbox" name="S_Work" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Work</label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name="S_Restaurants" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Restaurants</label>
                     <input class="form-check-input" type="checkbox" name="S_Driving" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Driving</label>
                     <input class="form-check-input" type="checkbox" name="S_Sports" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Sports</label>
                     <input class="form-check-input" type="checkbox" name="S_Church" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Church</label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name="S_Housekeeping" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Housekeeping</label>
                     <input class="form-check-input" type="checkbox" name="S_Childcare" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Childcare</label>
                     <input class="form-check-input" type="checkbox" name="S_Social" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Social</label>
                     <input class="form-check-input" type="checkbox" name="S_Other" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Other</label>
                  </div>
                
               <!---one line-->
                 
                  <div class="form-row align-items-center">
                     <div class="col-auto my-1">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Severity:</label>
                        <select class="custom-select mr-sm-2" name ="S_Severity">
                           <option selected>Choose...</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           <option value="7">7</option>
                           <option value="8">8</option>
                           <option value="9">9</option>
                           <option value="10">10</option>
                        </select>
                     </div>
                  </div>
                
               <!---one line-->
                 
                  <div class="form-row align-items-center">
                     <div class="col-auto my-1">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Annoyance:</label>
                        <select class="custom-select mr-sm-2" name ="S_Annoyance">
                           <option selected>Choose...</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           <option value="7">7</option>
                           <option value="8">8</option>
                           <option value="9">9</option>
                           <option value="10">10</option>
                        </select>
                     </div>
                  </div>
                
               <!---one line-->
                 
                  <div class="form-row align-items-center">
                     <div class="col-auto my-1">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Effect on Life:</label>
                        <select class="custom-select mr-sm-2" name ="S_EffectOnLife">
                           <option selected>Choose...</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           <option value="7">7</option>
                           <option value="8">8</option>
                           <option value="9">9</option>
                           <option value="10">10</option>
                        </select>
                     </div>
                  </div>
                
               <!---one line-->
                 
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Comments:</label>
                     <input class="form-check-input" type="text" name="S_Comments" placeholder="Comments">
                  </div>
                
            </div>
            <!--Left side End-->
            <div class="col-md-6">
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     "Bad Days"
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name="S_BadDays_Yes" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                  </div>
                
               <!--one line-->
                 
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Frequency:</label>
                     <input class="form-check-input" type="text" name="S_Frequency" placeholder="Comments">
                  </div>
                
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     Effect of sound:
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name="S_None" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">None</label>
                     <input class="form-check-input" type="checkbox" name="S_Stronger" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Louder</label>
                     <input class="form-check-input" type="checkbox" name="   S_Weaker" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Softer</label>
                  </div>
                
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     How long:
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name="   S_Min" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">min</label>
                     <input class="form-check-input" type="checkbox" name="   S_Hours" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">hours</label>
                     <input class="form-check-input" type="checkbox" name="   S_Days" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">days</label>
                  </div>
                
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     Ear overprotection
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name="   S_EarProtection_Yes" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox" name="   S_EarProtection_No" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                  </div>
                
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     % of time
                     </label>
                  </div>
                  <div class="btn-group" role="group"> 
                     <input class="form-check-input" type="text" name="S_PercentofTime" placeholder="Comments"> 
                  </div>
                
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     In quiet
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name="   S_InQuiet_Yes" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox" name="   S_InQuiet_No" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                  </div>
                
               <!--one line-->
                 
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Any other ST specific treatments:</label>
                     <input class="form-check-input" type="text" name="S_PercentofTime" placeholder="S_specificTreatment">
                  </div>
                
               <!--one line-->
                 
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Why is ST a problem?</label>
                     <input class="form-check-input" type="text" name="S_PercentofTime" placeholder="S_Problem">
                  </div>
                
            </div>
            <!--for col-md-6-->
         </div>
         <!--for row-->
         <div class="row">
            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
            <div class="col-md-6">
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     Hearing problem
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name="      Hearing_Problem_Yes" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox" name="      Hearing_Problem_No" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                  </div>
                
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     Hearing Aid(s)
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name="      Hearing_Aid_Yes" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox" name="      Hearing_Aid_No" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                     <br>
                     <label for="exampleInputPassword1">
                     Type:
                     </label>
                     <input class="form-check-input" type="text" name="S_PercentofTime" placeholder="Type">
                  </div>
                
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     Ever recommended 
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name="      Ever_Recommended_Yes" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox" name="      Ever_Recommended_No" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                  </div>
                
            </div>
            <!--for col-md-6-->
            <div class="col-md-6">
                 
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Category:</label>
                     <input class="form-check-input" type="text" name="Category" placeholder="Type">
                  </div>
                
               <!--one line-->
                 
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Recommendation:</label>
                     <input class="form-check-input" type="text" name="Recommendation" placeholder="Type">
                  </div>
                
            </div>
            <!--for col-md-6--> 
         </div>
         <!--for row-->
         <div class="row">
            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
            <div class="col-md-6">
                 
                  <div class="form-row align-items-center">
                     <div class="col-auto my-1">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Ranking problems:</label>
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Tinnitus:</label>
                        <select class="custom-select mr-sm-2" name = "Tinnitus">
                           <option selected>Choose...</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                        </select>
                     </div>
                  </div>
                
               <!--one line-->
                 
                  <div class="form-row align-items-center">
                     <div class="col-auto my-1">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Sound tolerance:</label>
                        <select class="custom-select mr-sm-2" name = "Sound_Tolerance">
                           <option selected>Choose...</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                        </select>
                     </div>
                  </div>
                
               <!--one line-->
                 
                  <div class="form-row align-items-center">
                     <div class="col-auto my-1">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Hearing:</label>
                        <select class="custom-select mr-sm-2" name = "Hearing">
                           <option selected>Choose...</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                        </select>
                     </div>
                  </div>
                
            </div>
            <!--for col-md-6-->
            <div class="col-md-6">
                 
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Ptn decision:</label>
                     <input class="form-check-input" type="text" name="Ptn_Decision" placeholder="Type">
                  </div>
                
               <!--one line-->
                 
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Next visit:</label>
                     <input class="form-check-input" type="text" name="Next_Visit" placeholder="Type">
                  </div>
                
            </div>
            <!--for col-md-6--> 
            <div class="col-md-6">
            </div>
            <!--for col-md-6--> 
            <div class="col-md-6">
               <div class="col-sm-6 col-sm-offset-3">
                  <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Submit">
               </div>
            </div>
            <!--for col-md-6--> 
         </div>
         <!--for row-->
         <div class="row">
            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
            <div class="col-md-12">
               <p><sub><strong>T</strong>-tinnitus ST- sound tolerance (hyperacusis + phonophobia)</sub></p>
               <p><sub>Is&nbsp;you T preventing or affecting any activities in your life.</sub></p>
               <p><sub><strong>QRA</strong>&nbsp;- quiet recreational activities; Is your T interfering with QRA such as reading or mediating.&nbsp;</sub></p>
               <p><sub><strong>% of time when:</strong> <strong>Aware&nbsp;</strong>- What % of time were you aware of your T over last month?</sub></p>
               <p><sub>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>&nbsp;Annoyed</strong>&nbsp;- What % of the time over last months T bothered you?</sub><sub><strong>Severity&nbsp;</strong>- How strong or loud is your T on average over last month? 0 - no T, 10 - as strong as you can imagine.</sub></p>
               <p><sub><strong>Annoyance</strong> - How much was T annoying you on average over last month O- not at all; 10- as much as you can imagine.</sub></p>
               <p><sub><strong>Effect on life</strong> - How much was T affecting your life on average over last month. O- no effect; 10 - as much as you can imagine.</sub></p>
               <p><sub><strong>Any other T specific treatments </strong>- Are you usingany other treatments for your T.</sub></p>
               <p><sub><strong>Sound tolerance</strong> - Is your tolerance to louder sounds the same as people around you?</sub></p>
               <p><sub><strong>Hearing</strong> - Do you think you have a hearing problem ?</sub></p>
               <p><sub><strong>Ranking</strong> - rank importance of your problem with 0 - no problem,5 - as large as you can imagine</sub></p>
            </div>
         </div>
          
      </div>
   </form>
   </div>
</div>
<?php include ("includes/footer.php")?>