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
	            <form class="form-horizontal" action="<?php echo base_url();?>backend/brands_updated" method="post">
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="" class="col-sm-2 control-label">Brands</label>
	                  <input type="hidden" class="form-control" name="id" value="<?php echo $brands->brand_id;?>">
	                  <div class="col-sm-10">
	                    <input type="text" class="form-control" name="name" required value="<?php echo $brands->brand_name;?>">
	                  </div>
	                </div>
	              </div>
	              <div class="box-footer">
	                <button type="submit" class="btn btn-info pull-right">Update</button>
	              </div>
	            </form>
	          </div>
	      </div>
	  </div>
	</section>
</div>