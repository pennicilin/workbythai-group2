
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"></h3>
			</div>
			<button class="btn btn-success" style="margin-left:20px;" onClick="window.location.href ='<?php echo base_url();?>admin/product_type/create';return false;"><i class="glyphicon glyphicon-plus"></i> Add Product Type</button>
			<div class="box-body">
				<table class="table table-striped table-bordered table-autosort" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Main_type</th>
							
							<th>Sub_type</th>
							
							<th>Main_code</th>
							
							<th>Sub_code</th>
							
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
						
							<td><?PHP echo $row->main_type;?></td>
							
							<td><?PHP echo $row->sub_type;?></td>
							
							<td><?PHP echo $row->main_code;?></td>
							
							<td><?PHP echo $row->sub_code;?></td>
							
							<td>
								<a href="product_type/create/<?PHP echo $row->type_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</a>
								|
								<a href="product_type/deletes/<?PHP echo $row->type_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
									<i class="fa fa-times-circle" aria-hidden="true"></i>
								</a>
							</td>
						</tr>
					<?PHP 
						} 
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>