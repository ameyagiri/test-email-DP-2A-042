<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Email Zilla</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    
    <!--  Light Bootstrap Table core CSS    -->
    <link href="../assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="../assets/css/main.css" rel="stylesheet" />
    
    <link href="../assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    
</head>
<body> 

<div class="wrapper">
    <div class="menu-wrap">  
        <div class="menu">
            <div class="logo">
                <a href="../index.php" class="simple-text">
                    Emailzilla
                </a>
            </div>
                       
            <ul class="nav">
                <li class="active">
                    <a href="../index.php">
                        <i class="pe-7s-graph"></i> 
                        <p>Dashboard</p>
                    </a>            
                </li>                
                <li>
                    <a href="../campaigns.php">
                        <i class="pe-7s-note2"></i> 
                        <p>Campaigns</p>
                    </a>        
                </li>
                <li>
                    <a href="../lists.php">
                        <i class="pe-7s-user"></i> 
                        <p>Lists</p>
                    </a>
                </li> 
                <li>
                    <a href="../creatives.php">
                        <i class="pe-7s-news-paper"></i> 
                        <p>Creatives</p>
                    </a>        
                </li>
                <li>
                    <a href="../reports.php">
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
                    <a class="navbar-brand" href="#">Campaign</a>
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
            <form class="createCampaignForm" method="post">   
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Campaign Details</h4>
                            </div>
                            <div class="content"> 
                                
                                    <div class="posRel">
                                        <label>Name your campaign</label>
                                        <input type="text" name="campaignName" class="form-control"/>
                                    </div>

                                    <div class="posRel">
                                        <label>From name</label>
                                        <input type="text" name="fromName" class="form-control"/>
                                    </div>

                                    <div class="posRel">
                                        <label>From email address</label>
                                        <input type="text" name="fromEmailAddress" class="form-control"/>
                                    </div>

                                    <div class="posRel" id="sandbox-container">
                                        <label>Campaign Start Date</label>
                                        <div class='input-group date' id='datetimepicker1' name='campaignStartDate'>
                                            <input type='text' class="form-control" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="posRel">
                                        <label>Campaign End Date</label>
                                        <div class='input-group date' id='datetimepicker2' name='campaignEndDate'>
                                            <input type='text' class="form-control" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Email Subject</h4>
                            </div>
                            <div class="content">
                                <div class="posRel">
                                    <label>Email subject</label>
                                    <input type="text" name="emailSubject" class="form-control"/>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="header">
                                <h4 class="title">Domain</h4>
                            </div>
                            <div class="content"> 
                                <div class="posRel">
                                    <label>Domain Name</label>
                                    <input type="text" name="campaignDomain" class="form-control"/>
                                </div>
                            </div>
                        </div>
                    </div>   

                </div>
            </form>
            </div>    
        </div>
        
    </div>

    <div class="stepFooter clearfix">
        
        <ul>
            <li><a href="campaignSetup.php" class="stepLink active">Setup </a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="campaignRecepients.php" class="stepLink">List</a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="creatives.php" class="stepLink">Template</a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="#" class="stepLink">Design</a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="campaignConfirm.php" class="stepLink">Confirm</a></li>
        </ul>

        <ul class="stepNext">
            <li><a href="campaignRecepients.php" class="stepLink">Next</a></li>
            <li><i class="fa fa-chevron-right"></i></li>
        </ul>
    </div> 
</div>


</body>

    <!--   Core JS Files   -->
    <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/moment-with-locales.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/classie.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#datetimepicker1').datetimepicker();
        $('#datetimepicker2').datetimepicker();
    });
       
    </script>
</html>