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
                    <a class="navbar-brand" href="lists.php">Lists</a>
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
                                Manage Lists <div class="pull-right"><a href="" id="createOffer">Create a list</a></div>
                            </h4>
                        </div>
                    </div>                  
                </div>

                <div class="row">
                          <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title"></h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>Name</th>
                                        <th>Subscribers</th>
                                        <th>Unsubscribers</th>
                                        <th>Delivered</th>
                                        <th>Opens</th>
                                        <th>Clicks</th>
                                        <th>Bounces</th>
                                        <th>Complaints</th>
                                        <th>Actions</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>List 1</td>
                                            <td>0</td>
                                            <td>0 (0%)</td>
                                            <td>0 (0%)</td>
                                            <td>0 (0%)</td>
                                            <td>0 (0%)</td>
                                            <td>0 (0%)</td>
                                            <td>0 (0%)</td>
                                            <td>
                                                <select>
                                                        <option>Actions</option>
                                                        <option>Edit List</option>
                                                        <option>Add a subscriber</option>
                                                        <option>Delete List</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>List 2</td>
                                            <td>10</td>
                                            <td>0 (0%)</td>
                                            <td>0 (0%)</td>
                                            <td>0 (0%)</td>
                                            <td>0 (0%)</td>
                                            <td>0 (0%)</td>
                                            <td>0 (0%)</td>
                                            <td>
                                                <select>
                                                        <option>Actions</option>
                                                        <option>Edit List</option>
                                                        <option>Add a subscriber</option>
                                                        <option>Delete List</option>
                                                </select>
                                            </td>
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

    <script type="text/javascript">
        $(document).ready(function(){
            
            demo.initChartist();
            
            // $.notify({
         //     icon: 'pe-7s-gift',
         //     message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."
                
         //    },{
         //        type: 'info',
         //        timer: 4000
         //    });
            
        });
    </script>
    
</html>