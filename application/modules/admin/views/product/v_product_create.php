
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><center> <b>Product Form</b>  </center></h3>
			</div>
			<div class="panel-body">
				<?PHP
					$attributes = array('class' => 'form-horizontal',"role"=>"form");
					echo form_open_multipart("",$attributes); 
				?>
				<div class="form-group">
				  <label class="col-sm-2 control-label">Sub-Product</label>
				  <div class="col-sm-10">
					<select name="type_id" class="form-control">
					<option value="0">Main Category</option>
						<?PHP foreach($all_cate as $row){
							?>
							<option value="<?PHP echo $row['cate_id']; ?>" <?PHP  if(!empty($category[0]->cate_id)) if($row['cate_id']==$category[0]->cate_id) echo "selected"; ?>><?PHP for($a=0;$a<$row['level']*7;$a++) echo "&nbsp;"; echo $row['cate_name'];?></option>
						<?PHP } ?>
					</select>
				</div>
				</div>
					<div class="form-group">
					  <label class="col-sm-2 control-label">Product Name</label>
					  <div class="col-sm-10">
						<input type="text" name="pro_name" class="form-control" placeholder="Pro_name" value="<?PHP if(!empty($product[0]->pro_name)) echo $product[0]->pro_name;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Product Price</label>
					  <div class="col-sm-10">
						<input type="text" name="pro_price" class="form-control" placeholder="Pro_price" value="<?PHP if(!empty($product[0]->pro_price)) echo $product[0]->pro_price;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Product Detail</label>
					  <div class="col-sm-10">
						<input type="text" name="pro_detail" class="form-control" placeholder="Pro_detail" value="<?PHP if(!empty($product[0]->pro_detail)) echo $product[0]->pro_detail;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Product Image</label>
					  <div class="col-sm-10">
						<input type="file" name="pro_image" class="form-control" value="">
						<input type="hidden" name="old_pro_image" class="form-control" placeholder="old_pro_image" value="<?PHP if(!empty($product[0]->pro_image)) echo $product[0]->pro_image;?>">
					  <?php 
						if (!empty($product[0]->pro_image)) {
							  echo "<img style='width:150px; height:150px;' src='".base_url('assets/uploads/product/'.$product[0]->pro_image)."'>";
						}
						?>

					  </div>
					</div>
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">Submit</button>
						<input type="hidden" name="pro_id" value="<?PHP if(!empty($product[0]->pro_id)) echo $product[0]->pro_id;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			