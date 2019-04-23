<?php include("../inc/html_controls.php");?>
<?php include("../inc/config.php"); ?>
<?php initializePage(); ?>

    <?php pageBodyTopSection();?>
<!-- content -->
<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Register New Student</h3>
                </div>
                
                <div class="box-body">
                
                	<?php
                    		
                            // if (isset($_POST["go"])=="Submit")
                            // {
                                        
                            // 			$sid = mysql_real_escape_string(filter_var(strtoupper($_POST['sid']), FILTER_SANITIZE_STRING));
                            // 			$lname = mysql_real_escape_string(filter_var(strtoupper($_POST['lname']), FILTER_SANITIZE_STRING));
                            // 			$fname = mysql_real_escape_string(filter_var(strtoupper($_POST['fname']), FILTER_SANITIZE_STRING));
                            // 			$oname = mysql_real_escape_string(filter_var(strtoupper($_POST['oname']), FILTER_SANITIZE_STRING));
                            // 			$sex = mysql_real_escape_string(filter_var(strtoupper($_POST['gender']), FILTER_SANITIZE_STRING));
                            // 			$address = mysql_real_escape_string(filter_var(strtoupper($_POST['address']), FILTER_SANITIZE_STRING));
                            // 			$dob = mysql_real_escape_string(filter_var(strtoupper($_POST['dob']), FILTER_SANITIZE_STRING));
                            // 			$class = mysql_real_escape_string(filter_var(strtoupper($_POST['stndtClass']), FILTER_SANITIZE_STRING));
                                        
                            // 			//parent info
                            // 			$pLname = mysql_real_escape_string(filter_var(strtoupper($_POST['parentLname']), FILTER_SANITIZE_STRING));
                            // 			$POname = mysql_real_escape_string(filter_var(strtoupper($_POST['parentOname']), FILTER_SANITIZE_STRING));
                            // 			$phone = mysql_real_escape_string(filter_var(strtoupper($_POST['phone']), FILTER_SANITIZE_STRING));
                            // 			$email = mysql_real_escape_string(filter_var(strtolower($_POST['email']), FILTER_SANITIZE_STRING));
                            // 			$pAddress = mysql_real_escape_string(filter_var(strtoupper($_POST['pAddress']), FILTER_SANITIZE_STRING));
                                        
                            // 			if ($sid and $lname and $fname and $sex and $class!="SELECT")
                            // 			{
                            // 				$nsid = str_replace("/","_",$sid);
                            // 				$done = upload("pic", $nsid, "students", 400*1024);
                                            
                                            
                                            
                            // 					$split = explode("_",$class);
                            // 					$mclass = $split[0]; $sclass= $split[1];
                            // 					$ref = time();
                            // 					$term = $_SESSION["term"];  $session= $_SESSION["session"];
                            // 					$fees = getSchoolFees($term, $session);
                            // 					$q = @mysql_query("insert into students values('$sid','$lname','$fname','$oname','$sex','$dob','$address','$mclass','$sclass','$phone','ACTIVE','$done')") or die (mysql_error());
                            // 					$q3 = mysql_query("insert into transaction values('$ref','$sid','$fees','0','$fees','$term','$session')");
                            // 					//check phone
                            // 					$chck = mysql_query("select * from parents where phone='$phone'");
                            // 					if (mysql_num_rows($chck)>0){$q2="done";}
                            // 					else {
                            // 					$q2 = mysql_query("insert into parents values('$email','$pLname','$POname','$pAddress','$phone','password')") or die (mysql_error());
                            // 					}
                                                
                            // 					if ($q and $q2)  { echo "<div class='alert alert-success'>Operation Success </div>"; $sid="";
                            // 					$lname=""; $fname=""; $oname=""; $address=""; $dob=""; $sex=""; $class=""; $pLname=""; $POname=""; $phone="";
                            // 					$pAddress="";
                            // 					}
                            // 					else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
                                            
                            // 			}
                            // }

                      if(isset($_POST['go'])){
                          
                        $sid = filter_var(strtoupper($_POST['studentID']), FILTER_SANITIZE_STRING);
                        $lname = filter_var(strtoupper($_POST['lastName']), FILTER_SANITIZE_STRING);
                        $fname = filter_var(strtoupper($_POST['firstName']), FILTER_SANITIZE_STRING);
                        $oname = filter_var(strtoupper($_POST['otherNames']), FILTER_SANITIZE_STRING);
                        $sex = filter_var(strtoupper($_POST['gender']), FILTER_SANITIZE_STRING);
                        $address = filter_var(strtoupper($_POST['address']), FILTER_SANITIZE_STRING);
                        $dob = filter_var(strtoupper($_POST['dob']), FILTER_SANITIZE_STRING);
                        $class = filter_var(strtoupper($_POST['class']), FILTER_SANITIZE_STRING);
                        
                        //parent info
                        $pLname = filter_var(strtoupper($_POST['parentLname']), FILTER_SANITIZE_STRING);
                        $POname = filter_var(strtoupper($_POST['parentOname']), FILTER_SANITIZE_STRING);
                        $phone = filter_var(strtoupper($_POST['phone']), FILTER_SANITIZE_STRING);
                        $email = filter_var(strtolower($_POST['email']), FILTER_SANITIZE_STRING);
                        $pAddress = filter_var(strtoupper($_POST['pAddress']), FILTER_SANITIZE_STRING);
                        
                        
                        if($sid and $lname and $fname and $sex and $class!="SELECT"){

                        $nsid = str_replace("/","_",$sid);
                        //$done = $_FILES['pic']['name'];

                        $done = upload("pic", $nsid, "students", 400*1024);

                        $split = explode("_",$class);
                        $mclass = $split[0]; $sclass= $split[1];
                        $ref = time();

                        //$term = $_SESSION["term"];  $session = $_SESSION["session"]; it has to come from session

                        $term = "FIRST";  $session = "2015/2016";
                        $fees = getSchoolFees($term, $session);

                        $stmt = $pdo->prepare("insert into students (studentID,lastName,firstName, otherNames, gender, dob, address, parentID, status, pic) values(:studentID,:lastName, :firstName,:otherNames,:gender,:dob, :address, :parentID, :status, :pic)");
                        $q = $stmt->execute([
                            ':studentID'=>$sid,
                            ':lastName'=>$lname,
                            ':firstName' => $fname,
                            ':otherNames'=> $oname,
                            ':gender'=>$sex,
                            ':dob' => $dob,
                            ':address'=> $pAddress,
                            ':parentID'=>'080xxxxxxxx',
                            ':status'=> 'ACTIVE',
                            ':pic'=> $done
                        ]);

                        $stmt = $pdo->prepare("insert into transaction(ref,studentID,fees,amountPaid,balance,term,session) values(:ref, :studentID, :fees, :amountPaid, :balance, :term, :session)");
                        $q3 = $stmt->execute([':ref'=>$ref, ':studentID'=>$sid, ':fees'=> $fees,':amountPaid'=>'0', ':balance' => $fees, ':term' => $term, ':session' => $session]);


                        $stmt = $pdo->prepare("select * from parents where phone = :phone");
                        $chck = $stmt->execute([':phone'=> $phone]);
                        if($chck->countRow() > 0) { $q2 = "done";}
                            else{
                                $stmt = $pdo->prepare("insert into parents(email, lastName, otherNames, address, phone, password) values(:email, :lastName, :otherNames, :address, :phone, :password)");
                                $q2 = $stmt->execute([':email'=>$email, ':lastName'=>$pLname,  ':otherNames'=>$POname, ':address'=> $pAddress, ':phone'=>$phone, ':password'=>'password']);
                            }
                        if($q and $q2){
                            echo "<div class='alert alert-success'>Operation Success </div>"; 
                            $sid=$lname=$fname=$oname=$address=$dob=$sex=$class=$pLname=$POname=$phone=$pAddress="";
                                    
                        }else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
                    }
                }
                            
					?>
                	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" id="form_new">
                    	<div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control " placeholder="Admission Number eg sec/2018/1001" value="" name="studentID" id="sid"/>
                        </div>
                    	<br>
                    	<div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control " placeholder="Last Name" value="" name="lastName" id="lastName"/>
                        </div>
                    	<br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="First Name" value="" name="firstName" id="firstName"/>
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Other Names" name="otherNames" id="otherNames" value="" />
                        </div>
                        <br>
                        <div class="input-group col-lg-4">
                        	<select class="form-control" name="gender" id="gender">
                            <option value="SELECT">Select Gender</option>
                            <option value="MALE">Male</option>
                            <option value="FEMALE">Female</option>
                            </select>
                        </div>
                        <br>
                        <div class="input-group">
                        	<textarea class="input-control" style="width:450px;" placeholder="Address" rows="4" name="address" id="address">
                                                        </textarea>
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-photo"></i></span>
                            <input type="file" class="form-control" placeholder="Picture" name="pic" id="pic" />
                        </div>
                        
                        <br>
                        <div class="input-group date col-lg-10" data-provide="datepicker">
                        	<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" id="datePicker" data-date-format='yyyy-mm-dd'  placeholder="Date of Birth" name="dob" id="dob" value="" />
                        </div>
                        <br>
                         <div class="input-group">
                        	<select class="form-control" name="class" id="class">
                            <option value="SELECT">Select Class</option>
                            
                           		 <?php
                                    $sql = "select * from classes order by `classid` ASC";
                                    $stmt = $pdo->prepare($sql);
                                    $stmt->execute();
                                    while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                                        $cid = $row->classid;
                                        echo "<option value='$cid'>$cid</option>";
                                    }
                            // echo "<option value=''></option>";
                                    // $q = mysql_query("select * from classes order by `classid` ASC");
                                    // $rows = mysql_num_rows($q);
                                    // if ($rows>0)
                                    // {
                                    // 	for ($i=1; $i<=$rows; $i++)
                                    // 	{
                                    // 		$rec = mysql_fetch_array($q);
                                    // 		$cid = $rec["classid"];
                                            
                                    // 		echo "<option value='$cid'>$cid</option>";
                                    // 	}
                                    // }
                    			?>
                            
                            </select>
                        </div>
                        <br>
                        <hr>
                        <div class="input-group">
                        	<label class="input-control">Parent/Guardian Information</label>
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Last Name" name="parentLname" id="parentLname" value="" />
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Other Names" name="parentOname" id="parentOname" value="" />
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="text" class="form-control" placeholder="Phone Number" name="phone" id="phone" value="" />
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" placeholder="Email" name="email" id="email" value="" />
                        </div>
         				<br>
                        <div class="input-group col-lg-10">
                        	
                            <textarea  placeholder="Parent Address" style="width:450px" rows="4" name="pAddress" id="pAddress">
                                                        </textarea>
                        </div>
                        
                        <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Submit" name="go" />
                        </div>
                         	
                    </form>
                </div>
            </div>
<!-- end content -->
<script>
    $(document).ready(function(){
        
            form = $('#form_new');

            form.submit(function(){
            var sid = $('#sid').val();
            var lname = $('#lname').val();
            var fname = $('#fname').val();
            var oname = $('#oname').val();
            var gender = $('#gender').val();
            var address = $('#address').val();
            var dob = $('#dob').val();
            var class = $('#stndtClass').val();
            var pic = $('#pic').val();

            //parent
            var parentLname = $('#parentLname').val();
            var parentOname = $('#parentOname').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            var pAddress = $('#pAddress').val();

            });
       
    });
</script>
<!-- endcontent -->

<?php pageBodyFooterSection();?>

	<!--can right side bar here -->
<?php  endPage();?>
