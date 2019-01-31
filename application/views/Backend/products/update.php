<div class="content-wrapper">
	<section class="content">
	      <div class="row">
	        <!-- left column -->
	        <div class="col-md-6">
	                 <!-- Horizontal Form -->
	          <div class="box box-info">
	            <div class="box-header with-border">
	              <h3 class="box-title">Form Products</h3>
	            </div>
	            <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
	            <form class="form-horizontal" action="<?php echo base_url();?>backend/products_updated" method="post" enctype="multipart/form-data">
	            <input type="hidden" name='id' value="<?php echo $product_id;?>"> 
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="" class="col-sm-2 control-label">Categories</label>
	                  <div class="col-sm-10">
	                    <select class="form-control" name="category">
		                    <option>-- Categories--</option>
		                    <?php
								foreach ($categories as $tampil) { 
									if($category_id==$tampil->category_id)
									{?>
										<option value="<?php echo $tampil->category_id;?>" selected="selected"><?php echo $tampil->category_name;?></option>
										<?php
									}
									else
									{?>
										<option value="<?php echo $tampil->category_id;?>"><?php echo $tampil->category_name;?></option>
									<?php
									}
								}
							?>
			            </select>
	                  </div>
	                </div>
	              </div>	
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="" class="col-sm-2 control-label">Brands</label>
	                  <div class="col-sm-10">
	                    <select class="form-control" name="brand">
		                    <option>-- Brands --</option>
		                    <?php
								foreach ($brands as $tampil) {
								if ($brand_id==$tampil->brand_id) 
								{?>
								 	<option value="<?php echo $tampil->brand_id;?>" selected="selected"><?php echo $tampil->brand_name;?></option>
									<?php
								}
								else
								{?>
									<option value="<?php echo $tampil->brand_id;?>"><?php echo $tampil->brand_name;?></option>
								 <?php
								} 									
								
								}
							?>
			            </select>
	                  </div>
	                </div>
	              </div>
	               <div class="box-body">
	                <div class="form-group">
	                  <label for="" class="col-sm-2 control-label">Products</label>
	                  <div class="col-sm-10">
	                    <input type="text" class="form-control" name="product" required value="<?php echo $product_name;?>">
	                  </div>
	                </div>
	              </div>
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="" class="col-sm-2 control-label">Picture</label>
	                  <div class="col-sm-10">
	                    <input type="file" id="exampleInputFile" name="userfile">
							<span>File hanya dalam format gif,jpg,png,jpeg dengan resolusi 360 x 320PX dan ukuran maksimal file sebesar 3 MB</span>
	                  </div>	         
	                </div>
	              </div>
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="" class="col-sm-2 control-label">Description</label>
	                  <div class="col-sm-10">
	                    	<textarea class="textarea" placeholder="Place some text here" name="desc" 
                          	style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $description;?></textarea>
	                  </div>
	                </div>
	               </div>

	              <!-- /.box-body -->
	              <div class="box-footer">
	                <button type="submit" class="btn btn-info pull-right">Update</button>
	              </div>
	              <!-- /.box-footer -->
	            </form>
	          </div>
	      </div>
	  </div>
	</section>
</div>

<script src="<?php echo base_url();?>assets/backend/bower_components/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>