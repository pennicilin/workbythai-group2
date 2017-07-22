
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"></h3>
			</div>
			<button class="btn btn-success" style="margin-left:20px;" onClick="window.location.href ='<?php echo base_url();?>admin/news/create';return false;"><i class="glyphicon glyphicon-plus"></i> Add News</button>
			<div class="box-body">
				<table class="table table-striped table-bordered table-autosort" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>News_title</th>
							
							<th>News_detail</th>
							
							<th>News_document</th>
							
							<th>News_image</th>
							
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
						
							<td><?PHP echo $row->news_title;?></td>
							
							<td><?PHP echo $row->news_detail;?></td>
							
							<td><?PHP echo $row->news_document;?></td>
							
							<td><?PHP echo "<img style='width:200px;height:100px;' src = '".base_url ('assets/uploads/news/'.$row->news_image)."'>";?>

							<td align="center">
							<button style="margin-top:10%" type="button" class="btn btn-info btn-xs" onClick="window.location.href ='<?php echo base_url();?>admin/news/create/<?PHP echo $row->news_id;?>';return false;">Edit <span class="glyphicon glyphicon-edit"></span></button>
							<button style="margin-top:10%" type="button" id="delete" class="btn btn-danger btn-xs" onClick="window.location.href='<?php echo base_url();?>admin/news/deletes/<?PHP echo $row->news_id;?>'" >Remove <span class="glyphicon glyphicon-minus"></span></button>

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