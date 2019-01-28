<div class="content-wrapper">
  <section class="content">
        <div class="row">
          <div class="col-xs-8">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Menu Categories</h3>
              </div>
              <div class="col-md-6">
                  <a href="<?php echo base_url();?>backend/add_categories" class="btn btn-primary btn-sm float-right">Add Data</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <!--  @if (session('success'))
                   <div class="col-md-3">
                      <div class="box box-success">
                          <div class="box-header with-border">
                               {!! session('success') !!}
                              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                          </div>
                      </div>
                   </div>
                          @endif -->
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>Categories</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $no=1;
                      foreach($categories as $kategori)
                      {?>
                      <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $kategori->category_name ?></td>
                          <td>
                          <form action="<?php echo base_url('backend/categories_update/' . $kategori->category_id)?>" method="POST">
                              <input type="hidden" name="_method" value="DELETE" class="form-control">
                              <a href="<?php base_url('backend/categories_update/' . $kategori->category_id)?>" class="btn btn-warning btn-sm">Update</a>
                              <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                          </td>
                      </tr>
                       <?php } ?>
                      <tr>
                          <td class="text-center" colspan="6">Tidak ada data</td>
                      </tr>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
      </div>
  </section>
</div>




