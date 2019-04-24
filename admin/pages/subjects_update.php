<?php include("../inc/html_controls.php");?>

<?php initializePage(); ?>

    <?php pageBodyTopSection();?>
    <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Update Subject</h3>
            </div>
            
            <div class="box-body">
                
                <form action="" method="post">
                
                    <div class="input-group col-lg-6">
                        
                        
                        <select class="form-control" name="Code">
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
                                    for ($i=1; $i < $rows; $i++) 
                                    { 
                                        $rec = $stmt->fetch(PDO::FETCH_OBJ);
                                        $sid = $rec->subjectID; $sTitle = $rec->subjectTitle;
                                        echo "<option value='$sid'>$sTitle</option>"; 
                                    }
                                }
                        
                        ?>
                        
                        </select>
                        <span class="input-group-btn"><button class="btn btn-primary" name="do" value="search"><i class="fa fa-search"></i></button></span>
                    
                        
                    </div>
                    
                </form>
                    <?php
                        // if ($_POST["do"]=="search")
                        // {
                        //     $subjectCode = mysql_real_escape_string(filter_var(strtoupper($_POST['Code']), FILTER_SANITIZE_STRING));
                            
                        //     $q3 = mysql_query("select * from subjects where subjectID='$subjectCode'");
                        //     if (@mysql_num_rows($q3)>0)
                        //     {
                                
                        //         $subjectTitle = mysql_result($q3, 0, "subjectTitle");
                        //         $type = mysql_result($q3, 0, "type");
                        //         $cat = mysql_result($q3, 0, "category");
                        //     }
                        // }
                        if(isset($_POST["do"])=="search")
                        {
                            $subjectCode = filter_var(strtoupper($_POST['Code']), FILTER_SANITIZE_STRING);
                            $sql = "select * from subjects where subjectID=:subjectID";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([':subjectID'=>$subjectCode]);
                            
                            $rows = $stmt->rowCount();
                            if($rows > 0)
                            {
                                $rec = $stmt->fetch(PDO::FETCH_OBJ);
                                $subjectTitle = $rec->subjectTitle;
                                $type = $rec->type;
                                $cat = $rec->category;
                            }
                        }
                    ?>
                <br>
                <?php
                
                    // if ($_POST["go"]=="Update")
                    // {
                    //     $subjectCode = mysql_real_escape_string(filter_var(strtoupper($_POST['sCode']), FILTER_SANITIZE_STRING));
                    //     $subjectTitle = mysql_real_escape_string(filter_var(strtoupper($_POST['sTitle']), FILTER_SANITIZE_STRING));
                    //     //$sTeacher = mysql_real_escape_string(filter_var(strtoupper($_POST['sTeacher']), FILTER_SANITIZE_STRING));
                    //     $type = $_POST["type"];
                    //     $cat = $_POST["category"];
                        
                    //     if ($subjectCode and $subjectTitle)
                    //     {
                            
                            
                    //         $q = mysql_query("update subjects set subjectTitle='$subjectTitle', type='$type', category='$cat' where subjectID='$subjectCode'") or die (mysql_error());
                            
                    //         if ($q) { echo "<div class='alert alert-success'>Operation Success </div>"; 
                    //         $subjectCode=""; $subjectTitle=""; $sTeacher = ""; $type =""; $cat="";}
                    //         else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
                            
                    //     }else {echo "<div class='alert alert-danger'>Fill all necessary fields</div>";}
                    // }
                    if(isset($_POST["go"]))
                    {
                        $subjectCode = filter_var(strtoupper($_POST['sCode']), FILTER_SANITIZE_STRING);
                        $subjectTitle = filter_var(strtoupper($_POST['sTitle']), FILTER_SANITIZE_STRING);
                        $sTeacher = filter_var(strtoupper($_POST['sTeacher']), FILTER_SANITIZE_STRING);
                        $type = $_POST["type"];
                        $cat = $_POST["category"]; 
                        if($subjectCode and $subjectTitle)
                        {
                            $sql = "update subjects set subjectTitle=:subjectTitle, type=:type, category=:category where subjectID=:subjectID";
                            $stmt = $pdo->prepare($sql);
                            $q = $stmt->execute([':subjectTitle'=> $subjectTitle,':type' => $type, ':category' => $cat, ':subjectID' => $subjectCode]);
                            if($q)
                            {
                                echo "<div class='alert alert-success'>Operation Success </div>";
                                $subjectCode = $subjectTitle = $sTeacher = $type = $cat = "";
                            }
                            else
                            {
                                echo "<div class='alert alert-danger'>Operation Failed</div>"; 
                            }
                        } 
                        else
                        {
                            echo "<div class='alert alert-danger'>Fill all necessary fields</div>";
                        } 
                    }
                ?>
                <form action="" method="post" enctype="multipart/form-data">
                
                    <div class="input-group col-lg-10">
                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                        <input type="hidden" name="sCode" value="<?php echo $subjectCode ?>" />
                        <input type="text" class="form-control" disabled="disabled" placeholder="Subject Code" value="<?php echo $subjectCode ?>"/>
                    </div>
                    
                    
                    <br>
                    <div class="input-group col-lg-10">
                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                        <input type="text" class="form-control" placeholder="Subject Title" name="sTitle" value="<?php echo $subjectTitle ?>" />
                    </div>
                    <br>
                    <div class="input-group">
                        <select class="form-control" name="sTeacher">
                        <option value="<?php echo $sTeacher?>"> <?php echo getStaffName($sTeacher) ." :: ". $sTeacher ?></option>
                        <?php

                                // $q = mysql_query("select * from staff order by `staffID` ASC");
                                // $rows = mysql_num_rows($q);
                                // if ($rows>0)
                                // {
                                //     for ($i=1; $i<=$rows; $i++)
                                //     {
                                //         $rec = mysql_fetch_array($q);
                                //         $sid = $rec["staffID"]; $fullName = $rec["lastName"] .", ". $rec["firstName"] ." ". $rec["othernames"];
                                        
                                //         echo "<option value='$sid'>$fullName :: $sid</option>";
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
                                        echo "<option value='$sid'>$fullName :: $sid</option>";
                                    }
                                }
                        
                        ?>
                        
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                    <b>Type of Subject</b>: <?php echo $type?> <br>
                    <div class="radio">
                    <label>
                        <input type="radio" value="CORE" name="type" />CORE
                        </label>
                        </div>  
                        <div class="radio">
                        <label>  
                        <input type="radio"  value="OPTIONAL" name="type" />OPTIONAL 
                        </label>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group">
                    <b>Subject Category</b>: <?php echo $cat?> <br>
                            <div class="radio">
                            <label>
                                <input type="radio" value="BASIC" name="category" />BASIC
                                </label>
                                </div>  
                                <div class="radio">
                                <label>  
                                <input type="radio"  value="POSTBASIC" name="category" />POST-BASIC 
                                </label>
                            </div>
                            <div class="radio">
                                <label>  
                                <input type="radio"  value="BOTH" name="category" />BOTH BASIC AND POST-BASIC
                                </label>
                            </div>
                    </div>
                    
                    <br>
                    <div class="input-group pull-right col-lg-4">
                        <input type="submit" class="btn btn-info" value="Update" name="go" />
                    </div>
                        
                </form>
            </div>
        </div>
<!-- closed -->
<?php pageBodyFooterSection();?>

	<!--can right side bar here -->
<?php  endPage();?>


