<?php include("../inc/html_controls.php");?>
<?php initializePage(); ?>
    <?php pageBodyTopSection();?>
    <!-- start -->
    <div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Enter Fees to Setup School Fees
                    </h3>
                </div>
                
                <div class="box-body">
                
                	<?php
                    		// if ($_POST["go"]=="OK")
							// {
							// 	$fees = mysql_real_escape_string(filter_var(($_POST["fees"]), FILTER_SANITIZE_STRING));
							// 	$Vterm = $_POST["term"];  $Vsession= $_POST["session"];
							// 	$recID = time();
							// 	if ($fees)
							// 	{
							// 		//check existernce of current amount
							// 		$chck = mysql_query("select * from fees where term='$Vterm'  and session='$Vsession'");
							// 		if (@mysql_num_rows($chck)>0) {
							// 				$q = mysql_query("update fees set fees='$fees' where term='$Vterm' and session='$Vsession'");
											
							// 				if ($q)
							// 			{
							// 				echo "<div class='alert alert-success'>Fees Setup done</div>";
							// 			}else { echo "<div class='alert alert-danger'>Operation Failed</div>";}
										
							// 			}
							// 		else
							// 		{
							// 			//insert fees
							// 		$q = mysql_query("insert into fees values('$recID','$fees','$Vterm','$Vsession')");
										
							// 			if ($q)
							// 			{
							// 				echo "<div class='alert alert-success'>Fees Setup done</div>";
							// 			}else { echo "<div class='alert alert-danger'>Operation Failed</div>";}
							// 		}
							// 	}
                            // }
                            
                        if(isset($_POST["go"]))
                        {
                            $fees = $_POST["fees"];
                            $Vterm = $_POST["term"];  
                            $Vsession= $_POST["session"];
                            $recID = time();
                            if($fees)
                            {
                                $sql = "select * from fees where term=?  and session=?";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute([
                                    $Vterm,$Vsession
                                ]);
                                $row = $stmt->rowCount();
                                if($row > 0)
                                {
                                    $sql = "update fees set fees=? where term=? and session=?";
                                    $stmt = $pdo->prepare($sql);
                                    $q = $stmt->execute([
                                        $fees, $Vterm, $Vsession
                                    ]);

                                    if($q)
                                    {
                                        echo "<div class='alert alert-success'>Fees Setup done</div>";
                                        }else { echo "<div class='alert alert-danger'>Operation Failed</div>";}
                                }else
                                    {
                                        $sql = "insert into fees(recID, fees, term, session) values(?,?,?,?)";
                                        $stmt = $pdo->prepare($sql);
                                        $q = $stmt->execute([
                                            $recID,$fees,$Vterm,$Vsession   
                                        ]);

                                        if($q)
                                        {
                                            echo "<div class='alert alert-success'>Fees Setup done</div>";
                                        }
                                        else
                                        {
                                            echo "<div class='alert alert-danger'>Operation Failed</div>";
                                        }
                                        
                                    }
                                }
                        }

					?>
                		<form action="" method="post">
                        	
                            <div class="input-group col-lg-8">
                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                            	<input type="text" name="fees" placeholder="Enter fees Here" class="form-control" /> 
                                <span class="input-group-addon">.00</span>
                            </div>
                            <br>
                            <div class="input-group">
                            	<select class="form-control" name="term">
                                <option value="<?php echo $_SESSION["term"]?>" selected><?php echo $_SESSION["term"]?></option>
                                <option>FIRST</option> <option>SECOND</option> <option>THIRD</option>
                                </select>
                                
                                <select class="form-control" name="session">
                                <option value="<?php echo $_SESSION["session"]?>" selected><?php echo $_SESSION["session"]?></option>
                                <option>2014/2015</option> <option>2015/2016</option>
                                </select>
                            </div>
                            
                            <div class="input-group col-lg-7 pull-right">
                            	<input type="submit" name="go" value="OK" class="btn btn-info" />
                            </div>
                        </form>
                </div>
           	</div>

        
    <!-- stop -->
    <?php pageBodyFooterSection();?>
<!--can right side bar here -->
<?php  endPage();?>