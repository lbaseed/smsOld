<?php ob_start(); 
  include'phpFunctions.php';  date_default_timezone_set("Africa/Lagos");  
	
	
	function pageTopLinks(){
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
			  
			  <link rel="stylesheet" href="dist/css/bootstrap-material-design.min.css">
			  <link rel="stylesheet" href="dist/css/ripples.min.css">
			  <link rel="stylesheet" href="dist/css/MaterialAdminLTE.min.css">
			
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
		<?php
	}

	function pageHeader(){
		?>
			
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
            
              <img src="<?php //echo "files/staff/".$_SESSION["pic"];?>" width="160" height="160" class="user-image" alt="">
              <span class="hidden-xs"><?php //echo "<b>".getStaffLastName($_SESSION["smuser"])."</b>";?> </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php //echo "files/staff/".$_SESSION["pic"];?>" class="img-circle" alt="User Image">

                <p>
                  <?php //echo "<b>".getStaffName($_SESSION["smuser"])."</b><br>". $_SESSION["clrs"];?>
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

		<?php
	}
	
	function navLinks(){
		?>
			
			<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php //echo "files/staff/".$_SESSION["pic"];?>" width="160" height="160" class="img-circle" alt="">
        </div>
        <div class="pull-left info">
          <p><?php //echo "Welcome <b>".getStaffLastName($_SESSION["smuser"])."</b>";?></p>
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
				<li><a href='new_staff.php'><i class='fa fa-circle-o'></i> Register New Staff</a></li>
				<li><a href='staff_list.php'><i class='fa fa-circle-o'></i> List of Staff</a></li>
				<li><a href='staff_assign_duties.php'><i class='fa fa-circle-o'></i> Assign Duties</a></li>
				<li><a href='staff_assign_classes.php'><i class='fa fa-circle-o'></i> Assign Classes</a></li>
				<li><a href='staff_assign_subject.php'><i class='fa fa-circle-o'></i> Assign Subjects</a></li>
				<li><a href='staff_search.php'><i class='fa fa-search'></i> Search</a></li>
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
            <li><a href='students_new.php'><i class='fa fa-circle-o'></i> Register New Student</a></li>
            <li><a href='students_list.php'><i class='fa fa-circle-o'></i> List of All Students</a></li>
            <li><a href='students_register_subject.php'><i class='fa fa-circle-o'></i> Register Subjects</a></li>
            <li><a href='students_update.php'><i class='fa fa-circle-o'></i> Update Student Infor</a></li>
            <li><a href='students_search.php'><i class='fa fa-search'></i> Search</a></li>
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
            <li><a href='classes_create.php'><i class='fa fa-circle-o'></i> Create New Class</a></li>
            <li><a href='classes_list.php'><i class='fa fa-circle-o'></i> List of All Classes</a></li>
            <li><a href='classes_assignTeacher.php'><i class='fa fa-circle-o'></i> Assign Class Teacher</a></li>
            <li><a href='classes_update.php'><i class='fa fa-circle-o'></i> Update Class</a></li>
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
            <li><a href='subjects_create.php'><i class='fa fa-circle-o'></i> Create New Subject</a></li>
            <li><a href='subjects_list.php'><i class='fa fa-circle-o'></i> List of All Subjects</a></li>
            <li><a href='subjects_assignTeacher.php'><i class='fa fa-circle-o'></i> Assign Subject Teacher</a></li>
            <li><a href='subjects_update.php'><i class='fa fa-circle-o'></i> Update Subject</a></li>
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
            <li><a href='students_scores.php'><i class='fa fa-circle-o'></i> Class Broad Sheet</a></li>
            <li><a href='students_score_analysis.php'><i class='fa fa-circle-o'></i> Scores Analysis</a></li>
						<li><a href='students_promotions.php'><i class='fa fa-circle-o'></i> Process Promotions</a></li>
            <li><a href='students_score_search.php'><i class='fa fa-circle-o'></i> Search </a></li>
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
            <li><a href='students_subject_scores.php'><i class='fa fa-circle-o'></i> Input Subject Scores </a></li>
            
            <li><a href='students_grading.php'><i class='fa fa-circle-o'></i> Grading</a></li>
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
            <li class='treeview'><a href='result_class.php'><i class='fa fa-circle-o'></i> Select Class </a></li>
			<li class='treeview'>result_individual.php'><i class='fa fa-circle-o'></i> Individual Result </a></li>
            <li><a href='result_ratings.php'><i class='fa fa-circle-o'></i> Ratings</a></li>
            
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

		<?php
	}


	function pageFooter(){
		?>
	
			<footer class="main-footer">
				<div class="pull-right hidden-xs">
				  <b>Version</b> 3.2.4.6.1
				</div>
				<strong>Copyright &copy; <?php echo date("Y")?> <a href="http://k9is.com.com" target="_blank">K9 Information Systems</a>.</strong> All rights
				reserved.
			</footer>

		<?php
	}
	
	function initializePage(){
		
		pageTopLinks();
		pageHeader();
		
		navLinks();
		?>
			<body class="hold-transition skin-black-light sidebar-mini">
				<div class="wrapper">	
		<?php
	}
	
	function pageBodyTopSection(){
		
		?>
			<!-- Content Wrapper. Contains page content -->
			  <div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
				  <h1>
					<?php //echo "Dashboard &nbsp &nbsp &nbsp || Current Academic Session <b>".$_SESSION["session"]."</b>|| &nbsp &nbsp <b>".$_SESSION["term"]."</b> Term";?>

				  </h1>
				  
				</section>

				<!-- Main content -->
					   <section class="content">
							<div class="row">
								<!-- Left col -->
								<section class="col-lg-8 connectedSortable" style="margin-right: 10px">
		<?php
	}

	function pageBodyFooterSection(){
		?>
					</section>
				</div>
            </section>
  		</div>
      <!-- /Content Wrapper. Contains page content -->
		<?php
	}

	function pageBottomLinks(){
		
		?>
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
				<!--Materialize JS-->
				<script src="dist/js/material.min.js"></script>
				<script src="dist/js/ripples.min.js"></script>
				<script>
					$.material.init();
				</script>
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
		<?php
	}
	
	function endPage(){
		pageFooter();
		
		?>
			</div>
		</body>
			<?php  pageBottomLinks();?>
		</html>			
		<?php
	}
		
	function dashboard()
	{
		?>
				
        
        <!-- Custom tabs (Charts with tabs)-->
        
        	<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Admin Dashboard Summary</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
       
          <!-- /.nav-tabs-custom -->
          
		<?php
	}
	
	function regsiterNewStaff(){
		
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">New Staff Registration</h3>
                </div>
                
                <div class="box-body">
                	<?php
                    		if (isset($_POST["go"])=="Register")
							{
								$sid = mysql_real_escape_string(filter_var(strtoupper($_POST['staffID']), FILTER_SANITIZE_STRING));
								$lname= mysql_real_escape_string(filter_var(strtoupper($_POST['lname']), FILTER_SANITIZE_STRING));
								$fname = mysql_real_escape_string(filter_var(strtoupper($_POST['fname']), FILTER_SANITIZE_STRING));
								$oname = mysql_real_escape_string(filter_var(strtoupper($_POST['oname']), FILTER_SANITIZE_STRING));
								$gender = mysql_real_escape_string(filter_var(strtoupper($_POST['gender']), FILTER_SANITIZE_STRING));
								$dob = mysql_real_escape_string(filter_var(strtoupper($_POST['dob']), FILTER_SANITIZE_STRING));
								$phone = mysql_real_escape_string(filter_var(strtoupper($_POST['phone']), FILTER_SANITIZE_STRING));
								$email = mysql_real_escape_string(filter_var($_POST['email'], FILTER_SANITIZE_STRING));
								$address = mysql_real_escape_string(filter_var(strtoupper(trim($_POST['address'])), FILTER_SANITIZE_STRING));
								$clrs = mysql_real_escape_string(filter_var(strtoupper($_POST['clrs']), FILTER_SANITIZE_STRING));
								
								if ($sid and $lname and $gender and $clrs)
								{
									$nsid = str_replace("/","_", $sid);
									$done = upload("pic", $nsid, "staff", 1024*800);
									
									if ($done)
									{
										//sql query to insert into staffs table
										$q = mysql_query("insert into staff values('$sid','password','$lname','$fname','$oname', '$gender','$dob','$address','$phone','$email','$clrs','$done','','','','ACTIVE')") or die (mysql_error());
										
										if ($q)  { echo "<div class='alert alert-success'>Operation Success </div>";
											
											//empty all variables
											$sid = ""; $lname= "";	$fname = ""; $oname = "";  $gender = "";  $phone = ""; $email = "";
											$address = "";  $clrs = "";
										}
										else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
									}
								}else {echo "<div class='alert alert-danger'>Fill all necessary fields</div>";}
							}
							
					?>
                	<form action="" method="post" enctype="multipart/form-data">
                    	<div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control " placeholder="Staff ID" name="staffID" 
value=""/>
                        </div>
                    	<br>
                    	<div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control " placeholder="Last Name" name="lname" value=""/>
                        </div>
                    	<br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="First Name" name="fname" value=""/>
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Other Names" name="oname" value=""/>
                        </div>
                        <br>
                        <div class="input-group col-lg-4">
                        	<select class="form-control" name="gender">
                            <option value="">Select Gender</option>
                            <option value="MALE">Male</option>
                            <option value="FEMALE">Female</option>
                            </select>
                        </div>
                         <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" placeholder="Date of Birth" name="dob" value=""/>
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-photo"></i></span>
                            <input type="file" class="form-control" placeholder="Picture" name="pic" />
                        </div>
                        
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="text" class="form-control" placeholder="Phone Number" name="phone" value=""/>
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" placeholder="Email" name="email" value=""/>
                        </div>
                        <br>
                        <div class="input-group">
                        	<textarea name="address" style="width:450px;" rows="4" placeholder="Staff Address" value="">                            </textarea>
                        </div>
                        <br>
                        <div class="input-group col-lg-4">
                        	<select class="form-control" name="clrs">
                            <option value="">Select Clearance</option>
                            <option value="ADMIN">ADMIN</option>
                            <option value="PRINCIPAL">PRINCIPAL</option>
                            <option value="ACCOUNTANT">ACCOUNTANT</option>
                            <option value="DEAN">DEAN</option>
                            <option value="EOFFICER">EXAM OFFICER</option>
                            <option value="STAFF">STAFF</option>
                            </select>
                        </div>
                        <br>
                        <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Register" name="go" />
                        </div>
                         	
                    </form>
                </div>
            </div>
		<?php
	}
	
	function listofStaff()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">List of All Staff</h3>
                </div>
                
                <div class="box-body">
                	<table class="table table-hover">
                    <tr><th>#</th><th>Staff ID</th><th>Full Name</th> <th>Clearance</th> <th>Date of Birth</th></tr>
                    <?php
                    	$q = mysql_query("select * from staff order by `staffID` ASC");
						if (mysql_num_rows($q)>0)
						{
							$row = mysql_num_rows($q);
							for ($i=1; $i<=$row; $i++)
							{
								$rec= mysql_fetch_array($q);
								$staffID = $rec["staffID"]; $fullName = $rec["lastName"] .", ". $rec["firstName"] ." ". $rec["otherNames"];
								$dob = $rec["dob"]; $clrs = $rec["clrs"];
								echo "<tr><td>$i</td> <td>
								<a href='index.php?id=13&sid=$staffID'>$staffID</a>
								</td> <td>$fullName</td> <td>$clrs</td> <td>$dob</td></tr>";
							}
						}
					?>
                    </table>
                </div>
                <!--end of box body-->
            </div>
		
		<?php
	}
	
	function assignDuties()
	{
		
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Assign Duties to Staff</h3>
                </div>
                
                <div class="box-body">		
                
                		<?php
                        		if ($_POST["go"]=="Assign")
								{
									$stID = $_POST["staffID"];  $nClrs = $_POST["clrs"];
									
									$q = mysql_query("update staff set clrs='$nClrs' where staffID = '$stID'");
									
									if ($q) {echo "<div class='alert alert-success'>Duty Assigned</div>";}
									else  {echo "<div class='alert alert-success'>Operation Failed</div>";}
								}
						?>
                <form action="" method="post">
                	
                    <div class="input-group col-lg-4">
                    <select class="form-control" name="staffID">
                    <option value="">Select Staff ID</option>
                    	<?php
									$q = mysql_query("select * from staff order by `staffID` ASC");
									$rows = mysql_num_rows($q);
									if ($rows>0)
									{
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = mysql_fetch_array($q);
											$sid = $rec["staffID"]; $fullName = $rec["lastName"] .", ". $rec["firstName"] ." ". $rec["othernames"];
											
											echo "<option value='$sid'>$fullName : $sid</option>";
										}
									}
							
                    			?>
                    </select>
                        	<select class="form-control" name="clrs">
                            <option value="">Select Clearance</option>
                            <option value="ADMIN">ADMIN</option>
                            <option value="PRINCIPAL">PRINCIPAL</option>
                            <option value="ACCOUNTANT">ACCOUNTANT</option>
                            <option value="DEAN">DEAN</option>
                            <option value="EOFFICER">EXAM OFFICER</option>
                            <option value="STAFF">STAFF</option>
                            </select>
                        </div>
                        <br>
                        <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Assign" name="go" />
                        </div>
                </form>
                <hr>
                <table class="table table-hover">
                    <tr><th>#</th><th>Staff ID</th><th>Full Name</th> <th>Clearance</th> <th>Date of Birth</th></tr>
                    <?php
                    	$q = mysql_query("select * from staff order by `staffID` ASC");
						if (mysql_num_rows($q)>0)
						{
							$row = mysql_num_rows($q);
							for ($i=1; $i<=$row; $i++)
							{
								$rec= mysql_fetch_array($q);
								$staffID = $rec["staffID"]; $fullName = $rec["lastName"] .", ". $rec["firstName"] ." ". $rec["otherNames"];
								$dob = $rec["dob"]; $clrs = $rec["clrs"];
								echo "<tr><td>$i</td> <td>
								<a href='index.php?id=13&sid=$staffID'>$staffID</a>
								</td> <td>$fullName</td> <td>$clrs</td> <td>$dob</td></tr>";
							}
						}
					?>
                    </table>
               </div>
            </div>
		<?php
	}
	
	function assignClasses()
	{
		echo "assign classes to class teachers";
	}
	
	function assignSubjects()
	{
		echo "assign subjects to staff";
	}
	
	function staffSearch()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Search Staff</h3>
                </div>
                
                <div class="box-body">
                		<form action="" method="post">
                        	<div class="input-group col-lg-8">
                            <input type="text" name="param" placeholder="Enter name or ID" class="form-control" />
                            <span class="input-group-btn"><a href=''><button class="btn btn-info btn-flat" type="button"><i class="fa fa-search"></i></button></a></span>
                            </div>
                        </form>
                </div>
            </div>
		<?php
	}
	
	function processPayments()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Process Payments  [<?php  echo "Current Fees: N".getSchoolFees($_SESSION["term"], $_SESSION["session"]);?> ]
                    </h3>
                </div>
                
                <div class="box-body">
                		<form action="" method="get">
                        	<div class="input-group col-lg-5 margin">
                            <input type="hidden" name="id" value="21" />
                            <input type="text" name="param" placeholder="Enter name or ID" class="form-control" />
                            <span class="input-group-btn">
                            <button class="btn btn-info btn-flat" name="search" value="go" type="submit">Go!</button></span>
                            </div>
                        </form>
                        <!--
                        <hr>
                        <form action="" method="get">
                        	<div class="input-group col-lg-7">
                            	<select class="form-control" name="class">
                            <option value="SELECT">Select Class</option>
                           		 <?php
								 /*
								echo "<option value=".$_GET["class"]." selected>".$_GET["class"]."</option>";
									$q = mysql_query("select * from classes order by `classid` ASC");
									$rows = mysql_num_rows($q);
									if ($rows>0)
									{
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = mysql_fetch_array($q);
											$cid = $rec["classid"];
											
											echo "<option value='$cid'>$cid</option>";
										}
									}
									*/
                    			?>
                            
                            </select>
                            <input type="hidden" name="id" value="21" /> 
                            <span class="input-group-btn">
                            <button class="btn btn-info btn-flat" name="load" value="go" type="submit">Load>></button></a>
                            </span>
                            </div>
                        </form>
                        -->
                        <hr>
                        <?php
                        		if (isset($_GET["param"]))
								{
									$id = trim($_GET["param"]);
									
									$splt = explode(" ", $id);
									$p1 = $splt[0];
									$p2 = $splt[1];
									$p3 = $splt[2];
									
									$fetch1 = @mysql_query("select * from students where studentID='$id' and status='Active'");
									
									$fetch2 = @mysql_query("select * from students where lastName='$p1' and firstName=
									'$p2' and otherNames='$p3' and status='Active'");
									
									if (@mysql_num_rows($fetch1)>0)
									{
										$fullName = mysql_result($fetch1, 0, "lastName") .", ".
										  mysql_result($fetch1, 0, "firstName") ." ". mysql_result($fetch1, 0, "otherNames");
										  $class = mysql_result($fetch1, 0, "class");
										  $subClass = mysql_result($fetch1, 0, "subClass");
										  $studentID = mysql_result($fetch1, 0, "studentID");
									}
									else if (@mysql_num_rows($fetch2)>0)
									{
										 $fullName = mysql_result($fetch2, 0, "lastName") .", ".
										  mysql_result($fetch2, 0, "firstName") ." ". mysql_result($fetch2, 0, "otherNames");
										  $class = mysql_result($fetch2, 0, "class");
										  $subClass = mysql_result($fetch2, 0, "subClass");
										  $studentID = mysql_result($fetch2, 0, "studentID");
									}
									else
									{
										echo "<div class='alert alert-danger'>No active student found with this record</div>";
									}
								}
						?>
                        
                        
                        <?php
							//posting payments
							
							if ($_POST["do"]=="Process")
							{
								$tm = $_POST["term"];  $ss = $_POST["session"];
								$bank = mysql_real_escape_string(filter_var(strtoupper($_POST["bankName"]), FILTER_SANITIZE_STRING));
								$tellerNum = mysql_real_escape_string(filter_var(strtoupper($_POST["tellerNum"]), FILTER_SANITIZE_STRING));
								$depositDate = mysql_real_escape_string(filter_var(strtoupper($_POST["depositeDate"]), FILTER_SANITIZE_STRING));
								$amount = mysql_real_escape_string(filter_var($_POST["amount"], FILTER_SANITIZE_STRING));
								$ref  = time();
								$recID = $ref + 323;
								$date = date("d/m/Y");
								$fees = getSchoolFees($_SESSION["term"], $_SESSION["session"]);
								$sid = $_POST["sid"];
								$cashier = $_SESSION["user"];
								
								
								
								if ($amount and $tm and $ss)
								{
									
									$chck = mysql_query("select * from transaction where studentID='$sid' and term='$tm' and session='$ss'");
									
									if (@mysql_num_rows($chck)==0)
									{
										if ($amount < $fees) {$balance = $fees - $amount ;}
										
									$q = mysql_query("insert into transaction values('$ref','$sid','$fees','$amount','$balance','$tm','$ss')");
									
									$subQ = mysql_query("insert into payments values('$recID','$ref','$amount','$date',
									'$cashier','$bank','$tellerNum','$depositDate')");
											
											if ($q and $subQ) {echo "<div class='alert alert-success'>Operation Success</div>"; $bank=""; $depositDate=""; $tellerNum=""; $balance=""; $amount="";}
											else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
									}	
									else
									{
										$ref1 = mysql_result($chck, 0, "ref");
										
										$q = mysql_query("update transaction set amountPaid= amountPaid + $amount, balance= balance - $amount where  ref='$ref1'");
										$subQ = mysql_query("insert into payments values('$recID','$ref1','$amount',
										'$date','$cashier','$bank','$tellerNum','$depositDate')");
										
										if ($q and $subQ) {echo "<div class='alert alert-success'>Operation Success</div>"; $bank=""; $depositDate=""; $tellerNum=""; $balance=""; $amount="";}
											else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
									}
									
								}
							}
                        ?>
                        <form action="" method="post">
                        	
                            <table class="table table-stripled">
                            <tr>
                            	<td>Student ID</td> <td> <?php echo $studentID ?>
                                <input type="hidden" name="sid" value="<?php echo $studentID ?>" />
                                </td> 
                            </tr>
                            <tr>
                            	<td>Full Name</td> <td> <?php echo $fullName ?></td> <td>Class</td> <td> <?php echo $class . " " . $subClass ?></td>
                            </tr>
                            <tr>
                            	<td>Currently Paid</td> 
                                <td> <?php 
									 
									echo  "N".getSchoolFeesPaid($studentID, $_SESSION["term"], $_SESSION["session"]);
								?> </td>
                                <td> Balance</td> <td> <?php echo "N".getSchoolFeesBalance($studentID, $_SESSION["term"], $_SESSION["session"]); ?> </td>
                            </tr>
                            </table>
                            <hr>
                            
                            
                            
                            <table class="table">
                              <tr> 
                            	<td>
                                	<select class="form-control" name="term">
                                    <option value="<?php echo $_SESSION["term"]?>" selected><?php echo $_SESSION["term"]?></option>
                                    <option>FIRST</option> <option>SECOND</option> <option>THIRD</option>
                                    </select>
                                </td> 
                                <td>
                                	<select class="form-control" name="session">
                                     <option value="<?php echo $_SESSION["session"]?>" selected><?php echo $_SESSION["session"]?></option>
                                    <option>2014/2015</option> <option>2015/2016</option>
                                    </select>
                                </td> 
                              </tr>
                              <tr>
                              	<td>
                                	<input type="text" class="form-control" placeholder="Bank" name="bankName" value="<?php echo $bank ?>" />
                                </td>
                                <td>
                                	<input type="text" class="form-control" placeholder="Teller Number" name="tellerNum" value="<?php echo $tellerNum ?>" />
                                </td>
                              </tr>
                               <tr>
                              	<td>
                                	<input type="text" class="form-control" placeholder="Deposite Date" name="depositeDate" value="<?php echo $depositDate ?>" />
                                </td>
                                <td>
                                	<input type="text" class="form-control" placeholder="Amount" name="amount" value="<?php  echo $amount ?>" />
                                </td>
                              </tr>
                            </table>
                           	<div class="input-group pull-right">
                            	<input type="submit" name="do" value="Process" class="btn btn-info btn-lg" />
                            </div>
                        </form>
                </div>
           	</div>
		<?php
	}
	
	function studentsPayments()
	{
		?>
		<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Students Fees Payment Status [<?php echo $_GET["class"];?>]
                    </h3>
                </div>
                
                <div class="box-body" style="overflow:scroll;">
                	
                    <form action="" method="get">
                    		<input type="hidden" name="id" value="22" />
                            
                            <div class="input-group">
                            	<select class="form-control" name="class">
                            		<option value="SELECT">Select Class</option>
                            
                           		 <?php
							echo "<option value=".$_GET["class"]." selected>".$_GET["class"]."</option>";
									$q = mysql_query("select * from classes order by `classid` ASC");
									$rows = mysql_num_rows($q);
									if ($rows>0)
									{
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = mysql_fetch_array($q);
											$cid = $rec["classid"];
											
											echo "<option value='$cid'>$cid</option>";
										}
									}
                    			?>
                            
                            </select>
                            </div>
                            <div class="input-group col-lg-8 pull-right">
                            	<input type="submit" name="do" value="Load" class="btn btn-info" />
                            </div>
                    </form>
                
                		<table class="table table-striped">
                        	<tr> <th>#</th> <th>Student ID</th> <th>Full Name</th> <th>Paid Amount</th> <th>Balance</th> <th>Status</th></tr>
                            	<?php
                                	if ($_GET["do"]=="Load")
									{
										$split = explode("_",$_GET["class"]);
										$class = $split[0];  $subClass = $split[1];
										
										$q= mysql_query("select * from students where class='$class' and subClass='$subClass' order by `studentID` ASC");
										
										if (@mysql_num_rows($q)>0)
										{
											for ($i=1; $i<=@mysql_num_rows($q); $i++)
											{
												$rec = mysql_fetch_array($q);
												$studentID = $rec["studentID"];  $fullname = getStudentName($studentID);
												$aPaid = getSchoolFeesPaid($studentID, $_SESSION["term"], $_SESSION["session"]);
												$bal = getSchoolFeesBalance($studentID, $_SESSION["term"], $_SESSION["session"]);
												$fees = getSchoolFees($_SESSION["term"], $_SESSION["session"]);
												
												if ($bal > 0)	  {	$status = "UNPAID";  }  else { $status = "PAID Fully";}
												if ($aPaid==$fees or $aPaid > $fees) { $status = "PAID Fully";}
												else {	$status = "UNPAID";  }
												
												if ($bal>0)		{$BG = "background-color:#F9B494";}	
												else { $BG = "background-color:#B1F2C6";	} 
												if ($aPaid==$fees)	{ $BG = "background-color:#B1F2C6";	} 
												else {$BG = "background-color:#F9B494";}
												
												echo "<tr style='$BG'> <td>$i</td> <td>$studentID</td> <td>$fullname</td> 
														<td>$aPaid</td> <td>$bal</td> <td>$status</td></tr>";
												
											}
										}
									}
								?>
                        </table> 
                </div>
                
         </div>
		
		<?php
	}
	
	function paymentsStat()
	{
		echo "payments statistics interface";
	}
	
	function feesSetup()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Enter Fees to Setup School Fees
                    </h3>
                </div>
                
                <div class="box-body">
                
                	<?php
                    		if ($_POST["go"]=="OK")
							{
								$fees = mysql_real_escape_string(filter_var(($_POST["fees"]), FILTER_SANITIZE_STRING));
								$Vterm = $_POST["term"];  $Vsession= $_POST["session"];
								$recID = time();
								if ($fees)
								{
									//check existernce of current amount
									$chck = mysql_query("select * from fees where term='$Vterm'  and session='$Vsession'");
									if (@mysql_num_rows($chck)>0) {
											$q = mysql_query("update fees set fees='$fees' where term='$Vterm' and session='$Vsession'");
											
											if ($q)
										{
											echo "<div class='alert alert-success'>Fees Setup done</div>";
										}else { echo "<div class='alert alert-danger'>Operation Failed</div>";}
										
										}
									else
									{
										//insert fees
									$q = mysql_query("insert into fees values('$recID','$fees','$Vterm','$Vsession')");
										
										if ($q)
										{
											echo "<div class='alert alert-success'>Fees Setup done</div>";
										}else { echo "<div class='alert alert-danger'>Operation Failed</div>";}
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
		<?php
	}
	
	function paymentsHistory()
	{
		echo "Payment history interface";
	}
	
	function searchPayments()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Search Student's payment history
                    </h3>
                </div>
                
                <div class="box-body">
                		<form action="" method="post">
                        	<div class="input-group col-lg-8">
                            <input type="text" name="param" placeholder="Enter name or ID" class="form-control" />
                            <span class="input-group-btn"><a href=''><button class="btn btn-info btn-flat" type="button"><i class="fa fa-search"></i></button></a></span>
                            </div>
                        </form>
                </div>
            </div>
		<?php
	}
	
	function registerNewStudent()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Register New Student</h3>
                </div>
                
                <div class="box-body">
                
                	<?php
                    		
					if (isset($_POST["go"])=="Submit")
					{
								
								$sid = mysql_real_escape_string(filter_var(strtoupper($_POST['sid']), FILTER_SANITIZE_STRING));
								$lname = mysql_real_escape_string(filter_var(strtoupper($_POST['lname']), FILTER_SANITIZE_STRING));
								$fname = mysql_real_escape_string(filter_var(strtoupper($_POST['fname']), FILTER_SANITIZE_STRING));
								$oname = mysql_real_escape_string(filter_var(strtoupper($_POST['oname']), FILTER_SANITIZE_STRING));
								$sex = mysql_real_escape_string(filter_var(strtoupper($_POST['gender']), FILTER_SANITIZE_STRING));
								$address = mysql_real_escape_string(filter_var(strtoupper($_POST['address']), FILTER_SANITIZE_STRING));
								$dob = mysql_real_escape_string(filter_var(strtoupper($_POST['dob']), FILTER_SANITIZE_STRING));
								$class = mysql_real_escape_string(filter_var(strtoupper($_POST['stndtClass']), FILTER_SANITIZE_STRING));
								
								//parent info
								$pLname = mysql_real_escape_string(filter_var(strtoupper($_POST['parentLname']), FILTER_SANITIZE_STRING));
								$POname = mysql_real_escape_string(filter_var(strtoupper($_POST['parentOname']), FILTER_SANITIZE_STRING));
								$phone = mysql_real_escape_string(filter_var(strtoupper($_POST['phone']), FILTER_SANITIZE_STRING));
								$email = mysql_real_escape_string(filter_var(strtolower($_POST['email']), FILTER_SANITIZE_STRING));
								$pAddress = mysql_real_escape_string(filter_var(strtoupper($_POST['pAddress']), FILTER_SANITIZE_STRING));
								
								if ($sid and $lname and $fname and $sex and $class!="SELECT")
								{
									$nsid = str_replace("/","_",$sid);
									$done = upload("pic", $nsid, "students", 400*1024);
									
									
									
										$split = explode("_",$class);
										$mclass = $split[0]; $sclass= $split[1];
										$ref = time();
										$term = $_SESSION["term"];  $session= $_SESSION["session"];
										$fees = getSchoolFees($term, $session);
										$q = @mysql_query("insert into students values('$sid','$lname','$fname','$oname','$sex','$dob','$address','$mclass','$sclass','$phone','ACTIVE','$done')") or die (mysql_error());
										$q3 = mysql_query("insert into transaction values('$ref','$sid','$fees','0','$fees','$term','$session')");
										//check phone
										$chck = mysql_query("select * from parents where phone='$phone'");
										if (mysql_num_rows($chck)>0){$q2="done";}
										else {
										$q2 = mysql_query("insert into parents values('$email','$pLname','$POname','$pAddress','$phone','password')") or die (mysql_error());
										}
										
										if ($q and $q2)  { echo "<div class='alert alert-success'>Operation Success </div>"; $sid="";
										$lname=""; $fname=""; $oname=""; $address=""; $dob=""; $sex=""; $class=""; $pLname=""; $POname=""; $phone="";
										$pAddress="";
										}
										else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
									
								}
					}
					?>
                	<form action="" method="post" enctype="multipart/form-data">
                    	<div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control " placeholder="Admission Number eg sec/2018/1001" value="" name="sid"/>
                        </div>
                    	<br>
                    	<div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control " placeholder="Last Name" value="" name="lname"/>
                        </div>
                    	<br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="First Name" value="" name="fname"/>
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Other Names" name="oname" value="" />
                        </div>
                        <br>
                        <div class="input-group col-lg-4">
                        	<select class="form-control" name="gender">
                            <option value="SELECT">Select Gender</option>
                            <option value="MALE">Male</option>
                            <option value="FEMALE">Female</option>
                            </select>
                        </div>
                        <br>
                        <div class="input-group">
                        	<textarea class="input-control" style="width:450px;" placeholder="Address" rows="4" name="address">
                                                        </textarea>
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-photo"></i></span>
                            <input type="file" class="form-control" placeholder="Picture" name="pic" />
                        </div>
                        
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" id="datePicker" data-date-format='yyyy-mm-dd'  placeholder="Date of Birth" name="dob" value="" />
                        </div>
                        <br>
                         <div class="input-group">
                        	<select class="form-control" name="stndtClass">
                            <option value="SELECT">Select Class</option>
                            
                           		 <?php
							echo "<option value=''></option>";
									$q = mysql_query("select * from classes order by `classid` ASC");
									$rows = mysql_num_rows($q);
									if ($rows>0)
									{
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = mysql_fetch_array($q);
											$cid = $rec["classid"];
											
											echo "<option value='$cid'>$cid</option>";
										}
									}
                    			?>
                            
                            </select>
                        </div>
                        <br>
                        <hr>
                        <div class="input-group">
                        	<label class="input-control">Parent/Guardian Information</label>
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Last Name" name="parentLname" value="" />
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Other Names" name="parentOname" value="" />
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="text" class="form-control" placeholder="Phone Number" name="phone" value="" />
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" placeholder="Email" name="email" value="" />
                        </div>
         				<br>
                        <div class="input-group col-lg-10">
                        	
                            <textarea  placeholder="Parent Address" style="width:450px" rows="4" name="pAddress">
                                                        </textarea>
                        </div>
                        
                        <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Submit" name="go" />
                        </div>
                         	
                    </form>
                </div>
            </div>
		<?php
	}
	
	function allStudents()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">All Students</h3>
                </div>
                
                <div class="box-body">
                	<table class="table table-hover">
                    <tr><th>#</th><th>Student ID</th><th>Full Name</th><th>Date of Birth</th><th>Class</th></tr>
                    <?php
                    	
						$q= mysql_query("select * from students order by `studentID` ASC");
						$row = mysql_num_rows($q);
						
						if ($row>0)
						{
							for ($i=1; $i<=$row; $i++)
							{
								$rec = mysql_fetch_array($q);
								
								$sid = $rec["studentID"]; 
								$fullName = $rec["lastName"] .", &nbsp ". $rec["firstName"]." &nbsp ". $rec["otherNames"];
								$dob = $rec["dob"]; $class = $rec["class"] ." - ". $rec["subClass"];
								
								echo "<tr><td>$i</td> <td> <a href='index.php?id=34&sid=$sid'>$sid</a></td> <td>$fullName</td> <td>$dob</td> <td>$class</td></tr>";
							}
						}
					?>
                    </table>
                </div>
                <!--end of box body-->
            </div>
		
		<?php
	}
	
	function registerSubjects()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Register Subjects for Students</h3>
                </div>
                
                <div class="box-body">
                		
                        <div class="input-group">
                            <a href="<?php echo "index.php?id=33&subID=1"?>"><button class="btn btn-info">Register Core Subjects</button></a> &nbsp &nbsp &nbsp
                            <a href="<?php echo "index.php?id=33&subID=2"?>"><button class="btn btn-info">Register Optional Subjects</button></a>
                        </div>
                      <br><hr>
                      <?php 
					  	if ($_GET["subID"]=="1")
						{	echo "<label>Core Subjects Registration</label>";
					  ?>  
                      
                	<?php
							///register core subjects
                        	if ($_POST["go"]=="Register Subjects")
							{
								$term = $_SESSION["term"];
								$session = $_SESSION["session"];
								$numrows = $_POST["numrows"];
								$split = explode("_",$_POST["class"]);
								$class = $split[0]; $subclass = $split[1];
								
								$q = mysql_query("select * from students where class='$class' and subclass='$subclass'");
								$recID = time();
								
								$flag2 = "";
								if (@mysql_num_rows($q)>0)
								{
									for ($j=0; $j<mysql_num_rows($q); $j++)
									{
										$studentID= mysql_result($q, $j, "studentID");
										
										
										for ($i=1; $i<=$numrows; $i++)
										{
											$recID3 = time() + rand(00,324);
											$subjectID= $_POST["sb_$i"]; 
											
											if ($subjectID)
											{
												//check for already registered subject
												$chck = mysql_query("select * from reg_subjects where studentID='$studentID' and subjectID='$subjectID' and session='$session' ") or die (mysql_error());
												if (@mysql_num_rows($chck)>0) {$flag="ignored";}
												else
												{
											$q2 = mysql_query("insert into reg_subjects values('$recID','$studentID','$subjectID',
											'$session','')") or die (mysql_error());
											
												$tbl = "sc_".$subjectID;
												$q31 = mysql_query("insert into $tbl values('$recID3','$recID','$studentID','','','','','','',
												'FIRST','$session')");
												$recID3+= rand(0,99592);
												$q32 = mysql_query("insert into $tbl values('$recID3','$recID','$studentID','','','','','','',
												'SECOND','$session')");
												$recID3+= rand(0,99792);
												$q33 = mysql_query("insert into $tbl values('$recID3','$recID','$studentID','','','','','','',
												'THIRD','$session')");
												$recID3+= rand(0,99792);
												$recID += 32;
												
												if ($q2 and $q31 and $q32 and $q33) {$flag2+=1;}
												}
											}
											
										}
										
									}
									if ($flag=="ignored") {echo "<div class='alert alert-info'>Duplicate Subject Ignored</div>"; $flag="";}
									if ($flag2!="") {echo "<div class='alert alert-success'>Operation Success</div>"; $flag2="";}
									else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
									
								}//end of condition for availability of students in class
								else {echo "<div class='alert alert-info'>Currently no students in $class $subclass</div>";}
								
							}
						?>
                        
                    <form action="" method="post">	
                    
                    	
                        
                        <div class="input-group">
                        	<select class="form-control" name="class">
                            <option value="">Select Class</option>
                           		 <?php
					
									$q = @mysql_query("select * from classes order by `classid` ASC");
									
									if (@mysql_num_rows($q)>0)
									{	
										$rows = @mysql_num_rows($q);
										
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = @mysql_fetch_array($q);
											$cid = $rec["classid"];
											
											echo "<option value='$cid'>$cid</option>";
										}
									}
                    			?>
                            
                            </select>
                            
                        </div>
                        <br><hr>
                        <div class="input-group">
                        	<?php
                            	$q = mysql_query("select * from subjects where type='CORE' order by `subjectID` ASC");
								if (@mysql_num_rows($q)>0)
								{
									$rows = mysql_num_rows($q);
									for ($i=1; $i<=$rows; $i++)
									{
										$rec= mysql_fetch_array($q);
										$sid = $rec["subjectID"]; $sTitle= $rec["subjectTitle"];
										
										echo "<label>$sTitle : </label> <input type='checkbox' name='sb_$i' value='$sid' /> &nbsp &nbsp ";
									}
									
									echo "<input type='hidden' name='numrows' value='$rows' />";
								}
							?>
                        </div>
                        
                        
                       <br><hr><br>
                        <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Register Subjects" name="go" />
                        </div>
                     </form>   
                		
                      <?php  } 
					  if ($_GET["subID"]=="2")
					  {
						  echo "<label>Optional Subjects Registration</label>";
						  //optional subjects registration
					  ?> 
                      
                      <form action="" method="post">	
                    
                    	
                        
                        <div class="input-group">
                        	<select class="form-control" name="class">
                            <option value="">Select Class</option>
                           		 <?php
					
									$q = @mysql_query("select * from classes order by `classid` ASC");
									
									if (@mysql_num_rows($q)>0)
									{	
										$rows = @mysql_num_rows($q);
										
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = @mysql_fetch_array($q);
											$cid = $rec["classid"]; $cTeacher = $rec["classTeacher"];
											
											echo "<option value='$cid'>$cid</option>";
										}
									}
                    			?>
                            
                            </select>
                            
                        </div>

                        <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Load Students" name="load" />
                        </div>
                     </form>
                      <br><hr>
                      <?php
         //optional subjects registration
		 				
						if ($_POST["reg"]=="Register Students")
						{
							$num = $_POST["rows"];
							$term = $_SESSION["term"];
							$session = $_SESSION["session"];
							$recID1 = time();
							$recID2 = time() + 20;
							$oSubject = $_POST["oSubjects"];
							$tbl1 = strtolower("sc_".$oSubject);
							$flag1 = "";
							
							$recID3 = time() + rand(000, 9999);
							
							for ($i=1; $i<=$num; $i++)
							{
								$InsertStdntID = $_POST["sdt_$i"];
								
								if ($InsertStdntID and $oSubject!="")
								{
									$chck = mysql_query("select * from reg_subjects where studentID='$InsertStdntID' and subjectID='$oSubject' and session='$session' ") or die (mysql_error());
													if (@mysql_num_rows($chck)>0) {$flag="ignored";}
													else
													{
														
									$q = mysql_query("insert into reg_subjects values('$recID1','$InsertStdntID','$oSubject','$session','')");
													
									$q31 = mysql_query("insert into $tbl1 values('$recID3','$recID1','$InsertStdntID','','','','','','',
												'FIRST','$session')");
												$recID3+= rand(0,99592);
												$q32 = mysql_query("insert into $tbl1 values('$recID3','$recID1','$InsertStdntID','','','','','','',
												'SECOND','$session')");
												$recID3+= rand(0,99792);
												$q33 = mysql_query("insert into $tbl1 values('$recID3','$recID1','$InsertStdntID','','','','','','',
												'THIRD','$session')");
												$recID3+= rand(0,99792);
												
									
													}
									
									$recID1 += 23;
									if ($q and $q31 and $q32 and $q33){ $flag1 += $i;}
								}
							}
							
									
									if ($flag=="ignored") {echo "<div class='alert alert-info'>Duplicate Subject for a student Ignored</div>"; }
									if ($flag1!="") {echo "<div class='alert alert-success'>Operation Success</div>";}
									else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
							
							
						}
		 					
					  
					  ?>
                      <form action="" method="post">
                      	
                        	<div class="input-group">
                            	<select class="form-control" name="oSubjects">
                            <option value="">Select Subjects</option>
                        	<?php
								
								$sp2 = substr($_POST["class"],0,1);
								if ($sp2=="S")
								{
                            	$q = mysql_query("select * from subjects where category='POSTBASIC' and type='OPTIONAL' and status='ACTIVE' order by `subjectID` ASC");
										if (@mysql_num_rows($q)>0)
										{
											
											for ($i=1; $i<=@mysql_num_rows($q); $i++)
											{
												$rec= mysql_fetch_array($q);
												$sid = $rec["subjectID"]; $sTitle= $rec["subjectTitle"];
												
												echo "<option value='$sid'>$sTitle</option> ";
											}
											
											
										}
								}
								else if ($sp2=="J" or $sp2=="P")
								{
                            	$q = mysql_query("select * from subjects where category='BASIC' and  type='OPTIONAL' and status='ACTIVE' order by `subjectID` ASC");
										if (@mysql_num_rows($q)>0)
										{
											$rows = mysql_num_rows($q);
											for ($i=1; $i<=$rows; $i++)
											{
												$rec= mysql_fetch_array($q);
												$sid = $rec["subjectID"]; $sTitle= $rec["subjectTitle"];
												
												echo "<option value='$sid'>$sTitle</option> ";
											}
											
										}
								}
								
								
                            	$qAll = mysql_query("select * from subjects where category='BOTH' and type='OPTIONAL' and status='ACTIVE' order by `subjectID` ASC");
								if (@mysql_num_rows($qAll)>0)
								{
									
									for ($i=1; $i<=mysql_num_rows($qAll); $i++)
									{
										$rec= mysql_fetch_array($qAll);
										$sid = $rec["subjectID"]; $sTitle= $rec["subjectTitle"];
										
										echo "<option value='$sid'>$sTitle</option> ";
									}
									
									
								}
							?>
                            </select>
                            </div>
                            <br>
                            	<table class="table table-hover">
                                	<tr> <th>#</th> 
                                    <th><input type="checkbox" name="" value="" onClick="this.value=check(this.form.list)"></th> 
                                    <th>Student ID</th> <th>Student Name</th></tr>
                                    <?php
                                   
										if ($_POST["load"]=="Load Students")
										{
											$class = $_POST["class"];
											$split = explode("_",$class);
											$qx = mysql_query("select * from students where class='$split[0]' and subClass='$split[1]'");
											
											if (@mysql_num_rows($qx)>0)
											{
												$stdntNum = @mysql_num_rows($qx);
												for ($i=1; $i<=@mysql_num_rows($qx); $i++)
												{
													$rec = mysql_fetch_array($qx);
													$stdntID = $rec["studentID"]; $fullName = $rec["lastName"] .". ". $rec["firstName"] ." ". $rec["otherNames"];
													echo "<tr> <td>$i</td> 
													<td> <input type='checkbox' id=list name='sdt_$i' value='$stdntID'> </td> 
													<td>$stdntID</td> <td>$fullName</td></tr>";
												}
												echo "<input type='hidden' name='rows' value='$stdntNum' />";
											}
										}
									
									?>
                                </table>
                            <br>
                            
                            
                            <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Register Students" name="reg" />
                        	</div>
                      </form>
                      <?php }?>
                </div>
                
            </div>
		<?php
	}
	
	function updateStudent()
	{

if (isset($_GET["sid"])) {$id = $_GET["sid"];} else {$id="";}
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Update Student Details</h3>
                </div>
                
                <div class="box-body">
                	<div class="row col-lg-10">
                        <form action="" method="get">
                        	<div class="input-group col-lg-9">
                            <input type="text" class="form-control" placeholder="Enter ID to search" name="sid" />
                            <input type="hidden" name="id" value="34" />
                            <span class="input-group-btn"><button class="btn btn-info btn-flat" type="submit">GO! <i class="fa fa-search"></i></button></span>
                        </div>
                        
                        
                    <?php
					
						//update query
						if (isset($_POST["updateRec"]))
						{
		
	$u_surname = mysql_real_escape_string(trim($_POST["lname"]));
	$u_firstName = mysql_real_escape_string(trim($_POST["fname"]));
	$u_otherName = mysql_real_escape_string(trim($_POST["oname"]));
	$u_gender = mysql_real_escape_string(trim($_POST["gender"]));
	$u_address = mysql_real_escape_string(trim($_POST["address"]));
	$u_dob = mysql_real_escape_string(trim($_POST["dob"]));
	$u_class = mysql_real_escape_string(trim($_POST["stndtClass"]));

	$u_parent_email = mysql_real_escape_string(trim($_POST["email"]));
	$u_parent_address = mysql_real_escape_string(trim($_POST["pAddress"]));

$pic = $_FILES["pic"]["name"];
if ($pic){
$u_id = str_replace("/", "_", $id);
upload("pic", $u_id, "students", 400*1024);
}
						

	$query = mysql_query("update students set lastName='$u_surname', firstName='$u_firstName', otherNames='$u_otherName', gender='$u_gender', dob='$u_dob', address='$u_address' where studentID='$id'");
						}
						
					//fetch data query
                    	
						
						$q = mysql_query("select * from students where studentID='$id'");
						
						if (mysql_num_rows($q)>0)
						{
							$lname = mysql_result($q,0,"lastName");
							$fname = mysql_result($q,0,"firstName");
							$oname = mysql_result($q,0,"otherNames");
							$gender = mysql_result($q,0,"gender");
							$address= mysql_result($q,0,"address");
							$dob = mysql_result($q,0,"dob");
							$class = mysql_result($q,0,"class") . "_" . mysql_result($q,0,"subClass");
							$pic = mysql_result($q,0,"pic");
							$email = mysql_result($q,0,"parentID");
						}
					?>
                    	
                        </form>
                        <img class="img img-circle pull-right"  width="150" height="150" src="files/students/<?php echo $pic?>" />
                        </div>
                	<form action="" method="post" enctype="multipart/form-data">
                    
                    	<div class="input-group col-lg-10">
                        	<label>Student ID:</label> <label class="form-control"><?php echo $id; ?></label>
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Last Name" name="lname" value="<?php echo $lname?>"/>
                        </div>
                    	<br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="First Name" name="fname" value="<?php echo $fname?>"/>
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Other Names" name="oname" value="<?php echo $oname?>" />
                        </div>
                        <br>
                        <div class="input-group col-lg-4">
                        	<select class="form-control" name="gender">
                            <option value="SELECT">Select Gender</option>
                            <option value="<?php echo $gender?>" selected><?php echo $gender?></option>
                            <option value="MALE">Male</option>
                            <option value="FEMALE">Female</option>
                            </select>
                        </div>
                        <br>
                        <div class="input-group">
                        	<textarea class="input-control" style="width:450px;" placeholder="Address" rows="4" name="address">
                            <?php echo $address?>
                            </textarea>
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-photo"></i></span>
                            <input type="file" class="form-control" placeholder="Picture" name="pic" />
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" placeholder="Date of Birth" name="dob" id="datepicker" data-date-format='yyyy-mm-dd' value="<?php echo $dob?>" />
                        </div>
                        <br>
                         <div class="input-group">
                        	<select class="form-control" name="stndtClass">
                            <option value="SELECT">Select Class</option>
                            
                           		 <?php
							echo "<option value='$class' selected >$class</option>";

									$q = mysql_query("select * from classes order by `classid` ASC");
									$rows = mysql_num_rows($q);
									if ($rows>0)
									{
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = mysql_fetch_array($q);
											$cid = $rec["classid"];
											
											echo "<option value='$cid'>$cid</option>";
										}
									}
                    			?>
                            
                            </select>
                        </div>
                        <br>
                        <hr>
                        <div class="input-group">
                        	<label class="input-control">Parent/Guardian Information</label>
                        </div>
                        <br>
                        <?php
                        	$q2 = mysql_query("select * from parents where phone='$email'");
							if (mysql_num_rows($q2)>0)
							{
								$pFullName = mysql_result($q2, 0, "lastName") .",  ". mysql_result($q2, 0, "otherNames");
								$pAdd = mysql_result($q2, 0, "address");
								$pPhone = mysql_result($q2, 0, "phone"); $pEmail = mysql_result($q2, 0, "email");
							}
						?>
                        <div class="input-group col-lg-10">
                        	<label>Full Name</label>: <label class="form-control"><?php echo $pFullName?></label>
                        </div>
                        
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="text" class="form-control" placeholder="Phone Number" name="phone" disabled value="<?php echo $pPhone?>" />
                        </div>
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $pEmail?>" />
                        </div>
         				<br>
                        <div class="input-group col-lg-10">
                        	
                            <textarea placeholder="Parent Address" style="width:450px" rows="4" name="pAddress">
                            <?php echo $pAdd;?>
                            </textarea>
                        </div>
                        
                        <br>
                        <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Update" name="updateRec" />
                        </div>
                         	
                    </form>
                </div>
            </div>
		<?php
	}
	
	function searchStudents()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Search Students Records
                    </h3>
                </div>
                
                <div class="box-body">
                		<form action="" method="post">
                        	<div class="input-group col-lg-8">
                            <input type="text" name="param" placeholder="Enter name or ID" class="form-control" />
                            <span class="input-group-btn"><a href=''><button class="btn btn-info btn-flat" type="button"><i class="fa fa-search"></i></button></a></span>
                            </div>
                        </form>
                </div>
            </div>
		<?php
	}
	
	function createClass()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Create Class</h3>
                </div>
                
                <div class="box-body">
                <?php
                	
					if ($_POST["go"]=="Create")
					{
						$mclass = mysql_real_escape_string(filter_var(strtoupper($_POST['mclass']), FILTER_SANITIZE_STRING));
						$subclass = mysql_real_escape_string(filter_var(strtoupper($_POST['subclass']), FILTER_SANITIZE_STRING));
						$cTeacher = mysql_real_escape_string(filter_var($_POST['cTeacher'], FILTER_SANITIZE_STRING));
						
						if ($mclass and $subclass )
						{
							$classid = $mclass."_".$subclass;
							
							$q = mysql_query("insert into classes values('$classid','$cTeacher')") or die (mysql_error());
							
							if ($q) { echo "<div class='alert alert-success'>Operation Success </div>";}
							else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
						}
					}
				
				?>
                	<form action="" method="post" enctype="multipart/form-data">
                    
                    	<div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control " placeholder="Main Class" name="mclass"/>
                        </div>
                    	
                        
                        <br>
                         <div class="input-group">
                        	<select class="form-control" name="subclass">
                            <option vale="SELECT">Select Sub Class</option>
                           `<option>A</option> <option>B</option> <option>C</option> <option>D</option> <option>E</option> <option>F</option> <option>G</option> <option>H</option> <option>I</option> <option>J</option> <option>K</option> <option>L</option> <option>M</option>
                            
                            </select>
                        </div>
                        <br>
                        <div class="input-group">
                        	<select class="form-control" name="cTeacher">
                            <option value="">Select Class Teacher</option>
                           `<?php 
						   		$q = @mysql_query("select * from staff order by `staffID`");
								
								if (@mysql_num_rows($q)>0)
								{
									for ($i=0; $i<@mysql_num_rows($q);$i++)
									{
										$rec = mysql_fetch_array($q);
										$staffID = $rec["staffID"];  $fullName = $rec["lastName"] ." ". $rec["firstName"] ." ". $rec["otherNames"];
										
										$chck = mysql_query("select * from classes where classTeacher='$staffID'");
											
											if (@mysql_num_rows($chck)==0)
											{
												echo "<option value='$staffID'>$fullName :: $staffID</option>";
											}
										
									}
									
								
								
								}
						   ?>
                            
                            </select>
                        </div>
                        <br>
                        <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Create" name="go" />
                        </div>
                         	
                    </form>
                </div>
            </div>
		<?php
	}
	
	function allClasses()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">All Classes</h3>
                </div>
                
                <div class="box-body">
                	<table class="table table-hover">
                    <tr><th>#</th><th>Class ID</th><th>Population</th><th>Class Teacher</th></tr>
                    
                    <?php
					
							$q = mysql_query("select * from classes order by `classid` ASC");
							$rows = mysql_num_rows($q);
							if ($rows>0)
							{
								for ($i=1; $i<=$rows; $i++)
								{
									$rec = mysql_fetch_array($q);
									$cid = $rec["classid"]; $cTeacher = $rec["classTeacher"];
									$split = explode("_", $cid);
									
									$q1 = @mysql_query("select * from students where class='$split[0]' and subclass='$split[1]' and status='ACTIVE'");
									if (@mysql_num_rows($q1)>0)
									{
									$population = @mysql_num_rows($q1);
									}else
									{$population = 0;}  
									echo "<tr><td>$i</td><td>$cid</td><td> $population </td><td>$cTeacher</td></tr>";
								}
							}
                    ?>
                    </table>
                </div>
                <!--end of box body-->
            </div>
		
		<?php
	}
	
	function assignClassTeacher()
	{
		?>
        <div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Assign Class Teacher</h3>
                </div>
                
                <div class="box-body">
                <?php
                	if ($_POST["go"]=="Assign")
					{
						$staffID = $_POST["sTeacher"]; $class = $_POST["class"];
						
						if ($staffID and $class)
						{
							$q= mysql_query("update classes set classTeacher='$staffID' where classid='$class'");
							
							if ($q) { echo "<div class='alert alert-success'>Operation Success </div>";}
								else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
						}
					}
				?>
                	<form action="" method="post" enctype="multipart/form-data">
                    
                    	
                         <div class="input-group">
                        	<select class="form-control" name="class">
                            <option value="">Select Class</option>
                           		 <?php
					
									$q = mysql_query("select * from classes order by `classid` ASC");
									$rows = mysql_num_rows($q);
									if ($rows>0)
									{
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = mysql_fetch_array($q);
											$cid = $rec["classid"];
											
											echo "<option value='$cid'>$cid</option>";
										}
									}
                    			?>
                            
                            </select>
                        </div>
                        <br>
                        <div class="input-group">
                        	<select class="form-control" name="sTeacher">
                            <option value="">Select Class Teacher</option>
                            <?php
								
								
									$q = mysql_query("select * from staff order by `staffID` ASC");
									$rows = mysql_num_rows($q);
									if ($rows>0)
									{
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = mysql_fetch_array($q);
											$sid = $rec["staffID"]; $fullName = $rec["lastName"] .", ". $rec["firstName"] ." ". $rec["othernames"];
											$chck = mysql_query("select * from classes where classTeacher='$sid'");
											
											if (@mysql_num_rows($chck)==0)
											{ 
												echo "<option value='$sid'>$fullName : $sid</option>";
											}
										}
									}
							
                    			?>
                            
                            </select>
                        </div>
                        <br>
                        <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Assign" name="go" />
                        </div>
                         	
                    </form>
                </div>
            </div>
		<?php
	}
	
	function updateClass()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Update Class</h3>
                </div>
                
                <div class="box-body">
                
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
                            <input type="submit" class="btn btn-info" value="Create" name="go" />
                        </div>
                         	
                    </form>
                </div>
            </div>
		<?php
	}
	
	function createSubject()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Create Subject</h3>
                </div>
                
                <div class="box-body">
                	
                    <?php
                    
						if ($_POST["go"]=="Create")
						{
							$subjectCode = mysql_real_escape_string(filter_var(strtoupper($_POST['sCode']), FILTER_SANITIZE_STRING));
							$subjectTitle = mysql_real_escape_string(filter_var(strtoupper($_POST['sTitle']), FILTER_SANITIZE_STRING));
							
							$type = $_POST["type"];
							$cat = $_POST["category"];
							if ($subjectCode and $subjectTitle and $cat and $type)
							{
								$chck = mysql_query("select * from subjects where subjectID='$subjectCode'");
								if (mysql_num_rows($chck)>0){echo "<div class='alert alert-info'>Duplicate entry for Subject Code</div>"; }
								else
								{
								$q = mysql_query("insert into subjects values('$subjectCode','$subjectTitle','$type','$cat','ACTIVE')") or die (mysql_error());
								$tbl = "sc_".strtolower($subjectCode);
								$q2 = mysql_query("create table if not exists $tbl (recID varchar(150) NOT NULL,ref varchar(150) NOT NULL, studentID varchar(150) NOT NULL, ca1 varchar(150) NOT NULL, ca2 varchar(150) NOT NULL, ca3 varchar(150) NOT NULL, ca4 varchar(150) NOT NULL, exam varchar(150) NOT NULL, total varchar(150) NOT NULL, term varchar(150), session varchar(150), PRIMARY KEY (`recID`));") or die (mysql_error());
								if ($q and $q2) { echo "<div class='alert alert-success'>Operation Success </div>"; $subjectCode=""; $subjectTitle="";}
								else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
								}
							}
						}
					?>
                	<form action="" method="post" enctype="multipart/form-data">
                    
                    	<div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control " placeholder="Subject Code" name="sCode" value="<?php echo $subjectCode ?>"/>
                        </div>
                    	
                        
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Subject Title" name="sTitle" value="<?php echo $subjectTitle ?>" />
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
                        <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Create" name="go" />
                        </div>
                         	
                    </form>
                </div>
            </div>
		<?php
	}
	
	function allSubjects()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">All Subjects</h3>
                </div>
                
                <div class="box-body">
                	<table class="table table-hover">
                    <tr><th>#</th><th>Subject Code</th><th>Subject Title</th><th>Tytpe</th><th>Category</th><th>Subject Teacher</th></tr>
                    
                    <?php
					
							$q = mysql_query("select * from subjects order by `subjectid` ASC");
							$rows = mysql_num_rows($q);
							if ($rows>0)
							{
								for ($i=1; $i<=$rows; $i++)
								{
									$rec = mysql_fetch_array($q);
									$sid = $rec["subjectID"]; $sTitle= $rec["subjectTitle"]; $sTeacher = $rec["subjectTeacher"];
									$type = $rec["type"];  $cat = $rec["category"];
									echo "<tr><td>$i</td><td><a href=''>$sid</a></td> <td>$sTitle</td> <td>$type</td> <td>$cat</td>
									<td>
									<a href=''>".getStaffName($sTeacher)."</a>
									</td></tr>";
								}
							}
                    ?>
                    </table>
                </div>
                <!--end of box body-->
            </div>
		
		<?php
	}
	
	function assignSubjectTeacher()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Assign Subjects to Teachers</h3>
                </div>
                
                <div class="box-body">
                
                		<?php
                        	if ($_POST["go"]=="Assign")
							{
								$staffID = $_POST["sTeacher"];  $subject = $_POST["subject"];
								$classID = $_POST["classID"]; $recID = time();
								if ($subject and $staffID and $classID)
								{
									$chck = mysql_query("select * from subject_allocation where staffID='$staffID' and subjectID='$subject' and classID='$classID'");
									if (@mysql_num_rows($chck)>0) {echo "<div class='alert alert-info'>Teacher has already been allocated to this Subject</div>";}
									else
									{
									$q = mysql_query("insert into subject_allocation values('$recID','$staffID','$subject','$classID')");
									
									if ($q) { echo "<div class='alert alert-success'>Operation Success </div>"; }
										else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
									}
								} else {echo "<div class='alert alert-danger'>Make all Sellections</div>";}
							}
						?>
                	<form action="" method="post">
                    	
                        <div class="input-group">
                        	<select class="form-control" name="sTeacher">
                            <option value="">Select Subject Teacher</option>
                            <?php
								
								
									$q = mysql_query("select * from staff order by `staffID` ASC");
									$rows = mysql_num_rows($q);
									if ($rows>0)
									{
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = mysql_fetch_array($q);
											$sid = $rec["staffID"]; $fullName = $rec["lastName"] .", ". $rec["firstName"] ." ". $rec["othernames"];
											
											echo "<option value='$sid'>$fullName : $sid</option>";
										}
									}
							
                    			?>
                            
                            </select>
                        </div>
                        <br>
                        <div class="input-group">
                        	<select class="form-control" name="subject">
                            <option value="">Select Subject</option>
                            <?php
								
								
									$q = mysql_query("select * from subjects order by `subjectID` ASC");
									$rows = mysql_num_rows($q);
									if ($rows>0)
									{
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = mysql_fetch_array($q);
											$sid = $rec["subjectID"]; $sTitle = $rec["subjectTitle"];
											
											echo "<option value='$sid'>$sTitle</option>";
										}
									}
							
                    			?>
                            
                            </select>
                        </div>
                         <br>
                        <div class="input-group">
                        	<select class="form-control" name="classID">
                            <option value="">Select Class</option>
                            <?php
								
								
									$q = mysql_query("select * from classes order by `classID` ASC");
									$rows = mysql_num_rows($q);
									if ($rows>0)
									{
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = mysql_fetch_array($q);
											$sid = $rec["classid"]; 
											
											echo "<option value='$sid'>$sid</option>";
										}
									}
							
                    			?>
                            
                            </select>
                        </div>
                        <br>
                        <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Assign" name="go" />
                        </div>
                    </form>
                    
                    <table class="table table-hover">
                    <tr> <th>#</th> <th>Staff ID</th> <th>Staff Name</th> <th>Subject</th> <th>Class</th> </tr>
                    <?php
                    	
						$fq = mysql_query("select * from subject_allocation order by `staffID` ASC");
						
						if (@mysql_num_rows($fq)>0)
						{
							for ($i=1; $i<=@mysql_num_rows($fq); $i++)
							{
								$frec = mysql_fetch_array($fq);
								
								$fStaffID = $frec["staffID"]; $fSid = $frec["subjectID"]; $fClassID = $frec["classID"];
								$staffName = getStaffName($fStaffID); $subjectName = getSubjectName($fSid);
								
								echo "<tr> <td>$i</td> <td>$fStaffID</td> <td>$staffName</td> <td>$subjectName</td> <td>$fClassID</td> </tr>";
							}
						}
					?>
                    </table>
                </div>
            </div>
		<?php
	}
	
	function updateSubject()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Update Subject</h3>
                </div>
                
                <div class="box-body">
                	
                    <form action="" method="post">
                    
                    	<div class="input-group col-lg-6">
                        	
                           
                        	<select class="form-control" name="Code">
                            <option value="">Select Subject</option>
                            <?php
								
								
									$q = mysql_query("select * from subjects order by `subjectID` ASC");
									$rows = mysql_num_rows($q);
									if ($rows>0)
									{
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = mysql_fetch_array($q);
											$sid = $rec["subjectID"]; $sTitle = $rec["subjectTitle"];
											
											echo "<option value='$sid'>$sTitle</option>";
										}
									}
							
                    			?>
                            
                            </select>
                            <span class="input-group-btn"><button class="btn btn-primary" name="do" value="search"><i class="fa fa-search"></i></button></span>
                       
                            
                        </div>
                       
                    </form>
                    	<?php
                        	if ($_POST["do"]=="search")
							{
								$subjectCode = mysql_real_escape_string(filter_var(strtoupper($_POST['Code']), FILTER_SANITIZE_STRING));
								
								$q3 = mysql_query("select * from subjects where subjectID='$subjectCode'");
								if (@mysql_num_rows($q3)>0)
								{
									
									$subjectTitle = mysql_result($q3, 0, "subjectTitle");
									$type = mysql_result($q3, 0, "type");
									$cat = mysql_result($q3, 0, "category");
								}
							}
						?>
                    <br>
                	<?php
                    
						if ($_POST["go"]=="Update")
						{
							$subjectCode = mysql_real_escape_string(filter_var(strtoupper($_POST['sCode']), FILTER_SANITIZE_STRING));
							$subjectTitle = mysql_real_escape_string(filter_var(strtoupper($_POST['sTitle']), FILTER_SANITIZE_STRING));
							//$sTeacher = mysql_real_escape_string(filter_var(strtoupper($_POST['sTeacher']), FILTER_SANITIZE_STRING));
							$type = $_POST["type"];
							$cat = $_POST["category"];
							
							if ($subjectCode and $subjectTitle)
							{
								
								
								$q = mysql_query("update subjects set subjectTitle='$subjectTitle', type='$type', category='$cat' where subjectID='$subjectCode'") or die (mysql_error());
								
								if ($q) { echo "<div class='alert alert-success'>Operation Success </div>"; 
								$subjectCode=""; $subjectTitle=""; $sTeacher = ""; $type =""; $cat="";}
								else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
								
							}else {echo "<div class='alert alert-danger'>Fill all necessary fields</div>";}
						}
					?>
                	<form action="" method="post" enctype="multipart/form-data">
                    
                    	<div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="hidden" name="sCode" value="<?php echo $subjectCode ?>" />
                            <input type="text" class="form-control" disabled="disabled" placeholder="Subject Code" value="<?php echo $subjectCode ?>"/>
                        </div>
                    	
                        
                        <br>
                        <div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Subject Title" name="sTitle" value="<?php echo $subjectTitle ?>" />
                        </div>
                        <br>
                        <div class="input-group">
                        	<select class="form-control" name="sTeacher">
                            <option value="<?php echo $sTeacher?>"> <?php echo getStaffName($sTeacher) ." :: ". $sTeacher ?></option>
                            <?php
								
								
									$q = mysql_query("select * from staff order by `staffID` ASC");
									$rows = mysql_num_rows($q);
									if ($rows>0)
									{
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = mysql_fetch_array($q);
											$sid = $rec["staffID"]; $fullName = $rec["lastName"] .", ". $rec["firstName"] ." ". $rec["othernames"];
											
											echo "<option value='$sid'>$fullName :: $sid</option>";
										}
									}
							
                    			?>
                            
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                        <b>Type of Subject</b>: <?php echo $type?> <br>
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
                        <b>Subject Category</b>: <?php echo $cat?> <br>
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
                        <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Update" name="go" />
                        </div>
                         	
                    </form>
                </div>
            </div>
		<?php
	}
	
	function studentsScores()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Students Records
                    	<?php
			if (isset($_GET["stdntClass"])){
                        	echo " || <b>".$_GET["stdntClass"]. "</b> Broad Sheet";
			}
						?>
                    </h3>
                </div>
                
                <div class="box-body" style="overflow:scroll">
                
                	<form action="" method="get" >
                    
                        
                       <div class="input-group">
                        	<select class="form-control" name="stdntClass">
                            <option value="SELECT">Select Class</option>
                            
                           		 <?php
							
									$q = mysql_query("select * from classes order by `classid` ASC");
									$rows = mysql_num_rows($q);
									if ($rows>0)
									{
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = mysql_fetch_array($q);
											$cid = $rec["classid"];
											
											echo "<option value='$cid'>$cid</option>";
										}
									}
                    			?>
                            
                            </select>
                        

                        </div>
                       <br>
                        <div class="input-group"> <input type="hidden" name="id" value="61" />
                        
                            <input type="submit" class="btn btn-info" value="Load" name="go" />
                         </div>
                        </form>
                        
                         
                         	
                    
                    <br>
                    
                    
                    <?php

				if(isset($_GET["stdntClass"])) { $currClass= $_GET["stdntClass"];
			
		?>
		<div class="input-group pull-right">
                            <a href="<?php $cl=$_GET["stdntClass"]; echo "forms/classBroadSheet.php?stdntClass=$cl";?>" target="_blank">
                            <button class="btn btn-primary">Export PDF</button></a>
                        </div>
			
		<?php			
						echo '
								<table class="table table-hover table-striped" width=1200>
                    			<tr><th>#</th><th>Student ID</th>
						';	
							//basic subjects
							 
							
							$subjectList = "";
							if (substr($currClass,0,1)=="J" or substr($currClass,0,1)=="P")
							{
									$q= mysql_query("select * from subjects where category='BASIC' order by `subjectID`");
									if (@mysql_num_rows($q)>0)
									{
										for ($i=0; $i<mysql_num_rows($q); $i++ )
										{
											$rec = mysql_fetch_array($q);
											$subjectID = $rec["subjectID"]; $sTitle = $rec["subjectTitle"];
											//echo "<th>$subjectID</th>";
											$subjectList = $subjectList . ",". $subjectID;
										}
									}
							}
							//post basic subjects
							else if (substr($currClass,0,1)=="S")
							{
									$q= mysql_query("select * from subjects where category='POSTBASIC' order by `subjectID`");
									
									if (@mysql_num_rows($q)>0)
									{
										for ($i=0; $i<mysql_num_rows($q); $i++ )
										{
											$rec = mysql_fetch_array($q);
											$subjectID = $rec["subjectID"]; $sTitle = $rec["subjectTitle"];
											//echo "<th>$subjectID</th>";
											$subjectList = $subjectList . ",". $subjectID;
										}
									}
							}
							
							//both basic and postBasic
								$q= mysql_query("select * from subjects where category='BOTH' order by `subjectID`");
									if (@mysql_num_rows($q)>0)
									{
										for ($i=0; $i<mysql_num_rows($q); $i++ )
										{
											$rec = mysql_fetch_array($q);
											$subjectID = $rec["subjectID"]; $sTitle = $rec["subjectTitle"];
											//echo "<th>$subjectID</th>";
											$subjectList = $subjectList . ",". $subjectID;
										}
									}
									
							$lst = explode(",", $subjectList);
							sort($lst);
							for ($k=0; $k<sizeof($lst); $k++)
							{
								
								echo "<th>$lst[$k]</th>";
							}
                    	
					echo '<th>Total Score</th></tr>';
					
                    	
							$split = explode("_",$currClass);
							$mclass= $split[0]; $sclass= $split[1];
							$fetch = @mysql_query("select * from students where class='$mclass' and subClass='$sclass'");
							$totalScore = "";
							if (@mysql_num_rows($fetch)>0)
							{
								$recRows = mysql_num_rows($fetch);
								for ($i=1; $i<=$recRows; $i++)
								{
									$rec = mysql_fetch_array($fetch);
									$stdntID = $rec["studentID"];
									echo "<tr> <td>$i</td> <td>$stdntID</td>";
									
									
									$subject= explode(",",$subjectList);
									sort($subject);
										for ($j=0; $j<count($subject); $j++ )
										{
											
											$subjectID = $subject[$j];
											$tbl = strtolower("sc_".$subjectID);
											
											//get record ID of student\'s subject score
											$recID = getSubjectRegID($stdntID, $subjectID);
											
											$score = getSubjectScore($recID, $tbl, $_SESSION["term"]);
											echo "<td>$score</td>";
											
											$totalScore +=$score;
										}
									
									echo "<td><b>$totalScore</b></td>";
									echo "</tr>";
								}
							}
							
						
						
						echo '</table>';
			}
					?>
                    
                    
                </div>
            </div>
		<?php
	}
	
	function summarizedScores()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Summerized Scores</h3>
                </div>
                
                <div class="box-body">
                
                    <table class="table table-hover">
                    <tr><th>#</th><th>Class ID</th><th>subjects here</th></tr>
                    </table>
                    
                </div>
            </div>
		<?php
	}
	
	function scoreAnalysis()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Scores Analysis  
                    <?php if (isset($_GET["class"]) and isset($_GET["subject"]))  
							{echo "[<b>". getSubjectName($_GET["subject"]) ."</b> for <b>". $_GET["class"]."</b>]";}
							
					?>
                    </h3>
                </div>
                
                <div class="box-body">
                <!-- pick a class and navigate subjects -->
                
                <form action="" method="get" enctype="multipart/form-data">
                    
                        
                         <div class="input-group col-lg-6">
                        	<select class="form-control" name="class">
                            <option value="SELECT">Select Class</option>
                            
                           		 <?php
									echo "<option value=".$_GET["class"]." selected>".$_GET["class"]."</option>";
									$q = @mysql_query("select * from classes order by `classid` ASC");
									
									if (@mysql_num_rows($q)>0)
									{
										$rows = mysql_num_rows($q);
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = mysql_fetch_array($q);
											$cid = $rec["classid"];
											
											echo "<option value='$cid'>$cid</option>";
										}
									}
                    			?>
                            
                            </select>
                        	<select class="form-control" name="subject">
                            <option value="">Select Subject</option>
                            
                           		 <?php
									
									
									$q = @mysql_query("select * from subjects order by `subjectID` ASC");
									
									if (@mysql_num_rows($q)>0)
									{	$rows = mysql_num_rows($q);
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = mysql_fetch_array($q);
											$sid = $rec["subjectID"]; $sTitle = $rec["subjectTitle"];
											
											echo "<option value='$sid'>$sTitle</option>";
										}
									}
                    			?>
                            
                            </select>

                        </div>
                       
                        <div class="input-group"><input type="hidden" name="id" value="63" >
                            <input type="submit" class="btn btn-info" value="Load" name="go" />
                        </div>
                         	
                    </form>
                
                
                    <table class="table table-hover table-striped">
                    <tr><th>#</th><th>Student ID</th><th>subject Name</th></tr>
                    
                    		<?php
                            	if (isset($_GET["go"])=="Load")
							{
								$subjectID= $_GET["subject"];
								$class = $_GET["class"];
								
								
								if ($subjectID and $class)
								{
									
									$stdntListSplit = highestSubjectScore($subjectID, $class);
									
										
										
										$sn = 1;
										for ($t=0; $t<count($stdntListSplit); $t++)
										{
											
											
									echo "<tr><td>$sn</td><td>".$stdntListSplit[$t]['student']."</td><td>".$stdntListSplit[$t]['score']."</td></tr>";
											$sn+=1;
										}
									
								}
							}
							?>
                    </table>
                   
                </div>
            </div>
		<?php
	}
	
	function scoresSearch()
	{
		?>
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
		<?php
	}
	
	function subjectScores()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Input Subjects Scores 
                    <?php if (isset($_GET["class"]) and isset($_GET["subject"]))  
							{echo "[<b>". getSubjectName($_GET["subject"]) ."</b> for <b>". $_GET["class"]."</b>]";}
							
					?>
                    </h3>
                </div>
                
                <div class="box-body">
                
                <form action="" method="get" enctype="multipart/form-data">
                    
                        
                         <div class="input-group col-lg-6">
                        	<select class="form-control" name="class">
                            <option value="SELECT">Select Class</option>
                            
                           		 <?php
							echo "<option value=".$_GET["class"]." selected>".$_GET["class"]."</option>";
									$q = @mysql_query("select * from classes order by `classid` ASC");
									
									if (@mysql_num_rows($q)>0)
									{
										$rows = mysql_num_rows($q);
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = mysql_fetch_array($q);
											$cid = $rec["classid"];
											
											echo "<option value='$cid'>$cid</option>";
										}
									}
                    			?>
                            
                            </select>
                        	<select class="form-control" name="subject">
                            <option value="">Select Subject</option>
                            
                           		 <?php
							
									$q = @mysql_query("select * from subjects order by `subjectID` ASC");
									
									if (@mysql_num_rows($q)>0)
									{	$rows = mysql_num_rows($q);
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = mysql_fetch_array($q);
											$sid = $rec["subjectID"]; $sTitle = $rec["subjectTitle"];
											
											echo "<option value='$sid'>$sTitle</option>";
										}
									}
                    			?>
                            
                            </select>

                        </div>
                       
                        <div class="input-group"><input type="hidden" name="id" value="71" >
                            <input type="submit" class="btn btn-info" value="Load" name="go" />
                            
                        </div>
                        <div class="input-group  pull-right">
                            <a href="<?php echo "forms/scoreSheet.php?class=".$_GET["class"]."&subject=".$_GET["subject"].""; ?>" target="_blank"><input type="button" class="btn btn-info" value="Score Sheet" /></a>
                        </div>
                         	
                    </form>
                    <br>
                    	<?php
                        	if (isset($_POST["save"])=="Save")
							{
								$actvTbl = strtolower("sc_".$_POST["tbl"]);
								$recRows = $_POST["rows"];
								
								for ($k=1; $k<=$recRows; $k++)
								{
									$arecID = $_POST["rec_$k"];
									
									$uca1 =  mysql_real_escape_string(filter_var($_POST["ca1_$k"], FILTER_SANITIZE_STRING));
									$uca2 =  mysql_real_escape_string(filter_var($_POST["ca2_$k"], FILTER_SANITIZE_STRING));
									$uca3 = mysql_real_escape_string(filter_var($_POST["ca3_$k"], FILTER_SANITIZE_STRING));
									$uca4 = mysql_real_escape_string(filter_var($_POST["ca4_$k"], FILTER_SANITIZE_STRING));
									$uexam = mysql_real_escape_string(filter_var($_POST["exam_$k"], FILTER_SANITIZE_STRING));
									$total = $uca1 + $uca2 + $uca3 + $uca4 + $uexam;
									
									$q4 = mysql_query("update $actvTbl set ca1='$uca1', ca2='$uca2', ca3='$uca3', ca4='$uca4', exam='$uexam', total='$total' where recID='$arecID'") or die (mysql_error());
									if ($q4) {$flag="success";}
								}
								if ($flag=="success") {echo "<div class='alert alert-success'>Operation success</div>";}
									else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
								
							}
						?>
                    <form action="" method="post">
                	<table class="table table-hover">
                    	<tr><th>#</th><th>Student ID</th><th>CA1</th><th>CA2</th><th>CA3</th><th>CA4</th><th>EXAM</th><th>TOTAL</th></tr>
                        <?php
							if (isset($_GET["go"])=="Load")
							{
								$subjectID= $_GET["subject"];
								
								$split = explode ("_",$_GET["class"]);
								$mclass = $split[0]; $subclass = $split[1];
								$term = $_SESSION["term"];
								$session = $_SESSION["session"];
								
								if ($subjectID and $_GET["class"])
								{
									$q = mysql_query("select * from students where class='$mclass' and subclass='$subclass'") or die (mysql_error());
									if (@mysql_num_rows($q)>0)
									{
										$rows = @mysql_num_rows($q);
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = mysql_fetch_array($q);
											$studentID = $rec["studentID"];
											
											$q2 = mysql_query("select * from reg_subjects where studentID='$studentID' and subjectID='$subjectID' and session='$session'");
											if (@mysql_num_rows($q2)>0)
											{
												
												$recID = mysql_result($q2,0,"recID");
												$tbl = "sc_".$subjectID;
												$q3 = @mysql_query("select * from $tbl where ref='$recID' and term='$term'");
												
												if (@mysql_num_rows($q3)>0)
												{
													$sid = mysql_result($q3,0,"studentID");
													$scoreRec = mysql_result($q3,0,"recID");
													
													$ca1 = mysql_result($q3,0,"ca1");  $ca2 = mysql_result($q3,0,"ca2"); 
													$ca3 = mysql_result($q3,0,"ca3");  $ca4 = mysql_result($q3,0,"ca4");
													$exam = mysql_result($q3,0,"exam"); $total = mysql_result($q3,0,"total");
												echo "<tr> <td>$i</td> 
											<td><input type='hidden' name='rec_$i' value='$scoreRec'>$sid</td> 
											<td><input type='text' name='ca1_$i' class='form-control' style='width:50px;' value='$ca1' /></td> 
											<td><input type='text' name='ca2_$i' class='form-control' style='width:50px;' value='$ca2' /></td> 
											<td><input type='text' name='ca3_$i' class='form-control' style='width:50px;' value='$ca3' /></td>
											<td><input type='text' name='ca4_$i' class='form-control' style='width:50px;' value='$ca4' /></td> 
											<td><input type='text' name='exam_$i' class='form-control' style='width:50px;' value='$exam' /></td> 
											<td><input type='text' name='total_$i' disabled class='form-control' style='width:50px;' value='$total' /></td>
												</tr>";	
												}
												
											}//check record availability in registered subjects table
											
										}// end of loping students table
									}
									else { //use header redirection for appropriate location of error msg 
									}
								}
							}
						?>
                    </table>
                    
                    <br>
                        <div class="input-group pull-right col-lg-4">
                        <input type="hidden" name="tbl" value="<?php echo $subjectID?>" />
                        <input type="hidden" name="rows" value="<?php echo $rows?>" />
                            <input type="submit" class="btn btn-success" value="Save" name="save" />
                        </div>
                	</form>
                </div>
                
           	</div>
		
		<?php
	}
	
	function grading()
	{
		echo "grading adjustments interface";
	}
	
	function ClassResults()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Generate Students Report Sheet
                    	<?php
                        	echo "For <b>"; if (isset($_GET["class"])) {echo $_GET["class"]; } echo "</b>";
						?>
                    </h3>
                </div>
                
                <div class="box-body">
                
                <form action="" method="get" enctype="multipart/form-data">
                    
                     
                        <div class="input-group">
                        	<select class="form-control" name="class">
                            <option value="">Select Class</option>
                            <?php
                            	$q = mysql_query("select * from classes order by `classID`");
								
								if (@mysql_num_rows($q)>0)
								{
									for ($i=0; $i<mysql_num_rows($q); $i++)
									{
										$rec = mysql_fetch_array($q);
										$cid = $rec["classid"];
										echo "<option value='$cid'>$cid</option>";
									}
								}
							?>
                            </select>
                       	<input type="hidden" name="id" value="81" />
                       
                        </div>
                     
                        
                        <div class="input-group pull-right col-lg-7">
                            <input type="submit" class="btn btn-info" value="Submit" name="go" />
                        </div>
                         	
                    </form>
                    <br><hr>
                     <div class="input-group">
                    <?php
                    		if (isset($_GET["class"])) 
							{ 
								$class = $_GET["class"];
								echo "
									 <a href='forms/classResult.php?class=$class' target='_blank'>
                    					<button type='button' class='btn btn-primary'>All Report Sheets</button>
                   					 </a> &nbsp &nbsp &nbsp &nbsp
								";
								if ($_SESSION["term"]=="THIRD")
								{
									echo "
										<a href='forms/classResultCumulative.php?class=$class' target='_blank'>
                    					<button type='button' class='btn btn-primary'>Cumulative Report Sheet</button>
                   						</a>
									";
								}
							} else { $class = "";}
					?>
                   <hr>
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
		
		<?php
	}
	
	function ratings()
	{
		
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Affective Domain and Psychomoto</h3>
                </div>
                <div class="box-body">
                		
                        
                </div>
           </div>
		<?php
	}
	
	function schoolCalender()
	{
		?>
			<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">School Calender</h3>
                </div>
                
                <div class="box-body">
                
                	<?php 
                    	if ($_GET["action"]!="")
						{
							activateTerm($_GET["term"], $_GET["session"]);
						}
						if ($_POST["go"]=="OK")
						{
							$fDate = mysql_real_escape_string(filter_var(strtoupper($_POST["finishDate"]),FILTER_SANITIZE_STRING));
							$beginDate = mysql_real_escape_string(filter_var(strtoupper($_POST["beginDate"]),FILTER_SANITIZE_STRING));
							$term = $_POST["term"];
							$session = mysql_real_escape_string(filter_var(strtoupper($_POST["session"]),FILTER_SANITIZE_STRING));
							$recID = rand(000, 99999);
							$st = $_POST["status"];
							if ($session and $term)
							{
								$chck = mysql_query("select * from sessions where session='$session' and term='$term'");
								if (@mysql_num_rows($chck)>0)
								{
									$rec = mysql_result($chck, 0, "recID");
									$q = mysql_query("update sessions set resumptionDate='$beginDate' and closingDate='$fDate' where recID='$recID'");
									if ($q) {echo "<div class='alert alert-success'>Operation Success</div>";}
									else  {echo "<div class='alert alert-danger'>Operation Failed</div>";}
								}
								else
								{
									$q = mysql_query("insert into sessions values('$recID','$session','$term','$beginDate','$fDate','$st')");
									
									if ($q) {echo "<div class='alert alert-success'>Operation Success</div>";}
									else  {echo "<div class='alert alert-danger'>Operation Failed</div>";}
								}
							}
						}
					?>
                		<form action="" method="post">
                        	<div class="input-group col-lg-7">
                            	<input type="text" class="form-control" name="session" placeholder="Academic Session" />
                            </div>
                            <br>
                            <div class="input-group">
                            	<select class="form-control" name="term">
                                <option>FIRST</option> <option>SECOND</option> <option>THIRD</option>
                                </select>
                            </div>
                            <br>
                            <div class="input-group col-lg-7">
                            	<input type="text" class="form-control" name="beginDate" placeholder="Term Begining Date" />
                            </div>
                            <br>
                            <div class="input-group col-lg-7">
                            	<input type="text" class="form-control" name="finishDate" placeholder="Term Finishing Date" />
                            </div>
                            <div class="input-group col-lg-3 pull-right">
                            	<input type="submit" class="btn btn-info" name="go" value="OK" />
                            </div>
                            <br>
                            <div class="input-group">
                            	<select class="form-control" name="status">
                                <option aelected value="CURRENT">CURRENT</option> <option value="NEXT">NEXT</option>
                                <option value="PAST">PAST</option> 
                                </select>
                            </div>
                        </form>
                        <hr>
                        <table class="table table-striped">
                        	<tr> <th>#</th> <th>Session</th> <th>Term</th> <th>Beginning Date</th> <th>End Date</th> <th>Status</th> </tr>
                            <?php
                            	$q = mysql_query("select * from sessions order by `session` DESC");
								if (@mysql_num_rows($q)>0)
								{
									for ($i=1; $i<=mysql_num_rows($q); $i++)
									{
										$rec = mysql_fetch_array($q);
										$fSession = $rec["session"]; $fTerm = $rec["term"]; $fBeginDate = $rec["resumptionDate"];
										$fEndDate = $rec["closingDate"]; $fst = $rec["status"];
										echo "
										<tr> <td>$i</td> <td>$fSession</td> <td>$fTerm</td> <td>$fBeginDate</td> <td>$fEndDate</td> 
										";
										if ($fst=="NEXT")
										{
											echo "<td><a href='index.php?id=91&action=act&session=$fSession&term=$fTerm'><button class='btn btn-info' type='button'>Activate</button></a></td>";
										}
										else {echo "<td>$fst</td>";}
										"
										 </tr>
										";
									}
								}
								
							?>
                        </table>
                        
                </div>
             </div>
		<?php
	}
	
	function promotions()
	{
		?>
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
                            	$q = mysql_query("select * from classes order by `classID`");
								
								if (@mysql_num_rows($q)>0)
								{
									for ($i=0; $i<mysql_num_rows($q); $i++)
									{
										$rec = mysql_fetch_array($q);
										$cid = $rec["classid"];
										echo "<option value='$cid'>$cid</option>";
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
												$q = mysql_query("select * from classes order by `classID`");
												
												if (@mysql_num_rows($q)>0)
												{
													for ($i=0; $i<mysql_num_rows($q); $i++)
													{
														$rec = mysql_fetch_array($q);
														$cid = $rec["classid"];
														echo "<option value='$cid'>$cid</option>";
													}
												}
											?>
                            </select>
                                        </td>
                                    </tr>
                                    <tr> <td> &nbsp </td> <td> 
                                    <?php if ($_SESSION["term"]=="THIRD") {?>
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
		<?php
	}
	
	function mailBox()
	{
		echo "mailbox interface";
	}
	
	function complaintsAndSuggestions()
	{
		echo "Complaints and suggestion interface";
	}
	
	function profile()
	{
		?>
		<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?php 
			  echo "Welcome <b>".getStaffName($_SESSION["smuser"]); 
			  echo "</b> |--| Currently logged in as <b>" . $_SESSION["smuser"]."</b>";
			  	
					$q = mysql_query("select * from staff where staffID='".$_SESSION["smuser"]."' and status='ACTIVE'");
					if (@mysql_num_rows($q)>0)
					{
						for ($i=0; $i<@mysql_num_rows($q);$i++)
						{
							$rec= mysql_fetch_array($q);
							$lName = $rec["lastName"]; $fName = $rec["firstName"]; $oName = $rec["otherNames"]; $gender = $rec["gender"]; 
							$dob = $rec["dob"];  $address = $rec["address"]; $pnum = $rec["phone"]; $email = $rec["email"]; 
							$secQue = $rec["secQue"]; $secQueAns = $rec["secAns"]; $accessCode = $rec["accessCode"];
							$status = $rec["status"];
  						}
					}
			  ?></h3>
            </div>
            <div class="box-body">
             		<form action="" method="post">
                    	<table class="table">
                        	<tr> <td> &nbsp </td><td> &nbsp </td> <td>&nbsp </td><td> 
                            <img src="<?php echo "files/staff/".$_SESSION["pic"]?>" width="150" height="150" class="img img-circle"> </td> </tr>
                        	<tr> <td>Last Name:</td><td> <?php echo $lName.","?> </td> <td>Other Names:</td><td> <?php echo $fName ." ".$oName?> </td> </tr>
                            <tr> <td>Gender:</td><td> <?php echo $gender?> </td> <td>Date of Birth:</td><td> <?php echo $dob?> </td> </tr>
                            <tr> <td>Email:</td><td> <input type="text" class="form-control" name="email" value="<?php echo strtolower($email)?>"> </td> 
                            	 <td>Phone:</td><td> <input type="text" name="phone" class="form-control" value="<?php echo $pnum?>"> </td> </tr>
                            <tr> <td>Address:</td><td> <textarea name="address" cols="25" rows="3"> <?php echo $address?> </textarea></td> 
                            	 <td>Security Question:</td><td> <?php echo $secQue?> </td> </tr>
                            <tr> <td>Access Code:</td><td><input type="text" class="form-control" value="<?php echo $accessCode?>" id="" name="accCode"> </td> 
                            	 <td> <button class="btn btn-info" type="button">Generate</button> </td><td></td> </tr>
                            <tr> <td>Clearance:</td><td><?php echo $_SESSION["clrs"]?></td> <td>Status:</td><td><?php echo $status?></td> </tr>
                            <tr> <td> &nbsp </td><td> 
<a href="" ><button type="button" name="changePass" class="btn btn-primary"> Change Password </button></a>
</td> 
                            <td> <button type="submit" name="update" class="btn btn-success" value="Update"> Update</button> </td><td> &nbsp </td> </tr>
                        </table>
                    </form>
            </div>
            <!-- /.box-body -->
          </div>
		<?php
	}
	
	function settings()
	{
		?>
		<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">School Setup</h3>
            </div>
            <div class="box-body">
             		<?php
                    		if ($_POST["go"]=="Save")
							{
								$schoolNameLong = mysql_real_escape_string(filter_var(strtoupper($_POST["longName"]), FILTER_SANITIZE_STRING));
								$schoolNameShort = mysql_real_escape_string(filter_var(strtoupper($_POST["shortName"]), FILTER_SANITIZE_STRING));
								$pobox = mysql_real_escape_string(filter_var(strtoupper($_POST["poBox"]), FILTER_SANITIZE_STRING));
								$address = mysql_real_escape_string(filter_var(strtoupper($_POST["address"]), FILTER_SANITIZE_STRING));
								$motto = mysql_real_escape_string(filter_var(strtoupper($_POST["motto"]), FILTER_SANITIZE_STRING));
								$mission = mysql_real_escape_string(filter_var(strtoupper($_POST["mission"]), FILTER_SANITIZE_STRING));
								$vision = mysql_real_escape_string(filter_var(strtoupper($_POST["vision"]), FILTER_SANITIZE_STRING));
								$about = mysql_real_escape_string(filter_var(ucfirst(trim($_POST["about"])), FILTER_SANITIZE_STRING));
								
								
								
								if ($schoolNameLong and $motto and $address)
								{
									
									
										$chck = mysql_query("select * from school where recID='10001'");
										if (@mysql_num_rows($chck)>0) 
										{
											$q = mysql_query("update school set longName='$schoolNameLong', shortName='$schoolNameShort',
										mission='$mission', vision='$vision', motto='$motto', address='$address', pobox='$pobox',
										about = '$about' where recID='10001'") or die (mysql_error());
										
										if ($q) {echo "<div class='alert alert-success'>Saved</div>";}
										else {echo "<div class='alert alert-danger'>Save failed</div>";}
										}
										
										else
										{
											$done = upload("logo", "logo", "school", 1024*400);
										   if ($done) //upload logo
											{
												$q = mysql_query("insert into school values('10001','$schoolNameLong','$schoolNameShort',
												'$mission','$vision','$motto','$address','$pobox','$about','$done')") or die (mysql_error());
												
												if ($q) {echo "<div class='alert alert-success'>Saved</div>";}
												else {echo "<div class='alert alert-danger'>Save failed</div>";}
											}
										}
									
								}
							}
							
							$q1 = mysql_query("select * from school where recID='10001'");
							if (@mysql_num_rows($q1)>0)
							{
								$schoolNameLong = mysql_result($q1, 0, "longName");
								$schoolNameShort = mysql_result($q1, 0, "shortName");
								$pobox = mysql_result($q1, 0, "pobox");
								$address = mysql_result($q1, 0, "address");
								$motto = mysql_result($q1, 0, "motto");
								$mission = mysql_result($q1, 0, "mission");
								$vision = mysql_result($q1, 0, "vision");
								$about = mysql_result($q1, 0, "about");
							}
					?>
                    <form action="" method="post" enctype="multipart/form-data">
                    		<div class="input-group col-lg-10">
                            	<input type="text" class="form-control" placeholder="School Long Name  *" name="longName" value="<?php  echo $schoolNameLong?>" />
                            </div>
                            <br>
                            <div class="input-group col-lg-10">
                            	<input type="text" class="form-control" placeholder="School Short Name" name="shortName" value="<?php  echo $schoolNameShort?>" />
                            </div>
                            <div class="input-group col-lg-10">
                            	* max size 400KB  file type(.jpg .gif .png)
                            	<input type="file" class="form-control" name="logo" />
                            </div>
                            <br>
                            <div class="input-group col-lg-10">
                            	<input type="text" class="form-control" placeholder="P.O Box" name="poBox" value="<?php  echo $pobox?>"/>
                            </div>
                            
                            <br>
                            <div class="input-group col-lg-10">
                            	<input type="text" class="form-control" placeholder="Address *" name="address" value="<?php  echo $address?>"/>
                            </div>
                            <br>
                            <div class="input-group col-lg-10">
                            	<input type="text" class="form-control" placeholder="Motto *" name="motto" value="<?php  echo $motto?>"/>
                            </div>
                            <br>
                            <div class="input-group col-lg-10">
                            	<input type="text" class="form-control" placeholder="Mission" name="mission" value="<?php  echo $mission?>"/>
                            </div>
                             <br>
                            <div class="input-group col-lg-10">
                            	<input type="text" class="form-control" placeholder="Vision" name="vision" value="<?php  echo $vision?>"/>
                            </div>
                             <br>
                            <div class="input-group col-lg-10">
                            	<label class="form-control">About Your School</label>
                            	<textarea class="form-control" name="about" rows="20" cols="20">
                                <?php echo $about?>
                                </textarea>
                            </div>
                            <br>
                            <div class="input-group col-lg-6 pull-right">
                            	<input type="submit" class="btn btn-info" name="go" value="Save" />
                            </div>
                    </form>
            </div>
            <!-- /.box-body -->
          </div>
		<?php
	}
?>