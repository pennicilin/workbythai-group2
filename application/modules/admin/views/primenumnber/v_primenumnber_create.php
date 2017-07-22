
			<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"></h3>
			</div>
			<div class="box-body">
				<?PHP
					$attributes = array('class' => 'form-horizontal',"role"=>"form");
					echo form_open("",$attributes); 
				?>
					<div class="form-group">
					  <label class="col-sm-2 control-label">Number1</label>
					  <div class="col-sm-10">
						<input type="text" name="number1" class="form-control" placeholder="Number1" value="<?PHP if(!empty($primenumnber[0]->number1)) echo $primenumnber[0]->number1;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Number2</label>
					  <div class="col-sm-10">
						<input type="text" name="number2" class="form-control" placeholder="Number2" value="<?PHP if(!empty($primenumnber[0]->number2)) echo $primenumnber[0]->number2;?>">
					  </div>
					</div>
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">Submit</button>
						<input type="hidden" name="id" value="<?PHP if(!empty($primenumnber[0]->id)) echo $primenumnber[0]->id;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			