<?php ob_start(); error_reporting(E_ALL & ~E_NOTICE); error_reporting(E_ALL ^ E_DEPRECATED); include "inc/config.php"; include "inc/html_controls.php";  
	if ($_SESSION["smuser"]=="") {header("Location: ../login.php?id=lout");}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminSMS | K9IS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body class="hold-transition skin-black-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>MS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>K9IS ||</b>SMS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            
              <img src="<?php echo "files/staff/".$_SESSION["pic"];?>" width="160" height="160" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo "<b>".getStaffLastName($_SESSION["smuser"])."</b>";?> </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo "files/staff/".$_SESSION["pic"];?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo "<b>".getStaffName($_SESSION["smuser"])."</b><br>". $_SESSION["clrs"];?>
                  <small>School Administrator</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#"> &nbsp </a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"> &nbsp </a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">&nbsp </a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo "index.php?id=121";?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo "../login.php?id=lout";?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="<?php echo "index.php?id=131";?>"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo "files/staff/".$_SESSION["pic"];?>" width="160" height="160" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo "Welcome <b>".getStaffLastName($_SESSION["smuser"])."</b>";?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header" style="color:#FFF">MAIN NAVIGATION</li>
        <li class="active treeview">
          <?php
          echo "
          <a href='index.php?id=99'>
            <i class='fa fa-dashboard'></i> <span>Dashboard</span>
          </a>
          ";
          ?>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Manage Staff</span>
            <span class="fa fa-angle-left pull-right"></span>
          </a>
          <ul class="treeview-menu">
          <?php
          	echo "
				<li><a href='index.php?id=11'><i class='fa fa-circle-o'></i> Register New Staff</a></li>
				<li><a href='index.php?id=12'><i class='fa fa-circle-o'></i> List of Staff</a></li>
				<li><a href='index.php?id=13'><i class='fa fa-circle-o'></i> Assign Duties</a></li>
				<li><a href='index.php?id=43'><i class='fa fa-circle-o'></i> Assign Classes</a></li>
				<li><a href='index.php?id=53'><i class='fa fa-circle-o'></i> Assign Subjects</a></li>
				<li><a href='index.php?id=16'><i class='fa fa-search'></i> Search</a></li>
			";
		  ?>
            
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
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>Manage Students</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
            <?php
            echo "
            <li><a href='index.php?id=31'><i class='fa fa-circle-o'></i> Register New Student</a></li>
            <li><a href='index.php?id=32'><i class='fa fa-circle-o'></i> List of All Students</a></li>
            <li><a href='index.php?id=33'><i class='fa fa-circle-o'></i> Register Subjects</a></li>
            <li><a href='index.php?id=34'><i class='fa fa-circle-o'></i> Update Student Infor</a></li>
            <li><a href='index.php?id=35'><i class='fa fa-search'></i> Search</a></li>
            ";
            ?>
            </ul>
          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Classes</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
            <?php
            echo "
            <li><a href='index.php?id=41'><i class='fa fa-circle-o'></i> Create New Class</a></li>
            <li><a href='index.php?id=42'><i class='fa fa-circle-o'></i> List of All Classes</a></li>
            <li><a href='index.php?id=43'><i class='fa fa-circle-o'></i> Assign Class Teacher</a></li>
            <li><a href='index.php?id=44'><i class='fa fa-circle-o'></i> Update Class</a></li>
            ";
            ?>
            </ul>
          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Subjects</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          	<ul class="treeview-menu">
            <?php
            echo "
            <li><a href='index.php?id=51'><i class='fa fa-circle-o'></i> Create New Subject</a></li>
            <li><a href='index.php?id=52'><i class='fa fa-circle-o'></i> List of All Subjects</a></li>
            <li><a href='index.php?id=53'><i class='fa fa-circle-o'></i> Assign Subject Teacher</a></li>
            <li><a href='index.php?id=54'><i class='fa fa-circle-o'></i> Update Subject</a></li>
            ";
            ?>
            </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Students Records</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          	<ul class="treeview-menu">
            <?php
            echo "
            <li><a href='index.php?id=61'><i class='fa fa-circle-o'></i> Class Broad Sheet</a></li>
            
            <li><a href='index.php?id=63'><i class='fa fa-circle-o'></i> Scores Analysis</a></li>
			<li><a href='index.php?id=62'><i class='fa fa-circle-o'></i> Process Promotions</a></li>
            <li><a href='index.php?id=64'><i class='fa fa-circle-o'></i> Search </a></li>
            ";
            ?>
            </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Manage Scores</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
            <ul class="treeview-menu">
            <?php
            echo "
            <li><a href='index.php?id=71'><i class='fa fa-circle-o'></i> Input Subject Scores </a></li>
            
            <li><a href='index.php?id=72'><i class='fa fa-circle-o'></i> Grading</a></li>
            ";
            ?>
            </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Results</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          <?php
          echo "
            <li class='treeview'><a href='index.php?id=81'><i class='fa fa-circle-o'></i> Select Class </a></li>
			<li class='treeview'><a href='index.php?id=81'><i class='fa fa-circle-o'></i> Individual Result </a></li>
            <li><a href='index.php?id=82'><i class='fa fa-circle-o'></i> Ratings</a></li>
            
            ";
            ?>
            </ul>
        </li>
        <li>
        <li>
        <?php
        echo "
          <a href='index.php?id=91'>
            <i class='fa fa-calendar'></i> <span>School Calendar</span>
            
          </a>
          ";
          ?>
        </li>
        <li>
        <?php
        echo "
          <a href='index.php?id=101'>
            <i class='fa fa-envelope'></i> <span>Mailbox</span>
            <small class='label pull-right bg-yellow'>12</small>
          </a>
          ";
          ?>
        </li>
        <li>
        <?php
        echo"
          <a href='index.php?id=111'>
            <i class='fa fa-folder'></i> <span>Complaints & Suggestions</span>
            <i class='fa fa-angle-left pull-right'></i>
          </a>
         ";
         ?>
        </li>
       
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo "Dashboard &nbsp &nbsp &nbsp || Current Academic Session <b>".$_SESSION["session"]."</b>|| &nbsp &nbsp <b>".$_SESSION["term"]."</b> Term";?>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
           <section class="content">
         		<div class="row">
                    <!-- Left col -->
                    <section class="col-lg-8 connectedSortable">
						<?php
                            
                            if (isset($_GET['id'])) { $a= $_GET['id'];} else {$a=99;}
                            
                            if ($a==99) {dashboard();}
							
							//first dropdown  [manage staff]
                            if ($a==11) {regsiterNewStaff();}
                            if ($a==12) {listofStaff();}
                            if ($a==13) {assignDuties();}
                            if ($a==14) {assignClasses();}
                            if ($a==15) {assignSubjects();}
                            if ($a==16) {staffSearch();}
							
							//second dropdown  [manage school fees]
                            if ($a==21) {processPayments();}
							if ($a==22) {studentsPayments();}
							if ($a==23) {paymentsStat;}
							if ($a==24) {feesSetup();}
							if ($a==25) {paymentsHistory();}
							if ($a==26) {searchPayments();}
							
							//third dropdown  [manage students]
							if ($a==31) {registerNewStudent();}
							if ($a==32) {allStudents();}
							if ($a==33) {registerSubjects();}
							if ($a==34) {updateStudent();}
							if ($a==35) {searchStudents();}
							
							//fourth dropdown  [manage classes]
							if ($a==41) {createClass();}
							if ($a==42) {allClasses();}
							if ($a==43) {assignClassTeacher();}
							if ($a==44) {updateClass();}
							
							//fifth dropdown  [manage subjects]
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
                        ?>
          
             		 </section>
                     
                     
              
              </div>
    
            </section>
            
            
        
  </div>
      <!-- /Content Wrapper. Contains page content -->

   
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0.0.1
    </div>
    <strong>Copyright &copy; <?php echo date("Y")?> <a href="http://k9is.com.com" target="_blank">K9 Information Systems</a>.</strong> All rights
    reserved.
  </footer>

<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
