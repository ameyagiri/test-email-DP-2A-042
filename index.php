<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Email Zilla</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    
    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="assets/css/main.css" rel="stylesheet" />

    <link href="assets/owl/owl.carousel.css" rel="stylesheet" />
    <link href="assets/owl/owl.theme.css" rel="stylesheet" />
    
</head>
<body> 

<div class="wrapper">
    <div class="menu-wrap">  
    	<div class="menu">
            <div class="logo">
                <a href="index.php" class="simple-text">
                    Emailzilla
                </a>
            </div>
                       
            <ul class="nav">
                <li class="active">
                    <a href="index.php">
                        <i class="pe-7s-graph"></i> 
                        <p>Dashboard</p>
                    </a>            
                </li>
                <li>
                    <a href="campaigns.php">
                        <i class="pe-7s-user"></i> 
                        <p>Campaigns</p>
                    </a>
                </li> 
                <li>
                    <a href="lists.php">
                        <i class="pe-7s-note2"></i> 
                        <p>Lists</p>
                    </a>        
                </li>
                <li>
                    <a href="creatives.php">
                        <i class="pe-7s-news-paper"></i> 
                        <p>Creatives</p>
                    </a>        
                </li>
                <li>
                    <a href="reports.php">
                        <i class="pe-7s-science"></i> 
                        <p>Reports</p>
                    </a>        
                </li>
            </ul> 
    	</div>
        <button class="close-button" id="close-button">Close Menu</button>
    </div>
    <button class="menu-button" id="open-button">Open Menu</button>
    <div class="content-wrap">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">    
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">       
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    demouser@email.com
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Account Settings</a></li>
                                <li><a href="#">Edit my Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Log out</a></li>
                              </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
                     
                     
        <div class="content">
            <div class="container-fluid">    
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="content">
                                <div class="statsWrap clearfix">
                                    <h4 class="title campTitle">Overall Campaign Statistics</h4>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="content">
                                                <h4 class="title subHeading">Total Revenue</h4>
                                                <p class="statistics" id="totalRevStats">$899</p>
                                                <span class="audited">audited</span>
                                                <span class="unaudited">unaudited</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="content">
                                                <h4 class="title subHeading">Average CTR</h4>
                                                <p class="statistics" id="avgCTRStats">50%</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="content">
                                                <h4 class="title subHeading">Average RPC</h4>
                                                <p class="statistics" id="avgRPCStats">$26</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="content">
                                                <h4 class="title subHeading">Average CPM</h4>
                                                <p class="statistics" id="avgCPMStats">$6.25</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="content">
                                                <h4 class="title subHeading">Average RPM</h4>
                                                <p class="statistics" id="avgRPMStats">$30</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="content">
                                                <h4 class="title subHeading">Total Opens</h4>
                                                <p class="statistics" id="totalOpensStats">778</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="content">
                                                <h4 class="title subHeading">Scheduled Campaigns</h4>
                                                <p class="statistics" id="scheduledCampaignStats">26</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h4 class="title">Your Top Performing Campaigns</h4>
                                <div class="topPerformingCampaignWrap">
                                    <div class="card clearfix">
                                        <div class='accordion'>
                                            <div class='accordion-section'>
                                                <a class='accordion-section-title' href='#accordion-1'>Campaign 1</a>
                                                <div id='accordion-1' class='accordion-section-content clearfix'>
                                                    <p>Accordion 1</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card clearfix">
                                        <div class='accordion'>
                                            <div class='accordion-section'>
                                                <a class='accordion-section-title' href='#accordion-2'>Campaign 2</a>
                                                <div id='accordion-2' class='accordion-section-content clearfix'>
                                                    <p>Accordion 2</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card clearfix">
                                        <div class='accordion'>
                                            <div class='accordion-section'>
                                                <a class='accordion-section-title' href='#accordion-3'>Campaign 3</a>
                                                <div id='accordion-3' class='accordion-section-content clearfix'>
                                                    <p>3rd Campaign Details</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis metus efficitur mauris porta, quis tincidunt turpis rhoncus. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card">
                            <div class="content">                                
                                <div id="chartPreferences" style="width:100%; height:400px;" class="ct-chart ct-perfect-fourth"></div>
                            </div>
                        </div>
                    </div>             
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Your Top Creatives</h4>
                            </div>
                            <div class="content">                                
                                <div id="owl-example" class="owl-carousel">
                                    <div class="owlSlide">
                                        <h5>Email-rentToOwn-v1-sept2015</h5>
                                        <img src="assets/img/creative1.jpg" /> 
                                    </div>
                                    <div class="owlSlide">
                                        <h5>Email-newCar-v2-sept2015</h5>
                                        <img src="assets/img/creative2.jpg" />
                                    </div>
                                    <div class="owlSlide">
                                        <h5>Email-laserHairRemoval-v2-sept2015</h5>
                                        <img src="assets/img/creative3.jpg" />
                                    </div>
                                    <div class="owlSlide">
                                        <h5>Email-RentalApartments-v2-sept2015</h5>
                                        <img src="assets/img/creative4.jpg" />
                                    </div>
                                    <div class="owlSlide">
                                        <h5>Email-houseCleaning-v2-aug2015</h5>
                                        <img src="assets/img/creative5.jpg" />
                                    </div>
                                    <div class="owlSlide">
                                        <h5>Email-checkingAccount-v1-sept2015</h5>
                                        <img src="assets/img/creative6.jpg" />
                                    </div>
                                    <div class="owlSlide">
                                        <h5>Email-VOIP-v2-sept2015</h5>
                                        <img src="assets/img/creative7.jpg" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Your Top Performing Lists</h4>
                            </div>
                            <div class="content">
                                <div class="card clearfix">
                                    <div class='accordion'>
                                        <div class='accordion-section'>
                                            <a class='accordion-section-title' href='#accordion-4'>List 1</a>
                                            <div id='accordion-4' class='accordion-section-content clearfix'>
                                                <p>Accordion 4</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card clearfix">
                                    <div class='accordion'>
                                        <div class='accordion-section'>
                                            <a class='accordion-section-title' href='#accordion-5'>List 2</a>
                                            <div id='accordion-5' class='accordion-section-content clearfix'>
                                                <p>Accordion 5</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card clearfix">
                                    <div class='accordion'>
                                        <div class='accordion-section'>
                                            <a class='accordion-section-title' href='#accordion-6'>List 3</a>
                                            <div id='accordion-6' class='accordion-section-content clearfix'>
                                                <p>3rd Campaign Details</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis metus efficitur mauris porta, quis tincidunt turpis rhoncus. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="clearfix">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="content">
                                                <h4 class="title subHeading">Total Subscribers</h4>
                                                <p class="statistics" id="totalSubs">4500</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Your Domains</h4>
                            </div>
                            <div class="content table-responsive">
                                <table class="table table-bordered listTable">
                                    <thead>
                                        <th>Recent</th>
                                        <th>blacklisted</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>www.recent1.com</td>
                                            <td>www.blacklisted1.com</td>
                                        </tr>
                                        <tr>
                                            <td>www.recent2.com</td>
                                            <td>www.blacklisted2.com</td>
                                        </tr>
                                        <tr>
                                            <td>www.recent3.com</td>
                                            <td>www.blacklisted3.com</td>
                                        </tr>
                                        <tr>
                                            <td>www.recent4.com</td>
                                            <td>www.blacklisted4.com</td>
                                        </tr>
                                        <tr>
                                            <td>www.recent5.com</td>
                                            <td>www.blacklisted5.com</td>
                                        </tr>
                                        <tr>
                                            <td>www.recent6.com</td>
                                            <td>www.blacklisted6.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        
    </div>   
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <script src="assets/js/menu.js"></script>
    <script src="assets/js/classie.js"></script>
	<script src="assets/js/highcharts.js" type="text/javascript"></script>
    <script src="assets/js/charts.js" type="text/javascript"></script>
    <!--accordion script-->
    <script src="assets/js/accordion.js"></script>
    <script src="assets/owl/owl.carousel.js"></script>
    <script src="assets/js/slider.js"></script>
</html>