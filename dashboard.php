<!DOCTYPE html>
<html>

<head>
     
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Divine destiny is a non governmental organization that helps orphange">
    <meta name="author" content="Segun Sowemimo">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Divine Destiny Dashboard</title>

    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <!--<link href="font-awesome/css/font-awesome.css" rel="stylesheet">-->
   <link href="assets/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css1/animate.css" rel="stylesheet">
    
     <link href="dropi/demo.css" rel="stylesheet">
      <link href="dropi/dropify.min.css" rel="stylesheet">
      <link href="dropi/dropify.svg" rel="stylesheet">
      <link href="dropi/dropify.eot" rel="stylesheet">
      <link href="dropi/dropify.ttf" rel="stylesheet">
      <link href="dropi/dropify.woff" rel="stylesheet">
   
	 <!--<link href="js1/plugins/dropzone/basic.min.css" rel="stylesheet">-->
    <!--<link href="js1/plugins/dropzone/dropzone.min.css" rel="stylesheet">-->
	
<link href="css1/chartist/chartist.min.css" rel="stylesheet">
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">-->

	
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

	 <link href="css1/style.css" rel="stylesheet">

   
</head>

<body>

<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Admin</strong>
                             </span>  </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="https://mentscrm.com.ng/liftfund/">Logout</a></li>
                            </ul>
                    </div>
                    <div class="logo-element">
                        D
                    </div>
                </li>
				   <li>
                    <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">My Information</span> </a>
					 <ul class="nav nav-second-level collapse">
                        <li><a href="dashboard?page=event">Events</a></li>
						<li><a href="dashboard?page=letter">News Letter</a></li>
						
						
                      
                    </ul>
                </li>
                
				
				
				
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="#">
                        <div class="form-group">
                            <!--<input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">-->
                        </div>
                    </form>
                </div>
				
				 <ul class="nav navbar-top-links navbar-right">
               

                <li>
                    <a href="https://mentscrm.com.ng/liftfund/">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>
               

            </nav>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
				  
				   <?php
						if(!isset($_GET['page'])){?>
						
                    <div class="text-center m-t-lg">
                        <h1>
                            Welcome in Divine Destiny dashboard
                        </h1>
                        <small>
                           <p> move to the navigation menus</p>
                        </small>
                    </div>
						<?php } ?>
					
					


					
                 
					

					
					
					    <?php
						if(isset($_GET['page']) && $_GET['page']=='event'){
							
							include('constants.php');
						   
						}
						 elseif(isset($_GET['page']) && $_GET['page']=='letter'){
						    include('constants.php');
					   } 
					  
					
					?>
                </div>
            </div>
        </div>
		 
		
        <div class="footer" style="background-color:#4a1828;color:white;">
		     
           <div class="pull-right">
                Designed by Segun S
            </div>
            <div>
                <strong>Copyright</strong> Divine destiny &copy; <?php echo date("Y");?>
            </div>
        </div>

    </div>
</div>

<!-- Mainly scripts -->
<script src="js1/jquery-3.1.1.min.js"></script>
<script src="js1/bootstrap.min.js"></script>
<script src="js1/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js1/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->

<script src="js1/plugins/pace/pace.min.js"></script>



<script src="js1/plugins/dropzone/dropzone.min.js"></script>
  <script src="js1/plugins/chartJs/Chart.min.js"></script>
  
    <script src="js1/plugins/demo/chartjs-demo.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="dropi/dropify.min.js"></script>
<script src="js1/app2.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>-->


 

</body>

</html>
