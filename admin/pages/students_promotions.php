<?php include("../inc/html_controls.php");?>


<?php initializePage(); ?>

  		<?php pageBodyTopSection();?>


          <div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Process Promotions 
                    	<?php
                        	echo " || Currently working on <b>"; if (isset($_GET["class"])) {echo $_GET["class"];} echo "</b>";
						?>
                    </h3>
                </div>
                
                <div class="box-body">
                <form action="" method="get">
                <table class="table">
                <tr><td width="250">
                		<input type="hidden" name="id" value="62" />
                        	<select class="form-control" name="class">
                            <?php if ($_GET["class"]!=""){?>
                            <option selected="selected" value="<?php echo $_GET["class"]?>"><?php echo $_GET["class"]?></option>
                            <option value=""></option>
                            <?php } else {?>
                            <option value="">Select Class</option>
                            <?php }?>
                             
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
                            
                            </td><td>
                            <button type="submit" class="btn btn-success" >Go</button>
                            </td></tr></table>
                </form><hr>
                        
                        <?php
                        	if (isset($_GET["class"])!="")
							{
									//process promotion code
								if (isset($_POST["promotion"])=="process")
								{
									$currClass = $_GET["class"];
									$proClass = $_POST["proClass"];
									$criteria = mysql_real_escape_string(filter_var($_POST["numCredits"],FILTER_SANITIZE_STRING));
									
									if ($criteria and $proClass)
									{
										$promotion = processPromotion($currClass, $proClass, $criteria);
										$splitNumPro = explode("-",$promotion);
										
										echo "<div class='alert alert-success'>Promotion Successfully Processed</div>";
										
									}else{ echo "<div class='alert alert-danger'>Fill All Necessary Fields Please</div>";}
								}
						?>
                        
                        	<form action="" method="post">
                            	<table class="table">
                            		<tr> <td width="250"><input type="text" placeholder="Minimum Credits" class="form-control" name="numCredits" /></td>
                                    <td> &nbsp </td></tr>
                                    <tr> <td>Select class after promotion</td>
                                    	<td>
                                        <select name="proClass" class="form-control">
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
                                        </td>
                                    </tr>
                                    <tr> <td> &nbsp </td> <td> 
									
                                    <?php //if ($_SESSION["term"]=="THIRD") {?>
									<?php if (1==1) {?>
                                    <button type="submit" name="promotion" value="process" class="btn btn-info" >Process Promotion</button> 
                                    <?php }?>
                                    </td> </tr>
                                </table>
                            </form>
                        <hr>
                        
                        	<b>Promotion Summary</b>  
                          <table class="table table-hover">
                          <tr> <td>Number of Promoted Students</td> <td> <?php echo isset($splitNumPro[0])?> </td> </tr>
                          <tr> <td>Number of Not Promoted Students</td> <td> <?php echo isset($splitNumPro[1])?> </td> </tr>
                          </table>
                         
                        <?php }?>
                </div>
             </div>
		


<?php pageBodyFooterSection();?>

	<!--can right side bar here -->

   
<?php  endPage();?>