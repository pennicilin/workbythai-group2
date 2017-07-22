
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><center> <b>Category of product Form</b>  </center></h3>
			</div>
			<div class="panel-body">
				<?PHP
					$attributes = array('class' => 'form-horizontal',"role"=>"form");
					echo form_open_multipart("",$attributes); 
				?>
					<div class="form-group">
					  <label class="col-sm-2 control-label">Category name</label>
					  <div class="col-sm-10">
						<input required type="text" name="cate_name" class="form-control" placeholder="Cate_name" value="<?PHP if(!empty($category[0]->cate_name)) echo $category[0]->cate_name;?>">
					  </div>
					</div>

				<?php if(empty($category[0]->cate_id)){ ?>
					<div class="form-group">
					  <label class="col-sm-2 control-label">Sub-Category <font color="red"><b>*</b></font></label>
					  <div class="col-sm-10">
						<select name="cate_sub" class="form-control">
						<option value="0">Main Category</option>
							<?PHP foreach($all_cate as $row){
								?>
			
								<option value="<?PHP echo $row['cate_id']; ?>" <?PHP  if(!empty($category[0]->cate_id)) if($row['cate_id']==$category[0]->cate_id) echo "selected"; ?>><?PHP for($a=0;$a<$row['level']*7;$a++) echo "&nbsp;"; echo $row['cate_name'];?></option>
							<?PHP } ?>
						</select>
					  </div>
					</div>
					<?php } ?>

				<?php if(!empty($category[0]->cate_id)){ ?>
					<div class="form-group">
					  <label class="col-sm-2 control-label"> Sub-Category <font color="red"><b>*</b></font></label>
					  <div class="col-sm-10">
						<?php 
							$test = $category[0]->cate_sub; ?>
						
						<?php if($test == 0){ ?>
						<select disabled name="cate_sub" class="form-control">
							<?PHP foreach($all_cat as $row){
								?>
			
								<option value="<?PHP echo $row['cate_id']; ?>" <?PHP  if(!empty($category[0]->cate_id)) if($row['cate_id']==$category[0]->cate_id) echo "selected"; ?>><?PHP for($a=0;$a<$row['level']*7;$a++) echo "&nbsp;"; echo $row['cate_name'];?></option>
							<?PHP } ?>
						</select>
						<?PHP }else{ ?>
						
						<select name="cate_sub" class="form-control">
							<?PHP foreach($all_cate as $row){
								?>
			
								<option value="<?PHP echo $row['cate_id']; ?>" <?PHP  if(!empty($category[0]->cate_id)) if($row['cate_id']==$category[0]->cate_sub) echo "selected"; ?>><?PHP for($a=0;$a<$row['level']*7;$a++) echo "&nbsp;"; echo $row['cate_name'];?></option>
							<?PHP } ?>
						</select>
						<?PHP } ?>
						
						
					  </div>
					</div>
					<?php } ?>
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">Submit</button>
						<input type="hidden" name="cate_id" value="<?PHP if(!empty($category[0]->cate_id)) echo $category[0]->cate_id;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			