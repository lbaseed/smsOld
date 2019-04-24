<?php
    $page = end(explode('/', $_SERVER['SCRIPT_NAME'])); 
?>

<ul class="sidebar-menu">
        <li class="header" style="color:#FFF">MAIN NAVIGATION</li>

        <li class="<?php if ($page == 'index.php') {echo 'active';} ?> treeview">
          <a href='index.php'>
            <i class='fa fa-dashboard'></i> <span>Dashboard</span>
          </a>
        </li>


        <li class="<?php if ($page == 'new_staff.php' || $page == 'staff_list.php' || $page == 'staff_assign_duties.php' || $page == 'staff_assign_classes.php' || $page == 'staff_assign_subject.php' || $page == 'staff_search.php' ) {echo 'active';} ?> treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Manage Staff</span>
            <span class="fa fa-angle-left pull-right"></span>
          </a>
          <ul class="treeview-menu">
				<li class="<?php if ($page == 'new_staff.php') {echo 'active';} ?>"><a href='new_staff.php'><i class='fa fa-circle-o'></i> Register New Staff</a></li>
				<li class="<?php if ($page == 'staff_list.php') {echo 'active';} ?>"><a href='staff_list.php'><i class='fa fa-circle-o'></i> List of Staff</a></li>
				<li class="<?php if ($page == 'staff_assign_duties.php') {echo 'active';} ?>"><a href='staff_assign_duties.php'><i class='fa fa-circle-o'></i> Assign Duties</a></li>
				<li class="<?php if ($page == 'staff_assign_classes.php') {echo 'active';} ?>"><a href='staff_assign_classes.php'><i class='fa fa-circle-o'></i> Assign Classes</a></li>
				<li class="<?php if ($page == 'staff_assign_subject.php') {echo 'active';} ?>"><a href='staff_assign_subject.php'><i class='fa fa-circle-o'></i> Assign Subjects</a></li>
				<li class="<?php if ($page == 'staff_search.php') {echo 'active';} ?>"><a href='staff_search.php'><i class='fa fa-search'></i> Search</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Manage School Fees</span>
            <span class="fa fa-angle-left pull-right"></span>
          </a>
          <ul class="treeview-menu">
          <?php
		   echo "
            <li><a href='index.php?id=21'><i class='fa fa-circle-o'></i> Process Payments</i></a></li>
            <li><a href='index.php?id=22'><i class='fa fa-circle-o'></i> Students Payments</a></li>
            <li><a href='index.php?id=23'><i class='fa fa-circle-o'></i> Payment Statistics</a></li>
            <li><a href='index.php?id=24'><i class='fa fa-circle-o'></i> Set Up Fees to be paid</a></li>
            <li><a href='index.php?id=25'><i class='fa fa-circle-o'></i> Payments History</a></li>
            <li><a href='index.php?id=26'><i class='fa fa-search'></i> Search</a></li>
			";
            ?>
          </ul>
        </li>

        <li class="<?php if ($page == 'students_new.php' || $page == 'students_list.php' || $page == 'students_register_subject.php' || $page == 'students_update.php' || $page == 'students_search.php' ) {echo 'active';} ?> treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>Manage Students</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="<?php if ($page == 'students_new.php') {echo 'active';} ?>"><a href='students_new.php'><i class='fa fa-circle-o'></i> Register New Student</a></li>
                <li class="<?php if ($page == 'students_list.php') {echo 'active';} ?>"><a href='students_list.php'><i class='fa fa-circle-o'></i> List of All Students</a></li>
                <li class="<?php if ($page == 'students_register_subject.php') {echo 'active';} ?>"><a href='students_register_subject.php'><i class='fa fa-circle-o'></i> Register Subjects</a></li>
                <li class="<?php if ($page == 'students_update.php') {echo 'active';} ?>"><a href='students_update.php'><i class='fa fa-circle-o'></i> Update Student Infor</a></li>
                <li class="<?php if ($page == 'students_search.php') {echo 'active';} ?>"><a href='students_search.php'><i class='fa fa-search'></i> Search</a></li>
            </ul>
          
        </li>

        <li class="<?php if ($page == 'classes_create.php' || $page == 'classes_list.php' || $page == 'classes_assignTeacher.php' || $page == 'classes_update.php'){echo 'active';} ?> treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Classes</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="<?php if ($page == 'classes_create.php') {echo 'active';} ?>"><a href='classes_create.php'><i class='fa fa-circle-o'></i> Create New Class</a></li>
                <li class="<?php if ($page == 'classes_list.php') {echo 'active';} ?>"><a href='classes_list.php'><i class='fa fa-circle-o'></i> List of All Classes</a></li>
                <li class="<?php if ($page == 'classes_assignTeacher.php') {echo 'active';} ?>"><a href='classes_assignTeacher.php'><i class='fa fa-circle-o'></i> Assign Class Teacher</a></li>
                <li class="<?php if ($page == 'classes_update.php') {echo 'active';} ?>"><a href='classes_update.php'><i class='fa fa-circle-o'></i> Update Class</a></li>
            </ul>
          
        </li>

        <li class="<?php if ($page == 'subjects_create.php' || $page == 'subjects_all.php' || $page == 'subjects_assignTeacher.php' || $page == 'subjects_update.php'){echo 'active';} ?> treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Subjects</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          	<ul class="treeview-menu">
                <li class="<?php if ($page == 'subjects_create.php') {echo 'active';} ?>"><a href='subjects_create.php'><i class='fa fa-circle-o'></i> Create New Subject</a></li>
                <li class="<?php if ($page == 'subjects_all.php') {echo 'active';} ?>"><a href='subjects_all.php'><i class='fa fa-circle-o'></i> List of All Subjects</a></li>
                <li class="<?php if ($page == 'subjects_assignTeacher.php') {echo 'active';} ?>"><a href='subjects_assignTeacher.php'><i class='fa fa-circle-o'></i> Assign Subject Teacher</a></li>
                <li class="<?php if ($page == 'subjects_update.php') {echo 'active';} ?>"><a href='subjects_update.php'><i class='fa fa-circle-o'></i> Update Subject</a></li>
            </ul>
        </li>

        <li class="<?php if ($page == 'students_scores.php' || $page == 'students_score_analysis.php' || $page == 'students_promotions.php' || $page == 'students_score_search.php'){echo 'active';} ?> treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Students Records</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          	<ul class="treeview-menu">
                <li class="<?php if ($page == 'students_scores.php') {echo 'active';} ?>"><a href='students_scores.php'><i class='fa fa-circle-o'></i> Class Broad Sheet</a></li>
                <li class="<?php if ($page == 'students_score_analysis.php') {echo 'active';} ?>"><a href='students_score_analysis.php'><i class='fa fa-circle-o'></i> Scores Analysis</a></li>
                <li class="<?php if ($page == 'students_promotions.php') {echo 'active';} ?>"><a href='students_promotions.php'><i class='fa fa-circle-o'></i> Process Promotions</a></li>
                <li class="<?php if ($page == 'students_score_search.php') {echo 'active';} ?>"><a href='students_score_search.php'><i class='fa fa-circle-o'></i> Search </a></li>
            </ul>
        </li>

        <li class="<?php if ($page == 'students_subject_scores.php' || $page == 'students_grading.php'){echo 'active';} ?> treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Manage Scores</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
            <ul class="treeview-menu">
                <li class="<?php if ($page == 'students_subject_scores.php') {echo 'active';} ?>"><a href='students_subject_scores.php'><i class='fa fa-circle-o'></i> Input Subject Scores </a></li>
                <li class="<?php if ($page == 'students_grading.php') {echo 'active';} ?>"><a href='students_grading.php'><i class='fa fa-circle-o'></i> Grading</a></li>
            </ul>
        </li>

        <li class="<?php if ($page == 'result_class.php' || $page == 'result_individual.php' || $page == 'result_ratings.php'){echo 'active';} ?> treeview">
            <a href="#">
                <i class="fa fa-table"></i> <span>Results</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="<?php if ($page == 'result_class.php') {echo 'active';} ?>"><a href='result_class.php'><i class='fa fa-circle-o'></i> Select Class </a></li>
                <li class="<?php if ($page == 'result_individual.php') {echo 'active';} ?>"><a href='result_individual.php'><i class='fa fa-circle-o'></i> Individual Result </a></li>
                <li class="<?php if ($page == 'result_ratings.php') {echo 'active';} ?>"><a href='result_ratings.php'><i class='fa fa-circle-o'></i> Ratings</a></li>
            </ul>
        </li>
        <li>

        <li>
          <a href='index.php?id=91'>
            <i class='fa fa-calendar'></i> <span>School Calendar</span>
          </a>
        </li>

        <li>
          <a href='index.php?id=101'>
            <i class='fa fa-envelope'></i> <span>Mailbox</span>
            <small class='label pull-right bg-yellow'>12</small>
          </a>
        </li>

        <li>
          <a href='index.php?id=111'>
            <i class='fa fa-folder'></i> <span>Complaints & Suggestions</span>
            <i class='fa fa-angle-left pull-right'></i>
          </a>
        </li>
       
        
      </ul>