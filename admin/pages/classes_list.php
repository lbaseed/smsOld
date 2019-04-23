<?php include("../inc/html_controls.php");?>
<?php initializePage(); ?>
  		<?php pageBodyTopSection();?>
          <!-- open -->
          <div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">All Classes</h3>
                </div>
                
                <div class="box-body">
                	<table class="table table-hover">
                    <tr><th>#</th><th>Class ID</th><th>Population</th><th>Class Teacher</th></tr>
                    
                    <?php
					
							// $q = mysql_query("select * from classes order by `classid` ASC");
							// $rows = mysql_num_rows($q);
							// if ($rows>0)
							// {
							// 	for ($i=1; $i<=$rows; $i++)
							// 	{
							// 		$rec = mysql_fetch_array($q);
							// 		$cid = $rec["classid"]; $cTeacher = $rec["classTeacher"];
							// 		$split = explode("_", $cid);
									
							// 		$q1 = @mysql_query("select * from students where class='$split[0]' and subclass='$split[1]' and status='ACTIVE'");
							// 		if (@mysql_num_rows($q1)>0)
							// 		{
							// 		$population = @mysql_num_rows($q1);
							// 		}else
							// 		{$population = 0;}  
							// 		echo "<tr><td>$i</td><td>$cid</td><td> $population </td><td>$cTeacher</td></tr>";
							// 	}
                            // }
                            $sql = "select * from classes order by `classid` ASC";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute();
                            $rows =  $stmt->rowCount();
                            if($rows > 0)
                            {
                                for ($i=1; $i < $rows ; $i++) { 
                                   $rec = $stmt->fetch(PDO::FETCH_OBJ);
                                   $cid = $rec->classid; $cTeacher = $rec->classTeacher;
                                   $split = explode("_", $cid);

                                   $sql = "select * from students where class = :class and subclass = :subClass and status=:status";
                                   $stmt = $pdo->prepare($sql);
                                   $stmt->execute([':class'=> $split[0], ':subClass' => $split[1], ':status'=>'ACTIVE']);
                                   $rows = $stmt->rowCount();
                                    if($rows > 0)
                                    {
                                        $population = $stmt->rowCount();
                                    }
                                    else
                                    {
                                        $population = 0; 
                                    }
                                    echo "<tr><td>$i</td><td>$cid</td><td> $population </td><td>$cTeacher</td></tr>";

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