<?php include("../inc/html_controls.php");?>


<?php initializePage(); ?>

  		<?php pageBodyTopSection();?>

				<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">New Staff Registration</h3>
                </div>
                
                <div class="box-body">
                	<?php
                    		if (isset($_POST["go"])=="Register")
							{
								$sid = mysql_real_escape_string(filter_var(strtoupper($_POST['staffID']), FILTER_SANITIZE_STRING));
								$lname= mysql_real_escape_string(filter_var(strtoupper($_POST['lname']), FILTER_SANITIZE_STRING));
								$fname = mysql_real_escape_string(filter_var(strtoupper($_POST['fname']), FILTER_SANITIZE_STRING));
								$oname = mysql_real_escape_string(filter_var(strtoupper($_POST['oname']), FILTER_SANITIZE_STRING));
								$gender = mysql_real_escape_string(filter_var(strtoupper($_POST['gender']), FILTER_SANITIZE_STRING));
								$dob = mysql_real_escape_string(filter_var(strtoupper($_POST['dob']), FILTER_SANITIZE_STRING));
								$phone = mysql_real_escape_string(filter_var(strtoupper($_POST['phone']), FILTER_SANITIZE_STRING));
								$email = mysql_real_escape_string(filter_var($_POST['email'], FILTER_SANITIZE_STRING));
								$address = mysql_real_escape_string(filter_var(strtoupper(trim($_POST['address'])), FILTER_SANITIZE_STRING));
								$clrs = mysql_real_escape_string(filter_var(strtoupper($_POST['clrs']), FILTER_SANITIZE_STRING));
								
								if ($sid and $lname and $gender and $clrs)
								{
									$nsid = str_replace("/","_", $sid);
									$done = upload("pic", $nsid, "staff", 1024*800);
									
									if ($done)
									{
										//sql query to insert into staffs table
										$q = mysql_query("insert into staff values('$sid','password','$lname','$fname','$oname', '$gender','$dob','$address','$phone','$email','$clrs','$done','','','','ACTIVE')") or die (mysql_error());
										
										if ($q)  { echo "<div class='alert alert-success'>Operation Success </div>";
											
											//empty all variables
											$sid = ""; $lname= "";	$fname = ""; $oname = "";  $gender = "";  $phone = ""; $email = "";
											$address = "";  $clrs = "";
										}
										else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
									}
								}else {echo "<div class='alert alert-danger'>Fill all necessary fields</div>";}
							}
							
					?>
                	<form action="" method="post" enctype="multipart/form-data">
                    	<div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control " placeholder="Staff ID" name="staffID" 
value=""/>
                        </div>
                    	<br>
                    	<div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control " placeholder="Last Name" name="lname" value=""/>
                        </div>
                    	<br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="First Name" name="fname" value=""/>
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Other Names" name="oname" value=""/>
                        </div>
                        <br>
                        <div class="input-group col-lg-4">
                        	<select class="form-control" name="gender">
                            <option value="">Select Gender</option>
                            <option value="MALE">Male</option>
                            <option value="FEMALE">Female</option>
                            </select>
                        </div>
                         <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" placeholder="Date of Birth" name="dob" value=""/>
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-photo"></i></span>
                            <input type="file" class="form-control" placeholder="Picture" name="pic" />
                        </div>
                        
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="text" class="form-control" placeholder="Phone Number" name="phone" value=""/>
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" placeholder="Email" name="email" value=""/>
                        </div>
                        <br>
                        <div class="input-group">
                        	<textarea name="address" style="width:450px;" rows="4" placeholder="Staff Address" value="">                            </textarea>
                        </div>
                        <br>
                        <div class="input-group col-lg-4">
                        	<select class="form-control" name="clrs">
                            <option value="">Select Clearance</option>
                            <option value="ADMIN">ADMIN</option>
                            <option value="PRINCIPAL">PRINCIPAL</option>
                            <option value="ACCOUNTANT">ACCOUNTANT</option>
                            <option value="DEAN">DEAN</option>
                            <option value="EOFFICER">EXAM OFFICER</option>
                            <option value="STAFF">STAFF</option>
                            </select>
                        </div>
                        <br>
                        <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Register" name="go" />
                        </div>
                         	
                    </form>
                </div>
            </div>

		<?php pageBodyFooterSection();?>

	<!--can right side bar here -->

   
<?php  endPage();?>
