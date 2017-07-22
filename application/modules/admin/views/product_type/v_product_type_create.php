
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><center> <b>Product Type Form</b>  </center></h3>
			</div>
			<div class="panel-body">
				<?PHP
					$attributes = array('class' => 'form-horizontal',"role"=>"form");
					echo form_open("",$attributes); 
				?>
					<div class="form-group">
					  <label class="col-sm-2 control-label">Main Category</label>
					  <div class="col-sm-10">
						<input required type="text" name="main_type" class="form-control" placeholder="Main_type" value="<?PHP if(!empty($product_type[0]->main_type)) echo $product_type[0]->main_type;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Sub Category</label>
					  <div class="col-sm-10">
						<input required type="text" name="sub_type" class="form-control" placeholder="Sub_type" value="<?PHP if(!empty($product_type[0]->sub_type)) echo $product_type[0]->sub_type;?>">
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-sm-2 control-label">Category</label>
					  <div class="col-sm-10">
						<select name="main_code" class="form-control">
							<option value="0">Main Category</option>
							<?PHP foreach($all_cat as $row){
								?>

								<option value="<?PHP echo $row['type_id']; ?>" <?PHP  if(!empty($product_type[0]->type_id)) if($row['type_id']==$product_type[0]->type_id) echo "selected"; ?>><?PHP for($a=0;$a<$row['level']*7;$a++) echo "&nbsp;"; echo $row['sub_type'];?>

								</option>
							<?PHP } ?>

						</select>
					  </div>
					</div>
					
					<!-- <div class="form-group">
					  <label class="col-sm-2 control-label">Main_code</label>
					  <div class="col-sm-10">
						<input type="text" name="main_code" class="form-control" placeholder="Main_code" value="<?PHP if(!empty($product_type[0]->main_code)) echo $product_type[0]->main_code;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Sub_code</label>
					  <div class="col-sm-10">
						<input type="text" name="sub_code" class="form-control" placeholder="Sub_code" value="<?PHP if(!empty($product_type[0]->sub_code)) echo $product_type[0]->sub_code;?>">
					  </div>
					</div> -->
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">Submit</button>
						<input type="hidden" name="type_id" value="<?PHP if(!empty($product_type[0]->type_id)) echo $product_type[0]->type_id;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			