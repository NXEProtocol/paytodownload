<?php 
$site = $this->model->site();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $site->sitename; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo URL; ?>/<?php echo $site->sitetheme; ?>/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php echo URL; ?>/<?php echo $site->sitetheme; ?>/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo URL; ?>/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo URL; ?>/<?php echo $site->sitetheme; ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo URL; ?>"><?php echo $site->sitename; ?></a>
  </div>
  <!-- /.navbar-header -->

  <ul class="nav navbar-top-links navbar-right">
    <!-- /.dropdown -->
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
      </a>
      <ul class="dropdown-menu dropdown-user">
	  <?php if($this->model->isloggedin() == true){ ?>
        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
        </li>
        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
        </li>
        <li class="divider"></li>
        <li><a href="<?php echo URL; ?>user/logout?token=<?php echo $_SESSION['token']; ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </li>
		<?php }else{ ?>
		<li><a href="<?php echo URL; ?>user/login"><i class="fa fa-sign-out fa-fw"></i> Login</a>
        </li>
		<li><a href="<?php echo URL; ?>user/register"><i class="fa fa-sign-out fa-fw"></i> Register</a>
        </li>
		<?php } ?>
      </ul>
      <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
  </ul>
  <!-- /.navbar-top-links -->

  <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
      <ul class="nav" id="side-menu">
        <li>
          <a href="<?php echo URL; ?>dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>User<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level collapse">
            <li>
              <a href="<?php echo URL; ?>/user/edit">Edit Profile</a>
            </li>
            <li>
              <a href="<?php echo URL; ?>/dashboard/withdraw">Withdraw</a>
            </li>
          </ul>
          <!-- /.nav-second-level -->
        </li>
      </ul>
    </div>
    <!-- /.sidebar-collapse -->
  </div>
  <!-- /.navbar-static-side -->
</nav>
<div id="page-wrapper">