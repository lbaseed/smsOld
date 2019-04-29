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