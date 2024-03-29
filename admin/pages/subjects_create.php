<?php include("../inc/html_controls.php");?>

<?php initializePage(); ?>

    <?php pageBodyTopSection();?>
<!-- open -->
<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Create Subject</h3>
                </div>
                
                <div class="box-body">
                	
                    <?php
                        
                        if(isset($_POST["go"]) == "Create")
                        {
                            $subjectCode = filter_var(strtoupper($_POST['sCode']), FILTER_SANITIZE_STRING);
                            $subjectTitle = filter_var(strtoupper($_POST['sTitle']), FILTER_SANITIZE_STRING);

                            $type = $_POST["type"];
                            $cat = $_POST["category"];

                            if($subjectCode && $subjectTitle && $type && $cat)
                            {
                                $sql = "select * from subjects where subjectID =:subjectID";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute([':subjectID'=> $subjectCode ]);
                                $rows = $stmt->rowCount();
                                if($rows > 0)
                                {
                                    echo "<div class='alert alert-info'>Duplicate entry for Subject Code</div>"; 
                                }
                                else
                                {
                                    $sql = "insert into subjects values(:subjectID,:subjectTitle,:type,:category,:status)";
                                    $stmt = $pdo->prepare($sql);
                                    $q = $stmt->execute(['subjectID'=>$subjectCode,':subjectTitle'=>$subjectTitle,':type'=>$type, ':category'=>$cat, ':status'=>'ACTIVE']);
                                    $tbl = "sc_".strtolower($subjectCode);
                                    $sql = "create table if not exists $tbl (id INT(11)  UNIQUE KEY AUTO_INCREMENT, recID varchar(150) NOT NULL,ref varchar(150) NOT NULL, studentID varchar(150) NOT NULL, ca1 varchar(150) NOT NULL, ca2 varchar(150) NOT NULL, ca3 varchar(150) NOT NULL, ca4 varchar(150) NOT NULL, exam varchar(150) NOT NULL, total varchar(150) NOT NULL, term varchar(150) NOT NULL, session varchar(150) NOT NULL, PRIMARY KEY (`recID`));";
                                    $stmt = $pdo->prepare($sql);
                                    $q2 = $stmt->execute();
                                    if($q and $q2)
                                    {
                                        echo "<div class='alert alert-success'>Operation Success </div>"; 
                                        $subjectCode=""; $subjectTitle=""; 
                                    }
                                    else
                                    {
                                        echo "<div class='alert alert-danger'>Operation Failed</div>"; 
                                    }
                                    
                                }
                            }
                        }
					?>
                	<form action="" method="post" enctype="multipart/form-data">
                    
                    	<div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control " placeholder="Subject Code" name="sCode"/>
                        </div>
                    	
                        
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Subject Title" name="sTitle" />
                        </div>
                       
                        <br>
                        <div class="form-group">
                        <b>Type of Subject</b><br>
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
                        <b>Subject Category</b><br>
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
                        <div class="input-group col-lg-4">
                            <input type="submit" class="btn" value="Create" name="go" />
                        </div>
                         	
                    </form>
                </div>
            </div>
<!-- closed -->
<?php pageBodyFooterSection();?>

	<!--can right side bar here -->
<?php  endPage();?>
