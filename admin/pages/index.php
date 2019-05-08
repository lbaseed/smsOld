<?php include "../inc/html_controls.php";?>
<?php
										$_SESSION["smuser"] = 'SP/1001';
										$_SESSION["clrs"] = "ADMIN";
										//$_SESSION["pic"] = $pic;
?>


<?php initializePage(); ?>

  		<?php pageBodyTopSection();?>
						<?php
                       /*     
                            if (isset($_GET['id'])) { $a= $_GET['id'];} else {$a=99;}
                            
                            if ($a==99) {dashboard();}
							
							//first dropdown  [manage staff]
                            if ($a==11) {regsiterNewStaff();}
                            if ($a==12) {listofStaff();}
                            if ($a==13) {assignDuties();}
                            if ($a==14) {assignClasses();}
                            if ($a==15) {assignSubjects();}
                            if ($a==16) {staffSearch();}
							
							//@todo-kolerian
							//second dropdown  [manage school fees]
                            if ($a==21) {processPayments();}
							if ($a==22) {studentsPayments();}
							if ($a==23) {paymentsStat;}
							if ($a==24) {feesSetup();}
							if ($a==25) {paymentsHistory();}
							if ($a==26) {searchPayments();}
							
							//@todo-kolerian
							//third dropdown  [manage students]
							if ($a==31) {registerNewStudent();}
							if ($a==32) {allStudents();}
							if ($a==33) {registerSubjects();}
							if ($a==34) {updateStudent();}
							if ($a==35) {searchStudents();}
							
							//fourth dropdown  [manage classes] @Kole Todo
							if ($a==41) {createClass();}
							if ($a==42) {allClasses();}
							if ($a==43) {assignClassTeacher();}
							if ($a==44) {updateClass();}
							
							//fifth dropdown  [manage subjects]@Kole todo
							if ($a==51) {createSubject();}
							if ($a==52) {allSubjects();}
							if ($a==53) {assignSubjectTeacher();}
							if ($a==54) {updateSubject();}
							

							
							//sixth dropdown  [Students records]
							if ($a==61) {studentsScores();}
							if ($a==62) {promotions();}
							if ($a==63) {scoreAnalysis();}
							if ($a==64) {scoresSearch();}
							
							//seventh dropdown  [Manage Scores]
							if ($a==71) {subjectScores();}
							if ($a==72) {grading();}
							
							//eight dropdown  [results]
							if ($a==81) {ClassResults();}
							if ($a==82) {ratings();}
							
							//nineth dropdown  [school calender]
							if ($a==91) {schoolCalender();}
							
							//tenth dropdown  [mailbox]
							if ($a==101) {mailBox();}
							
							//eleventh dropdown  [complaints and suggestions]
							if ($a==111) {complaintsAndSuggestions();}
							
							//profile
							if ($a==121) {profile();}
							
							//settings
							if ($a==131) {settings();}
						
						*/
                        ?>
          <?php pageBodyFooterSection();?>

   
<?php  endPage();?>

