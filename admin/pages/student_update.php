<?php include("../inc/html_controls.php");?>

<?php initializePage(); ?>

    <?php pageBodyTopSection();?>
<!-- content -->
<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Update Student Details</h3>
                </div>
                
                <div class="box-body">
                	<div class="row col-lg-10">
                        <form action="" method="get">
                        	<div class="input-group col-lg-9">
                            <input type="text" class="form-control" placeholder="Enter ID to search" name="sid" />
                            <input type="hidden" name="id" value="34" />
                            <span class="input-group-btn"><button class="btn btn-info btn-flat" type="submit">GO! <i class="fa fa-search"></i></button></span>
                        </div>
                        
                        
                    <?php

                        if(isset($_POST["updateRec"])){
                            $u_surname = trim($_POST["lname"]);
                        	$u_firstName = trim($_POST["fname"]);
                        	$u_otherName = trim($_POST["oname"]);
                        	$u_gender = trim($_POST["gender"]);
                        	$u_address = trim($_POST["address"]);
                        	$u_dob = trim($_POST["dob"]);
                        	$u_class = trim($_POST["stndtClass"]);

                        	$u_parent_email = trim($_POST["email"]);
                        	$u_parent_address = mysql_real_escape_string(trim($_POST["pAddress"]));

                            $pic = $_FILES["pic"]["name"];
                            if ($pic){
                            $u_id = str_replace("/", "_", $id);
                            upload("pic", $u_id, "students", 400*1024);

                            }
                        $stmt = $pdo->prepare("update students set lastName =:lastName, firstName= :firstName, otherNames=:otherNames, gender=:gender, dob=:dob, address=:address where studentID=:studentID");
                        $stmt->execute(['lastName'=>$u_surname,
                                'firstName'=>$u_firstName,
                                'otherNames'=>$u_otherName,
                                'gender' => $u_gender,
                                'dob'=> $u_dob,
                                'address'=>$u_address,
                                'studentID'=>$id
                            ]);
                        }

                        //fetch data query
                        $stmt = $pdo->prepare("select * from students where studentID=:studentID");
                        $stmt->execute(['studentID'=>$id ]);
                        if($stmt->rowCount() > 0){
                            $row = $stmt->fetch(PDO::FETCH_OBJ);
                            $lname = $row->lastName;
                            $fname = $row->firstName;
                            $oname = $row->otherNames;
                            $gender = $row->gender;
                            $address = $row->address;
                            $dob = $row->dob;
                            $class = $row->class.'_'.$row->subClass;
                            $pic = $row->pic;
                            $email = $row->parentID;
                        }

                        //update query
                    //     if (isset($_POST["updateRec"]))
                    //     {
                                
                    //     	$u_surname = mysql_real_escape_string(trim($_POST["lname"]));
                    //     	$u_firstName = mysql_real_escape_string(trim($_POST["fname"]));
                    //     	$u_otherName = mysql_real_escape_string(trim($_POST["oname"]));
                    //     	$u_gender = mysql_real_escape_string(trim($_POST["gender"]));
                    //     	$u_address = mysql_real_escape_string(trim($_POST["address"]));
                    //     	$u_dob = mysql_real_escape_string(trim($_POST["dob"]));
                    //     	$u_class = mysql_real_escape_string(trim($_POST["stndtClass"]));

                    //     	$u_parent_email = mysql_real_escape_string(trim($_POST["email"]));
                    //     	$u_parent_address = mysql_real_escape_string(trim($_POST["pAddress"]));

                    //     $pic = $_FILES["pic"]["name"];
                    //     if ($pic){
                    //     $u_id = str_replace("/", "_", $id);
                    //     upload("pic", $u_id, "students", 400*1024);
                    //     }
						

	                // $query = mysql_query("update students set lastName='$u_surname', firstName='$u_firstName', otherNames='$u_otherName', gender='$u_gender', dob='$u_dob', address='$u_address' where studentID='$id'");
					// 	}
						
					//fetch data query
                    	
						
						// $q = mysql_query("select * from students where studentID='$id'");
						
						// if (mysql_num_rows($q)>0)
						// {
						// 	$lname = mysql_result($q,0,"lastName");
						// 	$fname = mysql_result($q,0,"firstName");
						// 	$oname = mysql_result($q,0,"otherNames");
						// 	$gender = mysql_result($q,0,"gender");
						// 	$address= mysql_result($q,0,"address");
						// 	$dob = mysql_result($q,0,"dob");
						// 	$class = mysql_result($q,0,"class") . "_" . mysql_result($q,0,"subClass");
						// 	$pic = mysql_result($q,0,"pic");
						// 	$email = mysql_result($q,0,"parentID");
						// }
					?>
                    	
                        </form>
                        <img class="img img-circle pull-right"  width="150" height="150" src="files/students/<?php echo $pic?>" />
                        </div>
                	<form action="" method="post" enctype="multipart/form-data">
                    
                    	<div class="input-group col-lg-10">
                        	<label>Student ID:</label> <label class="form-control"><?php echo $id; ?></label>
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Last Name" name="lname" value="<?php echo $lname?>"/>
                        </div>
                    	<br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="First Name" name="fname" value="<?php echo $fname?>"/>
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Other Names" name="oname" value="<?php echo $oname?>" />
                        </div>
                        <br>
                        <div class="input-group col-lg-4">
                        	<select class="form-control" name="gender">
                            <option value="SELECT">Select Gender</option>
                            <option value="<?php echo $gender?>" selected><?php echo $gender?></option>
                            <option value="MALE">Male</option>
                            <option value="FEMALE">Female</option>
                            </select>
                        </div>
                        <br>
                        <div class="input-group">
                        	<textarea class="input-control" style="width:450px;" placeholder="Address" rows="4" name="address">
                            <?php echo $address?>
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
                            <input type="text" class="form-control" placeholder="Date of Birth" name="dob" id="datepicker" data-date-format='yyyy-mm-dd' value="<?php echo $dob?>" />
                        </div>
                        <br>
                         <div class="input-group">
                        	<select class="form-control" name="stndtClass">
                            <option value="SELECT">Select Class</option>
                            
                           		 <?php
                                 echo "<option value='$class' selected >$class</option>";
                                 $sql = "select * from classes order by `classid` ASC";
                                 $stmt = $pdo->prepare($sql);
                                 $stmt->execute();
                                 if($stmt->rowCount() > 0){
                                     $i=1;
                                     while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                                        $cid = $row->classid;
                                        echo "<option value='$cid'>$cid</option>";
                                        $i++;
                                     }
                                 }   
							// echo "<option value='$class' selected >$class</option>";

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
                    			?>
                            
                            </select>
                        </div>
                        <br>
                        <hr>
                        <div class="input-group">
                        	<label class="input-control">Parent/Guardian Information</label>
                        </div>
                        <br>
                        <?php
                            $sql = "select * from parents where phone=:phone";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute(['phone'=>$email]);
                            if($stmt->rowCount() > 0 ){
                                $row = $stmt->fetch(PDO::FETCH_OBJ);
                                $pFullName = $row->lastName.",  ".$row->otherNames;
                                $pAdd = $row->address;
                                $pPhone = $row->phone; $pEmail = $row->email;
                            }
                        	// $q2 = mysql_query("select * from parents where phone='$email'");
							// if (mysql_num_rows($q2)>0)
							// {
							// 	$pFullName = mysql_result($q2, 0, "lastName") .",  ". mysql_result($q2, 0, "otherNames");
							// 	$pAdd = mysql_result($q2, 0, "address");
							// 	$pPhone = mysql_result($q2, 0, "phone"); $pEmail = mysql_result($q2, 0, "email");
							// }
						?>
                        <div class="input-group col-lg-10">
                        	<label>Full Name</label>: <label class="form-control"><?php echo $pFullName?></label>
                        </div>
                        
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="text" class="form-control" placeholder="Phone Number" name="phone" disabled value="<?php echo $pPhone?>" />
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $pEmail?>" />
                        </div>
         				<br>
                        <div class="input-group col-lg-10">
                        	
                            <textarea placeholder="Parent Address" style="width:450px" rows="4" name="pAddress">
                            <?php echo $pAdd;?>
                            </textarea>
                        </div>
                        
                        <br>
                        <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Update" name="updateRec" />
                        </div>
                         	
                    </form>
                </div>
            </div>

<?php pageBodyFooterSection();?>

	<!--can right side bar here -->
<?php  endPage();?>
