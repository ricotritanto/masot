<div class="content-wrapper">
	<section class="content">
	      <div class="row">
	        <!-- left column -->
	        <div class="col-md-6">
	                 <!-- Horizontal Form -->
	          <div class="box box-info">
	            <div class="box-header with-border">
	              <h3 class="box-title">Form Categories</h3>
	            </div>
	            <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
	            <!-- /.box-header -->
	            <!-- form start -->
	            <!--  @if (session('error'))
	                <div class="alert alert-danger">
	                    {{ session('error') }}
	                </div>
	            @endif -->
	            <form class="form-horizontal" action="<?php echo base_url();?>backend/save_categories" method="post">
	                <!-- @csrf -->
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="" class="col-sm-2 control-label">Categories</label>

	                  <div class="col-sm-10">
	                    <input type="text" class="form-control" name="name" value="<?php echo $categories->category_name;?>">
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