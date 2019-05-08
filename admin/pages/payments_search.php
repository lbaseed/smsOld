<?php include("../inc/html_controls.php");?>
<?php initializePage(); ?>
    <?php pageBodyTopSection();?>
<!-- open -->
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
                    
                    if(isset($_POST["go"]))
                    {
                        $sid = $_POST['sid'];
                        $lname = $_POST['lname'];
                        $fname = $_POST['fname'];
                        $oname = $_POST['oname'];
                        $sex = $_POST['gender'];
                        $address = $_POST['address'];
                        $dob = $_POST['dob'];
                        $class = $_POST['stndtClass'];
                        
                        //parent info
                        $pLname = $_POST['parentLname'];
                        $POname = $_POST['parentOname'];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $pAddress = $_POST['pAddress'];

                        if($sid and $lname and $fname and $sex and $class!="SELECT")
                        {
                            $nsid = str_replace("/","_",$sid);
                            $done = upload("pic", $nsid, "students", 400*1024);

                            $split = explode("_",$class);
                            $mclass = $split[0]; $sclass= $split[1];
                            $ref = time();
                            $term = $_SESSION["term"];  $session= $_SESSION["session"];
                            $fees = getSchoolFees($term, $session);

                            $sql = "insert into students(studentID, lastName, firstName, otherNames, gender, dob, address, class, subClass, parentID, status, pic) values(?,?,?,?,?,?,?,?,?,?,?,?)";
                            $statement = $pdo->prepare($sql);
                            $q = $statement->execute([
                                $sid, $lname, $fname,$oname, $sex,$dob,$address,$mclass,$sclass,$phone,'ACTIVE',$done        
                            ]);

                            $sql = "insert into transaction(ref, studentID, fees, amountPaid, balance, term, session) values(?,?,?,?,?,?,?)";
                            $statement = $pdo->prepare($sql);
                            $q3 = $statement->execute([
                                $ref,$sid,$fees,'0',$fees,$term,$session    
                            ]);

                            $sql = "select * from parents where phone=?";
                            $statement = $pdo->prepare($sql);
                            $chck = $statement->execute([
                                $phone
                            ]);

                            $row = $chck->fetch(PDO::FETCH_OBJ);

                            if($row > 0)
                            {
                                $q2="done";
                            }
                            else
                            {
                                $sql = "insert into parents(email, lastName, otherNames, address, phone, password) values(?,?,?,?,?,?)";
                                $stmt = $pdo->prepare($sql);
                                $q2 = $stmt->execute([
                                    $email, $pLname, $POname, $pAddress,$phone,'password'
                                ]);
                            }
                            if($q and $q2)
                            {
                                echo "<div class='alert alert-success'>Operation Success </div>"; $sid="";
                                $lname=""; $fname=""; $oname=""; $address=""; $dob=""; $sex=""; $class=""; $pLname=""; $POname=""; $phone="";
                                $pAddress=""; 
                            }
                            else 
                            {
                                echo "<div class='alert alert-danger'>Operation Failed</div>";
                            }

                        }
                    }
                    
					?>
                	<form action="" method="post" enctype="multipart/form-data">
                    	<div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control " placeholder="Admission Number eg sec/2018/1001" value="" name="sid"/>
                        </div>
                    	<br>
                    	<div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control " placeholder="Last Name" value="" name="lname"/>
                        </div>
                    	<br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="First Name" value="" name="fname"/>
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Other Names" name="oname" value="" />
                        </div>
                        <br>
                        <div class="input-group col-lg-4">
                        	<select class="form-control" name="gender">
                            <option value="SELECT">Select Gender</option>
                            <option value="MALE">Male</option>
                            <option value="FEMALE">Female</option>
                            </select>
                        </div>
                        <br>
                        <div class="input-group">
                        	<textarea class="input-control" style="width:450px;" placeholder="Address" rows="4" name="address">
                                                        </textarea>
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-photo"></i></span>
                            <input type="file" class="form-control" placeholder="Picture" name="pic" />
                        </div>
                        
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" id="datePicker" data-date-format='yyyy-mm-dd'  placeholder="Date of Birth" name="dob" value="" />
                        </div>
                        <br>
                         <div class="input-group">
                        	<select class="form-control" name="stndtClass">
                            <option value="SELECT">Select Class</option>
                            
                           		 <?php
							// echo "<option value=''></option>";
							// 		$q = mysql_query("select * from classes order by `classid` ASC");
							// 		$rows = mysql_num_rows($q);
							// 		if ($rows>0)
							// 		{
							// 			for ($i=1; $i<=$rows; $i++)
							// 			{
							// 				$rec = mysql_fetch_array($q);
							// 				$cid = $rec["classid"];
											
							// 				echo "<option value='$cid'>$cid</option>";
							// 			}
                            // 		}
                                echo "<option value=''></option>";
                                $sql = "select * from classes order by `classid` ASC";
                                $statement = $pdo->prepare($sql);
                                $statement->execute();
                                $row = $statement->rowCount();

                                if($row > 0)
                                {
                                    for ($i=1; $i < $row; $i++) { 
                                        $rec = $statement->fetch(PDO::FETCH_OBJ);
                                        $cid = $rec->classid;
                                        echo "<option value='$cid'>$cid</option>";
                                    }
                                }

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
                            <input type="text" class="form-control" placeholder="Last Name" name="parentLname" value="" />
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Other Names" name="parentOname" value="" />
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="text" class="form-control" placeholder="Phone Number" name="phone" value="" />
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" placeholder="Email" name="email" value="" />
                        </div>
         				<br>
                        <div class="input-group col-lg-10">
                        	
                            <textarea  placeholder="Parent Address" style="width:450px" rows="4" name="pAddress">
                                                        </textarea>
                        </div>
                        
                        <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Submit" name="go" />
                        </div>
                         	
                    </form>
                </div>
            </div>
<!-- close -->
<?php pageBodyFooterSection();?>
<!--can right side bar here -->
<?php  endPage();?>