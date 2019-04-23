<?php include("../inc/html_controls.php");?>


<?php initializePage(); ?>

  		<?php pageBodyTopSection();?>



            <div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Search Students Scores
                    </h3>
                </div>
                
                <div class="box-body">
                		<form action="" method="post">
                        	<div class="input-group col-lg-8">
                            <input type="text" name="param" placeholder="Enter name or ID" class="form-control" />
                            <span class="input-group-btn"><a href=''><button class="btn btn-info btn-flat" type="button"><i class="fa fa-search"></i></button></a></span>
                            </div>
                        </form>
                        
                        <!-- search results here -->
                </div>
            </div>
		





<?php pageBodyFooterSection();?>

	<!--can right side bar here -->

   
<?php  endPage();?>