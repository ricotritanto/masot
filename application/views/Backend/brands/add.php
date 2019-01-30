<div class="content-wrapper">
	<section class="content">
	      <div class="row">
	        <!-- left column -->
	        <div class="col-md-6">
	                 <!-- Horizontal Form -->
	          <div class="box box-info">
	            <div class="box-header with-border">
	              <h3 class="box-title">Form Brands</h3>
	            </div>
	            <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
	            <form class="form-horizontal" action="<?php echo base_url();?>backend/save_brands" method="post">
	                <!-- @csrf -->
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="" class="col-sm-2 control-label">Brands</label>

	                  <div class="col-sm-10">
	                    <input type="text" class="form-control" name="name" required placeholder="Enter category...">
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