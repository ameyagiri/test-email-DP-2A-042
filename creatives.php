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
    <link href="assets/css/animate.css" rel="stylesheet"/>
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
                        <i class="pe-7s-note2"></i> 
                        <p>Campaigns</p>
                    </a>        
                </li>
                <li>
                    <a href="lists.php">
                        <i class="pe-7s-user"></i> 
                        <p>lists</p>
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
                    <a class="navbar-brand" href="creatives.php">Creatives</a>
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
                    <div class="col-md-12">
                        <div class="header">
                            <h4 class="title" style="margin-top:0">
                                Choose Creative Type
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <a href="javascript:;" id="txtCreative">
                                <div class="creativeHeader">
                                    <h4 class="title mainTitle"><i class="pe-7s-note2"></i> Text Creative</h4>
                                </div>
                            </a>
                        </diV>
                    </div>

                    <div class="col-md-2">
                        <div class="card">
                            <a href="javascript:;" id="imgCreative">
                                <div class="creativeHeader">
                                    <h4 class="title mainTitle"><i class="pe-7s-photo"></i>  Image Creative</h4>
                                </div>
                            </a>
                        </diV>
                    </div>
                </div>

                <!--text creatives-->
                <div class="row" id="txtCreativeRow">
                    <div class="col-md-12">
                        <div class="header">
                            <h4 class="title" style="margin-top:0">
                               Text Creatives <div class="pull-right"><input class="search1" placeholder="Search" /></div>
                            </h4>
                        </div>
                    </div>

                    <div id="txtCreativesWrapper">
                        <div class="col-md-2">
                            <div class="card">
                                <a href="#">
                                    <div class="header creativeHeader">
                                        <h4 class="title">Creative 1</h4>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card">
                                <div class="header creativeHeader">
                                    <h4 class="title">Creative 2</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--image creatives-->
                <div class="row imgCreativeRow" id="imgCreativeRow">
                    <div class="col-md-12">
                        <div class="header">
                            <h4 class="title" style="margin-top:0">
                               Image Creatives <div class="pull-right"><input class="search" placeholder="Search" /></div>
                            </h4>
                        </div>
                    </div>

                    <div id="imgCreativesWrapper">
                        <div class="col-md-2">
                            <div class="card">
                                <a href="editMailer.php?title=Email-rentToOwn-v1-sept2015">
                                    <div class="header creativeHeader">
                                        <h4 class="title">Email-rentToOwn-v1-sept2015</h4>
                                    </div>
                                    <div class="content creativeContent">
                                        <img src="assets/img/creative1.jpg" />
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card">
                                <a href="editMailer.php?title=Email-newCar-v2-sept2015">
                                    <div class="header creativeHeader">
                                        <h4 class="title">Email-newCar-v2-sept2015</h4>
                                    </div>
                                    <div class="content creativeContent">
                                        <img src="assets/img/creative2.jpg" />
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card">
                                <a href="editMailer.php?title=Email-laserHairRemoval-v2-sept2015">
                                    <div class="header creativeHeader">
                                        <h4 class="title">Email-laserHairRemoval-v2-sept2015</h4>
                                    </div>
                                    <div class="content creativeContent">
                                        <img src="assets/img/creative3.jpg" />
                                    </div>
                                </a>
                            </div>
                        </div>                  

                        <div class="col-md-2">
                            <div class="card">
                                <a href="editMailer.php?title=Email-RentalApartments-v2-sept2015">
                                    <div class="header creativeHeader">
                                        <h4 class="title">Email-RentalApartments-v2-sept2015</h4>
                                    </div>
                                    <div class="content creativeContent">
                                        <img src="assets/img/creative4.jpg" />
                                    </div>
                                </a>
                            </div>
                        </div> 

                        <div class="col-md-2">
                            <div class="card">
                                <a href="editMailer.php?title=Email-houseCleaning-v2-aug2015">
                                    <div class="header creativeHeader">
                                        <h4 class="title">Email-houseCleaning-v2-aug2015</h4>
                                    </div>
                                    <div class="content creativeContent">
                                        <img src="assets/img/creative5.jpg" />
                                    </div>
                                </a>
                            </div>
                        </div> 

                        <div class="col-md-2">
                            <div class="card">
                                <a href="editMailer.php?title=Email-checkingAccount-v1-sept2015">
                                    <div class="header creativeHeader">
                                        <h4 class="title">Email-checkingAccount-v1-sept2015</h4>
                                    </div>
                                    <div class="content creativeContent">
                                        <img src="assets/img/creative6.jpg" />
                                    </div>
                                </a>
                            </div>
                        </div> 

                        <div class="col-md-2">
                            <div class="card">
                                <a href="editMailer.php?title=Email-VOIP-v2-sept2015">
                                    <div class="header creativeHeader">
                                        <h4 class="title">Email-VOIP-v2-sept2015</h4>
                                    </div>
                                    <div class="content creativeContent">
                                        <img src="assets/img/creative7.jpg" />
                                    </div>
                                </a>
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
    
    <script src="assets/js/accordion.js"></script>

    <!--script for image creatives search-->
    <script src="assets/js/search.js"></script>

    <!--script for text creatives search-->
    <script src="assets/js/search2.js"></script>

    <script src="assets/js/menu.js"></script>
    <script src="assets/js/classie.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            $('#txtCreative').click(function(){
                $('#imgCreativeRow').css({'display':'none'})
                $('#txtCreativeRow').css({'display':'block'});
            });

            $('#imgCreative').click(function(){
                $('#imgCreativeRow').css({'display':'block'});
                $('#txtCreativeRow').css({'display':'none'})
            });

            //ANIMATION FOR EACH CARD
            $('#imgCreativesWrapper .col-md-2').hide()

            $('#imgCreativesWrapper .col-md-2').each(function(i) {
               delay =(i)*300;
               setTimeout(function (div) {
                        div.show().addClass('animated fadeIn');
                    }, delay, $(this));
            });
            //END ANIMATION
        });
    </script>
    
</html>