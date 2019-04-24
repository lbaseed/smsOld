<?php include("../inc/html_controls.php");?>
<?php initializePage(); ?>
  		<?php pageBodyTopSection();?>
<!-- open -->
<div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Assign Subjects to Teachers</h3>
        </div>
        
        <div class="box-body">
        
                <?php
                    // if ($_POST["go"]=="Assign")
                    // {
                    //     $staffID = $_POST["sTeacher"];  $subject = $_POST["subject"];
                    //     $classID = $_POST["classID"]; $recID = time();
                    //     if ($subject and $staffID and $classID)
                    //     {
                    //         $chck = mysql_query("select * from subject_allocation where staffID='$staffID' and subjectID='$subject' and classID='$classID'");
                    //         if (@mysql_num_rows($chck)>0) {echo "<div class='alert alert-info'>Teacher has already been allocated to this Subject</div>";}
                    //         else
                    //         {
                    //         $q = mysql_query("insert into subject_allocation values('$recID','$staffID','$subject','$classID')");
                            
                    //         if ($q) { echo "<div class='alert alert-success'>Operation Success </div>"; }
                    //             else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
                    //         }
                    //     } else {echo "<div class='alert alert-danger'>Make all Sellections</div>";}
                    // }
                    if(isset($_POST["go"]) == "Assign")
                    {
                        $staffID = $_POST["sTeacher"];  $subject = $_POST["subject"];
                        $classID = $_POST["classID"]; $recID = time();

                        if($subject and $staffID and $classID)
                        {
                            $sql = "select * from subject_allocation where staffID=:staffID and subjectID=:subjectID and classID=:classID";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([':staffID'=>$staffID, ':subjectID'=>$subject, 'classID'=>$classID]);
                            $rows = $stmt->fetch(PDO::FETCH_OBJ);
                            if($rows > 0)
                            {
                                echo "<div class='alert alert-info'>Teacher has already been allocated to this Subject</div>";
                            }
                            else
                            {
                                $sql = "insert into subject_allocation (recID, staffID, subjectID, classID) values(:recID, :staffID, :subjectID, :classID)";
                                $stmt = $pdo->prepare($sql);
                                $q = $stmt->execute([':recID'=>$recID, 'staffID'=>$staffID, 'subjectID'=>$subject,'classID'=>$classID]);
                                if($q)
                                {
                                    echo "<div class='alert alert-success'>Operation Success </div>"; 
                                }
                                else
                                {
                                    echo "<div class='alert alert-danger'>Operation Failed</div>"; 
                                }
                            }
                        }else
                        {
                            echo "<div class='alert alert-danger'>Make all Sellections</div>";
                        }
                    }
                ?>
            <form action="" method="post">
                
                <div class="input-group">
                    <select class="form-control" name="sTeacher">
                    <option value="">Select Subject Teacher</option>
                    <?php
                            // $q = mysql_query("select * from staff order by `staffID` ASC");
                            // $rows = mysql_num_rows($q);
                            // if ($rows>0)
                            // {
                            //     for ($i=1; $i<=$rows; $i++)
                            //     {
                            //         $rec = mysql_fetch_array($q);
                            //         $sid = $rec["staffID"]; $fullName = $rec["lastName"] .", ". $rec["firstName"] ." ". $rec["othernames"];
                                    
                            //         echo "<option value='$sid'>$fullName : $sid</option>";
                            //     }
                            // }

                        
                        $sql = "select * from staff order by `staffID` ASC";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                        $rows = $stmt->rowCount();
                        if($rows > 0)
                        {
                            for ($i=1; $i < $rows; $i++) { 
                                $rec = $stmt->fetch(PDO::FETCH_OBJ);
                                $sid = $rec->staffID; $fullName = $rec->lastName.', '.$rec->firstName.' '.$rec->othernames;
                                echo "<option value='$sid'>$fullName : $sid</option>";
                            }
                        }
                        
                    ?>
                    
                    </select>
                </div>
                <br>
                <div class="input-group">
                    <select class="form-control" name="subject">
                    <option value="">Select Subject</option>
                    <?php
                        
                            // $q = mysql_query("select * from subjects order by `subjectID` ASC");
                            // $rows = mysql_num_rows($q);
                            // if ($rows>0)
                            // {
                            //     for ($i=1; $i<=$rows; $i++)
                            //     {
                            //         $rec = mysql_fetch_array($q);
                            //         $sid = $rec["subjectID"]; $sTitle = $rec["subjectTitle"];
                                    
                            //         echo "<option value='$sid'>$sTitle</option>";
                            //     }
                            // }
                            
                            $sql = "select * from subjects order by `subjectID` ASC";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute();
                            $rows = $stmt->rowCount();
                            if($rows > 0)
                            {
                                $rec = $stmt->fetch(PDO::FETCH_OBJ);
                                $sid = $rec->subjectID; $sTitle = $rec->subjectTitle;
                                echo "<option value='$sid'>$sTitle</option>";
                            }
                            
                    
                    ?>
                    
                    </select>
                </div>
                    <br>
                <div class="input-group">
                    <select class="form-control" name="classID">
                    <option value="">Select Class</option>
                    <?php
                        
                        
                            // $q = mysql_query("select * from classes order by `classID` ASC");
                            // $rows = mysql_num_rows($q);
                            // if ($rows>0)
                            // {
                            //     for ($i=1; $i<=$rows; $i++)
                            //     {
                            //         $rec = mysql_fetch_array($q);
                            //         $sid = $rec["classid"]; 
                                    
                            //         echo "<option value='$sid'>$sid</option>";
                            //     }
                            // }

                            
                            $sql = "select * from classes order by `classID` ASC";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute();
                            $rows = $stmt->rowCount();
                            if($rows > 0)
                            {
                                for ($i=1; $i < $rows; $i++) 
                                { 
                                    $rec = $stmt->fetch(PDO::FETCH_OBJ);
                                    $sid = $rec->classid;
                                    echo "<option value='$sid'>$sid</option>";
                                }
                            }
                        ?>
                    
                    </select>
                </div>
                <br>
                <div class="input-group pull-right col-lg-4">
                    <input type="submit" class="btn btn-info" value="Assign" name="go" />
                </div>
            </form>
            
            <table class="table table-hover">
            <tr> <th>#</th> <th>Staff ID</th> <th>Staff Name</th> <th>Subject</th> <th>Class</th> </tr>
            <?php
                
                // $fq = mysql_query("select * from subject_allocation order by `staffID` ASC");
                
                // if (@mysql_num_rows($fq)>0)
                // {
                //     for ($i=1; $i<=@mysql_num_rows($fq); $i++)
                //     {
                //         $frec = mysql_fetch_array($fq);
                        
                //         $fStaffID = $frec["staffID"]; $fSid = $frec["subjectID"]; $fClassID = $frec["classID"];
                //         $staffName = getStaffName($fStaffID); $subjectName = getSubjectName($fSid);
                        
                //         echo "<tr> <td>$i</td> <td>$fStaffID</td> <td>$staffName</td> <td>$subjectName</td> <td>$fClassID</td> </tr>";
                //     }
                // }

                
                $sql = "select * from subject_allocation order by `staffID` ASC";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $rows = $stmt->rowCount();
                if($rows > 0)
                {
                    for ($i=1; $i < $rows; $i++) 
                    { 
                        $frec = $stmt->fetch(PDO::FETCH_OBJ);
                        $fStaffID = $frec->staffID; $fSid = $frec->subjectID; $fClassID = $frec->classID;
                        $staffName = getStaffName($fStaffID); $subjectName = getSubjectName($fSid);
                        echo "<tr> <td>$i</td> <td>$fStaffID</td> <td>$staffName</td> <td>$subjectName</td> <td>$fClassID</td> </tr>";   
                    }
                }
            
            ?>
            </table>
        </div>
    </div>
<!-- closed -->
<?php pageBodyFooterSection();?>
<!--can right side bar here -->
<?php  endPage();?>