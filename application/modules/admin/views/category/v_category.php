
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"></h3>
			</div>
			<div class="box-body">
<!-- 				<table class="table table-striped table-bordered table-autosort" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Cate_name</th>
							
							<th>Cate_sub</th>
							
							<th>Cate_main</th>
							
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
						
							<td><?PHP echo $row->cate_name;?></td>
							
							<td><?PHP echo $row->cate_sub;?></td>
							
							<td><?PHP echo $row->cate_main;?></td>
							
							<td>
								<a href="category/create/<?PHP echo $row->cate_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</a>
								|
								<a href="category/deletes/<?PHP echo $row->cate_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
									<i class="fa fa-times-circle" aria-hidden="true"></i>
								</a>
							</td>
						</tr>
					<?PHP 
						} 
					?>
					</tbody>
				</table> -->
				<table class="table table-striped table-bordered table-autosort" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th style="display:none;"></th>
							<th width="95%">Main and Sub-Category </th>
							
							<th align="center"  width="5%">Edit/Delete</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						$i=0;
						foreach($data_cat2 as $row){
					?>
						<tr>
							<td  style="display:none;"><?PHP echo $i++;?></td>
							<td style="width:90%"><?PHP for($a=0;$a<$row['level']*7;$a++) echo "&nbsp;&nbsp;"; echo $row['cate_name'];?></td>
							
							<td align="center">
							<button type="button" class="btn btn-info btn-xs" onClick="window.location.href ='<?php echo base_url();?>admin/category/create/<?PHP echo $row['cate_id'];?>';return false;">Edit <span class="glyphicon glyphicon-edit"></span></button>
							<button type="button" id="delete" class="btn btn-danger btn-xs" onClick="window.location.href='<?php echo base_url();?>admin/category/deletes/<?PHP echo $row['cate_id'];?>'" >Remove <span class="glyphicon glyphicon-minus"></span></button>

							<script type="text/javascript">
								$('#delete').click(function() {
									alert ('Are you sure you want to delete this item?');
								});
							</script>
							</td>
						</tr>
					<?PHP 
					$i++;
						} 
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>