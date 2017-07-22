
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"></h3>
			</div>
			<div class="box-body">
				<table class="table table-striped table-bordered table-autosort" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Pro_name</th>
							
							<th>Pro_price</th>
							
							<th>Pro_detail</th>
							
							<th>Pro_image</th>
							
							<th>Type_id</th>
							
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
						
							<td><?PHP echo $row->pro_name;?></td>
							
							<td><?PHP echo $row->pro_price;?></td>
							
							<td><?PHP echo $row->pro_detail;?></td>
							
							<td><?PHP echo "<img style='width:150px;height:150px;' src='".base_url('assets/uploads/product/'.$row->pro_image)."'>";?></td>
							
							<td><?PHP echo $row->type_id;?></td>
							<td align="center">
								<button style="margin-top:15%" type="button" class="btn btn-info btn-xs" onClick="window.location.href ='<?php echo base_url();?>admin/product/create/<?PHP echo $row->pro_id;?>';return false;">Edit <span class="glyphicon glyphicon-edit"></span></button>
								<button style="margin-top:15%" type="button" id="delete" class="btn btn-danger btn-xs" onClick="window.location.href='<?php echo base_url();?>admin/product/deletes/<?PHP echo $row->pro_id;?>'" >Remove <span class="glyphicon glyphicon-minus"></span></button>

								<script type="text/javascript">
									$('#delete').click(function() {
										alert ('Are you sure you want to delete this item?');
									});
								</script>
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