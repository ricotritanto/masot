<div class="content-wrapper">
  <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Menu Products</h3>
              </div>
              <div class="col-md-6">
                  <a href="<?php echo base_url();?>backend/add_products" class="btn btn-primary btn-sm float-right">Add Data</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                    <?php if($this->session->flashdata('msg')): ?>
                        <div class="col-md-3">
                          <div class="box box-success">
                              <div class="box-header with-border">
                                  <?php echo $this->session->flashdata('msg'); ?>
                                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                              </div>
                          </div>
                        </div>
                    <?php endif; ?>      
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Brands</th>
                    <th>Picture</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $no=1;
                      foreach($products->result_array() as $row)
                      {?>
                      <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $row['product_name'] ?></td>
                          <td><?php echo $row['category_name'] ?></td>
                          <td><?php echo $row['brand_name'] ?></td>
                          <td><img src="<?php echo base_url('images/products/thumb/'.$row['picture'])?>"></td>
                          <td><?php echo substr($row['description'],0,25) ?></td>
                          <td>
                              <a href="<?php echo base_url('backend/products_update/' . $row['product_id'])?>">
                               <button class="btn btn-warning btn-sm">Update</button>
                              <a href="<?php echo base_url('backend/products_delete/' . $row['product_id'])?>" onClick="return confirm('Are your sure delete category <?php echo  $row['product_name'];?>?')">
                              <button class="btn btn-danger btn-sm">Delete</button>
                          </td>
                      </tr>
                       <?php } ?>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
      </div>
  </section>
</div>




