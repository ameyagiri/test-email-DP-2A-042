<?php 
    $pagename="Domains";
    $pagetitle="Domains";
    include('includes/header.php'); 
?>

<div class="content">
	<div class="container-fluid domainsContainer">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="header clearfix">
						<h4 class="title">Domain List </h4>
					</div>
					<div class="content">
						<div class="actionButtons">
							<ul class="editButtonsChecked">
								<li><a href="#" class="btn btn-primary">Edit Domains</a></li>
								<li><a href="#" class="btn btn-info">Map Domains</a></li>
								<li><a href="#" class="btn btn-success">Generate Subdomains</a></li>
								<li><a href="#" class="btn btn-danger">Delete Domains</a></li>
							</ul>
							<ul class="pull-right">
								<li class="pull-right"><a href="#" class="btn btn-success" id="addDomainsBtn">Add Domains</a></li>
							</ul>
							
						</div>
						<div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th class="checkboxHead">
                                    	<input type="checkbox" name="checkalldomains" id="checkalldomains"/>
                                		<label for="checkalldomains"><span></span> </label>
                                	</th>
                                    <th>Domain</th>
                                    <th>Since</th>
                                    <th>Campaigns</th>
                                    <th class="actionbuttonHead">actions</th>
                                </thead>
                                <tbody class="domainList">
                                    <tr>
                                    	<td>
                                    		<input type="checkbox" name="checkdomain1" id="checkdomain1"/>
                                    		<label for="checkdomain1"><span></span> </label>
                                    	</td>
                                        <td>www.recent1.com</td>
                                        <td>2D ago</td>
                                        <td>campaign 1, campaign 2, campaign 3</td>
                                        <td>
                                        	<a class="btn btn-success" href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></i></a>
                                        	<a class="btn btn-danger" href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>
                                    		<input type="checkbox" name="checkdomain2" id="checkdomain2"/>
                                    		<label for="checkdomain2"><span></span> </label>
                                    	</td>
                                        <td>www.recent2.com</td>
                                        <td>3D ago</td>
                                        <td>campaign 4</td>
                                        <td>
                                        	<a class="btn btn-success" href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></i></a>
                                        	<a class="btn btn-danger" href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>
                                    		<input type="checkbox" name="checkdomain3" id="checkdomain3"/>
                                    		<label for="checkdomain3"><span></span> </label>
                                    	</td>
                                        <td>www.recent3.com</td>
                                        <td>1D ago</td>
                                        <td>campaign 5, campaign 6</td>
                                        <td>
                                        	<a class="btn btn-success" href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></i></a>
                                        	<a class="btn btn-danger" href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>
                                    		<input type="checkbox" name="checkdomain4" id="checkdomain4"/>
                                    		<label for="checkdomain4"><span></span> </label>
                                    	</td>
                                        <td>www.recent4.com</td>
                                        <td>22D ago</td>
                                        <td>campaign 7, campaign 8, campaing 9, campaign 10</td>
                                        <td>
                                        	<a class="btn btn-success" href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></i></a>
                                        	<a class="btn btn-danger" href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
					</div>
				</div>
			</div>

			<div class="col-md-4 viewSubDomainList hidethisdiv">
				<div class="card">
					<div class="header clearfix">
						<h4 class="title">Selected Domains</h4>
					</div>
					<div class="content">
						<div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th class="checkboxHead">
                                    	<input type="checkbox" name="checkallsubdomains" id="checkallsubdomains"/>
                                		<label for="checkallsubdomains"><span></span> </label>
                                	</th>
                                    <th>www.recent1.com</th>
                                </thead>
                                <tbody class="subDomainList">
                                    <tr>
                                    	<td>
                                    		<input type="checkbox" name="checksubdomain1" id="checksubdomain1"/>
                                    		<label for="checksubdomain1"><span></span> </label>
                                    	</td>
                                        <td>sub1.recent1.com</td>
                                    </tr>
                                    <tr>
                                    	<td>
                                    		<input type="checkbox" name="checksubdomain2" id="checksubdomain2"/>
                                    		<label for="checksubdomain2"><span></span> </label>
                                    	</td>
                                        <td>sub2.recent1.com</td>
                                    </tr>
                                    <tr>
                                    	<td>
                                    		<input type="checkbox" name="checksubdomain3" id="checksubdomain3"/>
                                    		<label for="checksubdomain3"><span></span> </label>
                                    	</td>
                                        <td>sub3.recent1.com</td>
                                    </tr>
                                    <tr>
                                    	<td>
                                    		<input type="checkbox" name="checksubdomain4" id="checksubdomain4"/>
                                    		<label for="checksubdomain4"><span></span> </label>
                                    	</td>
                                        <td>sub4.recent1.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
					</div>
				</div>
			</div>
		</div>




		<div class="row">
			<div class="col-md-6 addDomainFormWrapper">
            	<div class="card">
            		<div class="header">
                        <h4 class="title">Add Domains</h4>
                    </div>
                    <div class="content clearfix">
                    	<form class="createDomainForm" method="post">
                    		<div class="posRel">
		                    	<label>Domain name</label>
		                    	<input type="text" class="form-control" name="domainName"/>
	                    	</div>
	                    	<div class="posRel">
	                    		<input type="submit" value="Add Domain" class="btn btn-success"/>
	                    	</div>
                    	</form>
                    </div>
            	</div>
            </div>
		</div>
</div>

<?php include('includes/footer.php'); ?>