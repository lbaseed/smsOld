<?php include("../inc/html_controls.php");?>
<?php initializePage(); ?>
  		<?php pageBodyTopSection();?>
<!-- open -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Assign Class Teacher</h3>
    </div>
    
    <div class="box-body">
    <?php
        // if ($_POST["go"]=="Assign")
        // {
        //     $staffID = $_POST["sTeacher"]; $class = $_POST["class"];
            
        //     if ($staffID and $class)
        //     {
        //         $q= mysql_query("update classes set classTeacher='$staffID' where classid='$class'");
                
        //         if ($q) { echo "<div class='alert alert-success'>Operation Success </div>";}
        //             else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
        //     }
        // }

        if(isset($_POST["go"]))
        {
            $staffID = $_POST["sTeacher"]; $class = $_POST["class"];
            if($staffID && $class)
            {
                $sql = "update classes set classTeacher=:classTeacher'' where classid = :classid";
                $stmt = $pdo->prepare($sql);
                if($stmt->execute([':classTeacher' => $staffID, ':classid' => $class]))
                {
                    echo "<div class='alert alert-success'>Operation Success </div>";  
                }else
                {
                    echo "<div class='alert alert-danger'>Operation Failed</div>";
                }
            }
        }
    ?>
        <form action="" method="post" enctype="multipart/form-data">
        
            
                <div class="input-group">
                <select class="form-control" name="class">
                <option value="">Select Class</option>
                    <?php
        
                        // $q = mysql_query("select * from classes order by `classid` ASC");
                        // $rows = mysql_num_rows($q);
                        // if ($rows>0)
                        // {
                        //     for ($i=1; $i<=$rows; $i++)
                        //     {
                        //         $rec = mysql_fetch_array($q);
                        //         $cid = $rec["classid"];
                                
                        //         echo "<option value='$cid'>$cid</option>";
                        //     }
                        // }

                        $sql = "select * from classes order by `classid` ASC";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                        $rows = $stmt->rowCount();
                        if($rows > 0)
                        {
                            for ($i=1; $i < $rows; $i++) { 
                                $rec = $stmt->fetch(PDO::FETCH_OBJ);
                                $cid = $rec->classid;
                                echo "<option value='$cid'>$cid</option>";
                            }
                        }
                    ?>
                
                </select>
            </div>
            <br>
            <div class="input-group">
                <select class="form-control" name="sTeacher">
                <option value="">Select Class Teacher</option>
                <?php
                    
                        // $q = mysql_query("select * from staff order by `staffID` ASC");
                        // $rows = mysql_num_rows($q);
                        // if ($rows>0)
                        // {
                        //     for ($i=1; $i<=$rows; $i++)
                        //     {
                        //         $rec = mysql_fetch_array($q);
                        //         $sid = $rec["staffID"]; $fullName = $rec["lastName"] .", ". $rec["firstName"] ." ". $rec["othernames"];
                        //         $chck = mysql_query("select * from classes where classTeacher='$sid'");
                                
                        //         if (@mysql_num_rows($chck)==0)
                        //         { 
                        //             echo "<option value='$sid'>$fullName : $sid</option>";
                        //         }
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
                               $sql = "select * from classes where classTeacher = :classTeacher";
                               $stmt = $pdo->prepare($sql);
                               $stmt->execute([':classTeacher' => $sid]);
                               $rows = $stmt->rowCount();
                               if($rows !== 0)
                               {
                                    echo "<option value='$sid'>$fullName : $sid</option>";
                               }
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
    </div>
</div>
<!-- closed -->
    <?php pageBodyFooterSection();?>
<!--can right side bar here -->
<?php  endPage();?>