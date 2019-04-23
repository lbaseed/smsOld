<?php include("../inc/html_controls.php");?>

<?php initializePage(); ?>

    <?php pageBodyTopSection();?>
<!-- open -->
<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">All Subjects</h3>
                </div>
                
                <div class="box-body">
                	<table class="table table-hover">
                    <tr><th>#</th><th>Subject Code</th><th>Subject Title</th><th>Tytpe</th><th>Category</th><th>Subject Teacher</th></tr>
                    
                    <?php
					
                        // $q = mysql_query("select * from subjects order by `subjectid` ASC");
                        // $rows = mysql_num_rows($q);
                        // if ($rows>0)
                        // {
                        //     for ($i=1; $i<=$rows; $i++)
                        //     {
                        //         $rec = mysql_fetch_array($q);
                        //         $sid = $rec["subjectID"]; $sTitle= $rec["subjectTitle"]; $sTeacher = $rec["subjectTeacher"];
                        //         $type = $rec["type"];  $cat = $rec["category"];
                        //         echo "<tr><td>$i</td><td><a href=''>$sid</a></td> <td>$sTitle</td> <td>$type</td> <td>$cat</td>
                        //         <td>
                        //         <a href=''>".getStaffName($sTeacher)."</a>
                        //         </td></tr>";
                        //     }
                        // }

                        $sql = "select * from subjects order by `subjectid` ASC";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                        $rows = $stmt->rowCount();
                        if($rows > 0)
                        {
                            for ($i=1; $i < $rows ; $i++) 
                            { 
                               $rec = $stmt->fetch(PDO::FETCH_OBJ);
                               $sid = $rec->subjectID; $sTitle = $rec->subjectTitle; 
                               $sTeacher = $rec->subjectID;
                               $type = $rec->type; $cat = $rec->category;
                               echo "<tr><td>$i</td><td><a href=''>$sid</a></td> <td>$sTitle</td> <td>$type</td> <td>$cat</td>
                                       <td>
                                       <a href=''>".getStaffName($sTeacher)."</a>
                                       </td></tr>";
                            }
                        }
                    ?>
                    </table>
                </div>
                <!--end of box body-->
            </div>
<!-- closed -->
<?php pageBodyFooterSection();?>

	<!--can right side bar here -->
<?php  endPage();?>
