<?php include("../inc/html_controls.php");?>
<?php initializePage(); ?>
  		<?php pageBodyTopSection();?>
<!-- open -->
<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Update Class</h3>
                </div>
                
                <div class="box-body">
                    <?php
                        if(isset($_POST['go']))
                        {
                            $mclass = strtoupper($_POST['lname']);
                            $sclass = strtoupper($_POST['pnum']);
                            $class = $mclass.'_'. $sclass;
                            
                            $sql = "insert into classes(classid) values(:classid)";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([':classid'=> $class]);
                        }

                    ?>

            
                	<form action="" method="post" enctype="multipart/form-data">
                    
                    	<div class="input-group col-lg-10">
                        	<span class="input-group-addon"></span>
                            <input type="text" class="form-control " placeholder="Main Class" name="lname"/>
                        </div>
                    	
                        
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"></span>
                            <input type="text" class="form-control" placeholder="Sub Class" name="pnum" />
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