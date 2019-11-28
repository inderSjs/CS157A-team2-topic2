<?php include ("includes/header.php")?>
<?php include ("includes/nav.php")?>
<div class="jumbotron">
   <h1 class="text-center">Tinnitus/Hyperacusis </h1>
   <h1 class="text-center">Follow-up Interview Form </h1>
   <h1 class="text-center"> <?php display_message();?></h1>
   <?php validate_submit_followup_interview_final();?>
</div>
<div class="container-fluid">
<form id="follow-form" method="post" role="form" >
   <div class="row">
      <div class="col-md-12">
         <div class="row">
            <div class="col-md-4">
                 
                  <div class="form-group">
                     <label for="exampleInputEmail1">
                     THC#: <?php echo($_SESSION['thc_no']);?> <br>
                     ID: <?php echo($_SESSION['visit_id']);?> <br>
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
                     Activities prevented or affected: Changes:
                     </label>
                     <label for="exampleInputPassword1">
                     Y/N
                     </label>
                     <input class="form-check-input" type="checkbox" name ="Changes_Yes"  value="1">
                     <input class="form-check-input" type="checkbox"  name ="Changes_No"value="option1">
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name ="T_B_Concentration"  value="1">
                     <input class="form-check-input" type="checkbox" name ="T_A_Concentratiion"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Concentration</label>
                     <input class="form-check-input" type="checkbox" name ="T_B_Sleep"  value="1">
                     <input class="form-check-input" type="checkbox" name ="T_A_Sleep"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Sleep</label>
                     <input class="form-check-input" type="checkbox" name ="T_B_QRA"  value="1">
                     <input class="form-check-input" type="checkbox" name ="T_A_QRA"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">QRA</label>
                     <input class="form-check-input" type="checkbox" name ="T_B_Work"  value="1">
                     <input class="form-check-input" type="checkbox" name ="T_A_Work"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Work</label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name ="T_B_Restaurants"  value="1">
                     <input class="form-check-input" type="checkbox" name ="T_A_Restaurants"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Restaurants</label>
                     <input class="form-check-input" type="checkbox" name ="  T_B_Sports"  value="1">
                     <input class="form-check-input" type="checkbox" name ="T_A_Sports"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Sports</label>
                     <input class="form-check-input" type="checkbox" name ="T_B_Social"  value="1">
                     <input class="form-check-input" type="checkbox" name ="T_A_Social"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Social</label>
                     <input class="form-check-input" type="checkbox" name ="T_B_Other"  value="1">
                     <input class="form-check-input" type="checkbox" name ="T_A_Other"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Other</label>
                  </div>
                  
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     % of time when:
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="text" name ="T_Aware" placeholder="Between 1-100">
                     <label class="form-check-label" for="inlineCheckbox1">Aware ( 1st )</label><br>
                     <input class="form-check-input" type="text" name ="T_Annoyed" placeholder="Between 1-100">
                     <label class="form-check-label" for="inlineCheckbox1">Annoyed ( 1st )</label>
                  </div>
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     Has it changed?
                     </label>
                     <input class="form-check-input" type="checkbox" name ="T_Changed_Yes"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox" name ="T_Changed_No"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                  </div>
                  
               <!---one line-->
                 
                  <div class="form-row align-items-center">
                     <div class="col-auto my-1">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Severity:</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name ="T_Severity">
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
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name ="T_Annoyance">
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
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name ="T_EffectONLife">
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
                     <input class="form-check-input" type="text" name ="T_Comments"  value="1">
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
                     <input class="form-check-input" type="checkbox" name ="T_BadDays_Yes"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox" name ="T_BadDays_No"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                  </div>
                  
               <!--one line-->
                 
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Frequency:</label>
                      <input class="form-check-input" type="text" name ="T_Frequency"  value="1">
                  </div>
                  
               <!--one line-->
                 
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Are they:</label>
                     <label for="exampleFormControlTextarea1">as frequent</label>
                     <input class="form-check-input" type="checkbox" name ="T_FR"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                     <label for="exampleFormControlTextarea1">and as bad</label>
                     <input class="form-check-input" type="checkbox" name ="T_asBad"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                  </div>
                  
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     Effect of sound:
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name ="T_None"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">None</label>
                     <input class="form-check-input" type="checkbox" name ="T_Louder"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Louder</label>
                     <input class="form-check-input" type="checkbox" name ="T_Softer"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Softer</label>
                  </div>
                  
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     How long:
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name ="T_Min"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">min</label>
                     <input class="form-check-input" type="checkbox" name ="T_Hours"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">hours</label>
                     <input class="form-check-input" type="checkbox" name ="T_Days"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">days</label>
                  </div>
                  
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     Ear overprotection
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name ="T_EarProtection_Yes"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox" name ="T_EarProtection_No"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                  </div>
                  
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     % of time
                     </label>
                  </div>
                  <div class="btn-group" role="group"> 
                     <input class="form-check-input" type="text" name ="T_PercentOftime">
                  </div>
                  
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     In quiet
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name ="T_InQuite_Yes"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox" name ="T_InQuiet_No"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                  </div>
                  
               <!--one line-->
                 
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Any other T specific treatments:</label>
                     <input class="form-check-input" type="text" name ="T_Frequency"  value="1">
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
                     <label for="exampleFormControlTextarea1">Description of troublesome sound(s):</label>
                     <input class="form-check-input" type="text" name ="S_Description">
                  </div>
                  
               <!---one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     Activities prevented or affected: Changes: Y/N
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name ="S_B_Concerts"  value="1">
                     <input class="form-check-input" type="checkbox" name ="S_A_Concerts"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Concerts</label>
                     <input class="form-check-input" type="checkbox" name ="S_B_Shopping"  value="1">
                     <input class="form-check-input" type="checkbox" name ="S_A_Shopping"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Shopping</label>
                     <input class="form-check-input" type="checkbox" name ="S_B_Movies"  value="1">
                     <input class="form-check-input" type="checkbox" name ="S_A_Movies"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Movies</label>
                     <input class="form-check-input" type="checkbox" name ="S_B_Work"  value="1">
                     <input class="form-check-input" type="checkbox" name ="S_A_Work"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Work</label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name ="S_B_Restaurant"  value="1">
                     <input class="form-check-input" type="checkbox" name ="S_A_Restaurant"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Restaurants</label>
                     <input class="form-check-input" type="checkbox" name ="S_B_Driving"  value="1">
                     <input class="form-check-input" type="checkbox" name ="S_A_Driving"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Driving</label>
                     <input class="form-check-input" type="checkbox" name ="S_B_Sports"  value="1">
                     <input class="form-check-input" type="checkbox" name ="  S_A_Sports"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Sports</label>
                     <input class="form-check-input" type="checkbox" name ="S_B_Church"  value="1">
                     <input class="form-check-input" type="checkbox" name ="S_A_Church"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Church</label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name ="  S_B_Housekeeping"  value="1">
                     <input class="form-check-input" type="checkbox" name ="S_A_Housekeeping"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Housekeeping</label>
                     <input class="form-check-input" type="checkbox" name ="S_B_Childcare"  value="1">
                     <input class="form-check-input" type="checkbox" name ="  S_A_Childcare"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Childcare</label>
                     <input class="form-check-input" type="checkbox" name ="S_B_Social"  value="1">
                     <input class="form-check-input" type="checkbox" name ="S_A_Social"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Social</label>
                     <input class="form-check-input" type="checkbox" name ="S_B_Other"  value="1">
                     <input class="form-check-input" type="checkbox" name ="S_A_Other"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Other</label>
                  </div>
                  
               <!---one line-->
                 
                  <div class="form-row align-items-center">
                     <div class="col-auto my-1">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Severity:</label>
                        <select class="custom-select mr-sm-2" name ="S_Severity " id="inlineFormCustomSelect">
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
                        <select class="custom-select mr-sm-2" name ="S_Annoyance "id="inlineFormCustomSelect">
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
                        <select class="custom-select mr-sm-2" name ="S_EffectOnLife " id="inlineFormCustomSelect">
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
                     <input class="form-check-input" type="text" name ="S_Comments">
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
                     <input class="form-check-input" type="checkbox" name ="S_BadDays_Yes"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox" name ="S_BadDays_No"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                  </div>
                  
               <!--one line-->
                 
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Frequency:</label>
                     <input class="form-check-input" type="text" name ="S_Frequency">
                  </div>
                  
               <!--one line-->
                 
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Are they:</label>
                     <label for="exampleFormControlTextarea1">as frequent</label>
                     <input class="form-check-input" type="checkbox" name ="  S_asFrequent"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                     <label for="exampleFormControlTextarea1">and as bad</label>
                     <input class="form-check-input" type="checkbox" name ="S_asbad"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox" value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                  </div>
                  
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     Effect of sound:
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name ="S_None"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">None</label>
                     <input class="form-check-input" type="checkbox" name ="S_Stronger"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Louder</label>
                     <input class="form-check-input" type="checkbox" name ="S_Weaker"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Softer</label>
                  </div>
                  
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     How long:
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name ="S_Min"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">min</label>
                     <input class="form-check-input" type="checkbox" name ="S_Hours"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">hours</label>
                     <input class="form-check-input" type="checkbox" name ="S_Days"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">days</label>
                  </div>
                  
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     Ear overprotection
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name ="S_EarProtection_Yes"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox" name ="S_EarProtection_No"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                  </div>
                  
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     % of time
                     </label>
                  </div>
                  <div class="btn-group" role="group"> 
                     <input type="text" class="form-control" name="T_PercentOftime" /> 
                  </div>
                  
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     In quiet
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name ="  S_InQuite_Yes"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox" name ="S_InQuiet_No"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                  </div>
                  
               <!--one line-->
                 
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Any other ST specific treatments:</label>
                     <input class="form-check-input" type="text" name ="S_Treatment">
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
                     <input class="form-check-input" type="checkbox" name ="Hearing_Problem_Yes"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox" name ="Hearing_Problem_No"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                  </div>
                  
               <!--one line-->
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     The problem in general:
                     </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" name ="Same"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Same</label>
                     <input class="form-check-input" type="checkbox" name ="Better"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Better</label>
                     <input class="form-check-input" type="checkbox" name ="Worse"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Worse</label>
                  </div>
                  
               <!--one line-->
               
            </div>
            <!--for col-md-6-->
            <div class="col-md-6">
                 
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Recommendation:</label>
                     <input class="form-check-input" type="text" name ="Recommendation" >
                  </div>
                  
               <!--one line-->
                 
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Next visit:</label>
                     <input class="form-check-input" type="text" name ="Next_Visit" >
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
                        <select class="custom-select mr-sm-2" name=" Tinnitus" id="inlineFormCustomSelect">
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
                        <select class="custom-select mr-sm-2" name=" Sound_Tolerance" id="inlineFormCustomSelect">
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
                        <select class="custom-select mr-sm-2" name=" Hearing" id="inlineFormCustomSelect">
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
            <!--for col-md-6--> 
         </div>
         <div class="row">
            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
            <div class="col-md-6">
                 
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     How would you feel if you had to give back your instruments?
                     </label>
                     <input class="form-check-input" type="text" name ="Instruments" >
                  </div>
                  <div class="form-check form-check-inline">
                     <label for="exampleInputPassword1">
                     Are you glad you started this program?
                     </label>
                     <input class="form-check-input" type="checkbox" name ="Program_Yes"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                     <input class="form-check-input" type="checkbox" name ="Program_No"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">No</label>
                     <input class="form-check-input" type="checkbox" name ="Program_NS"  value="1">
                     <label class="form-check-label" for="inlineCheckbox1">NS</label>
                  </div>
                  <div class="form-group">   
                     <label for="exampleInputPassword1">
                     Main problems discussed:
                     </label>
                     <input class="form-check-input" type="text" name ="Discussion" >
                  </div>
                  
               
               
            </div>

        </div>
        <div class="col-md-6">

        </div><!--for col-md-6--> 

        <div class="col-md-6">
         <div class="col-sm-6 col-sm-offset-3">
            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Submit">
         </div>

        </div><!--for col-md-6--> 


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
   </div>
   </form>
</div>
<?php include ("includes/footer.php")?>