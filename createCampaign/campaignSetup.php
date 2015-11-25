<?php 
    $pagename="Campaigns";
    $pagetitle="Campaigns";
    include('../includes/innerHeader.php'); 
?>
                     
                     
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

                    </div>   

                </div>
            </form>
            </div>    
        </div>
        
    </div>

    <div class="stepFooter clearfix">
        
        <ul class="stepList">
            <li><a href="campaignSetup.php" class="stepLink active">Setup </a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="campaignDomains.php" class="stepLink">Domains </a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="campaignRecepients.php" class="stepLink">Lists</a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="campaignCreatives.php" class="stepLink">Template</a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="campaignEditMailer.php" class="stepLink">Design</a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="campaignConfirm.php" class="stepLink">Confirm</a></li>
        </ul>

        <ul class="stepNext">
            <li><a href="campaignDomains.php" class="stepLink">Next</a></li>
            <li><i class="fa fa-chevron-right"></i></li>
        </ul>
    </div> 
</div>

<?php include('../includes/innerFooter.php'); ?>