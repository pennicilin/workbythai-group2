
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"></h3>
			</div>
			<button class="btn btn-success" style="margin-left:20px;" onClick="window.location.href ='<?php echo base_url();?>admin/contact/create';return false;"><i class="glyphicon glyphicon-plus"></i> Add Contact</button>
			<div class="box-body">
				<table class="table table-striped table-bordered table-autosort" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Company_name</th>
							
							<th>First_tel</th>
							
							<th>Second_tel</th>
							
							<th>Company_tel</th>
							
							<th>Fax</th>
							
							<th>Address</th>
							
							<th>Line</th>
							
							<th>Facebook</th>
							
							<th>Img_map</th>
							
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
						
							<td><?PHP echo $row->company_name;?></td>
							
							<td><?PHP echo $row->first_tel;?></td>
							
							<td><?PHP echo $row->second_tel;?></td>
							
							<td><?PHP echo $row->company_tel;?></td>
							
							<td><?PHP echo $row->fax;?></td>
							
							<td><?PHP echo $row->address;?></td>
							
							<td><?PHP echo $row->line;?></td>
							
							<td><?PHP echo $row->facebook;?></td>
							
							<td><?PHP echo "<img style='width:150px;height:150px;' src='".base_url('assets/uploads/contact/'.$row->img_map)."'>";?></td>

							<td align="center">
								<button style="margin-top:15%" type="button" class="btn btn-info btn-xs" onClick="window.location.href ='<?php echo base_url();?>admin/contact/create/<?PHP echo $row->id;?>';return false;">Edit <span class="glyphicon glyphicon-edit"></span></button>
								<button style="margin-top:15%" type="button" id="delete" class="btn btn-danger btn-xs" onClick="window.location.href='<?php echo base_url();?>admin/contact/deletes/<?PHP echo $row->id;?>'" >Remove <span class="glyphicon glyphicon-minus"></span></button>

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