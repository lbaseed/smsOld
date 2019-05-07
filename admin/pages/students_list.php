<?php include("../inc/html_controls.php");?>

<?php initializePage(); ?>

<?php pageBodyTopSection();?>
<!-- content -->

<div class="box box-info">
<div class="box-header with-border">
    <h3 class="box-title">All Students</h3>
</div>

<div class="box-body">
    <table class="table table-hover">
    <tr><th>#</th><th>Student ID</th><th>Full Name</th><th>Date of Birth</th><th>Class</th></tr>
    <?php

         $sql = 'select * from students order by `studentID` ASC';
         $stmt = $pdo->prepare($sql);
         $stmt->execute();
         $i=1;
         while ($row = $stmt->fetch(PDO::FETCH_OBJ)){
            $sid = $row->studentID;
            $fullName = $row->lastName.', &nbsp '.$row->firstName.' &nbsp '.$row->otherNames;
            $dob = $row->dob; $class = $row->class.' - '.$row->subClass;
            echo "<tr><td>$i</td> <td> <a href='?sid=$sid'>$sid</a></td> <td>$fullName</td> <td>$dob</td> <td>$class</td></tr>";
            $i++;
         }
    ?>
    </table>
</div>
<!--end of box body-->
</div>



<?php pageBodyFooterSection();?>

	<!--can right side bar here -->
<?php  endPage();?>
