
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"></h3>
			</div>
			<button class="btn btn-success" style="margin-left:20px;" onClick="window.location.href ='<?php echo base_url();?>admin/slide/create';return false;"><i class="glyphicon glyphicon-plus"></i> Add Slide</button>
			<div class="box-body">

				<table class="table table-striped table-bordered table-autosort" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Silde_name</th>
							
							<th>Silde_link</th>
							
							<th>Silde_img</th>
							
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
						
							<td><?PHP echo $row->silde_name;?></td>
							
							<td><?PHP echo $row->silde_link;?></td>
							
							<td><?PHP echo "<img style='width:150px;height:150px;' src='".base_url('assets/uploads/slide/'.$row->silde_img)."'>";?></td>

							<td align="center">
								<button style="margin-top:15%" type="button" class="btn btn-info btn-xs" onClick="window.location.href ='<?php echo base_url();?>admin/slide/create/<?PHP echo $row->slide_id;?>';return false;">Edit <span class="glyphicon glyphicon-edit"></span></button>
								<button style="margin-top:15%" type="button" id="delete" class="btn btn-danger btn-xs" onClick="window.location.href='<?php echo base_url();?>admin/slide/deletes/<?PHP echo $row->slide_id;?>'" >Remove <span class="glyphicon glyphicon-minus"></span></button>

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

