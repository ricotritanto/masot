<div class="content-wrapper">
	<section class="content">
	      <div class="row">
	        <!-- left column -->
	        <div class="col-md-6">
	                 <!-- Horizontal Form -->
	          <div class="box box-info">
	            <div class="box-header with-border">
	              <h3 class="box-title">Form Clients</h3>
	            </div>
	            <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
	            <form class="form-horizontal" action="<?php echo base_url();?>backend/save_clients" method="post" enctype="multipart/form-data">
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="" class="col-sm-2 control-label">Products</label>
	                  <div class="col-sm-10">
	                    <select class="form-control" name="category">
		                    <option>-- Products--</option>
		                    <?php
								foreach ($products as $tampil) { ?>
									<option value="<?php echo $tampil->category_id;?>"><?php echo $tampil->product_name;?></option>
								<?php
								}
								?>
			            </select>
	                  </div>
	                </div>
	              </div>		             
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="" class="col-sm-2 control-label">Picture</label>
	                  <div class="col-sm-10">
	                    <input type="file" id="exampleInputFile" name="userfile">
							<span>File hanya dalam format gif,jpg,png,jpeg dengan resolusi 150 x 150 PX dan ukuran maksimal file sebesar 1MB</span>
	                  </div>	         
	                </div>
	              </div>
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="" class="col-sm-2 control-label">Description</label>
	                  <div class="col-sm-10">
	                    	<textarea class="textarea" placeholder="Place some text here" name="desc" 
                          	style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
	                  </div>
	                </div>
	               </div>

	              <!-- /.box-body -->
	              <div class="box-footer">
	                <button type="submit" class="btn btn-info pull-right">Save</button>
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