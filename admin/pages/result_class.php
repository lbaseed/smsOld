<?php include("../inc/html_controls.php");?>
<?php initializePage(); ?>
  		<?php pageBodyTopSection();?>
	<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Generate Students Report Sheet
                    	<?php
                        	echo "For <b>"; if (isset($_GET["class"])) {echo $_GET["class"]; } echo "</b>";
						?>
                    </h3>
                </div>
                
                <div class="box-body">
                
                <form action="" method="get" enctype="multipart/form-data">
                    
                     
                        <div class="input-group">
                        	<select class="form-control" name="class">
                            <option value="">Select Class</option>
                            <?php
							
									$stmt = $pdo->query("SELECT * FROM classes ORDER BY `classid` ASC");

									$rows = $stmt->rowCount();
									if ($rows>0)
									{
										
										while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {

											echo "<option value='$row->classid'>$row->classid</option>";

										}

									}
                    			?>
                            </select>
                       	<input type="hidden" name="id" value="81" />
                       
                        </div>
                     
                        
                        <div class="input-group pull-right col-lg-7">
                            <input type="submit" class="btn btn-info" value="Submit" name="go" />
                        </div>
                         	
                    </form>
                    <br><hr>
                     <div class="input-group">
                    <?php
                    		if (isset($_GET["class"])) 
							{ 
								$class = $_GET["class"];
								echo "
									 <a href='../forms/classResult.php?class=$class' target='_blank'>
                    					<button type='button' class='btn btn-primary'>All Report Sheets</button>
                   					 </a> &nbsp &nbsp &nbsp &nbsp
								";
								if ($_SESSION["term"]=="THIRD")
								{
									echo "
										<a href='../forms/classResultCumulative.php?class=$class' target='_blank'>
                    					<button type='button' class='btn btn-primary'>Cumulative Report Sheet</button>
                   						</a>
									";
								}
							} else { $class = "";}
					?>
                   <hr>
                   Single Report Sheet
                   	<form action="forms/singleReportSheet.php" target="_blank" method="get">
                        		
                                 <div class="input-group">
                                
                                 	<input type="text" class="form-control" name="studentID" placeholder="Student ID" />
                                    <span class="input-group-btn">
                                        <button class="btn btn-info btn-flat" name="search" value="go" type="submit">Go!</button></span>
                                        
                                 </div>
    
                     </form>
                     <?php if ($_SESSION["term"]=="THIRD"){?>
                     Single Report Sheet Cumulative
                     <form action="forms/singleReportSheetCumulative.php" target="_blank" method="get">
                        		
                                 <div class="input-group">
                                
                                 	<input type="text" class="form-control" name="studentID" placeholder="Student ID" />
                                    <span class="input-group-btn">
                                        <button class="btn btn-info btn-flat" name="search" value="go" type="submit">Go!</button></span>
                                        
                                 </div>
    
                     </form>
                    	<?php }?>
                    </div>
                    
                    <br>
                	
                </div>
                
           	</div>
		 <?php pageBodyFooterSection();?>
<!--can right side bar here -->
<?php  endPage();?>
