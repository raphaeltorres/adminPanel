<div id="content" class="span10">
			<!-- start: Content -->
			

			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Company</a>
					</li>
				</ul>
				<hr>
			</div>
            
            
            
			   <div class="row-fluid sortable">
				<div class="box span12">
                
                <a class="btn" href="{$baseUrl}company/addcompany">Add Company</a>
                <hr>
                       
                     <div class="{$msgClass}"><strong>{$msgInfo}</strong></div>  
                            
					<div class="box-header" data-original-title>
						<h2><i class="icon-group"></i><span class="break"></span>Company</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th width="26%">Company Name</th>
								  <th width="27%">E-mail Address</th>
								  <th width="26%">Roles</th>
                                  <th width="11%">Status</th>
                                  <th width="10%">Action</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
							{foreach from=$companyList item=company}
							<tr>
								<td>{$company->company_name}</td>
								<td class="center">{$company->company_email}</td>
								<td class="center">admin</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								
								<td class="center">
										<a class="btn btn-info" href="{$baseUrl}company/editcompany/{$company->company_id}">
										<i class="icon-edit icon-white"></i>  
									</a>
								</td>
							</tr>
							{/foreach}
						  </tbody>
					  </table> 
                          
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
		<hr>
			<!-- end: Content -->
</div><!--/#content.span10-->