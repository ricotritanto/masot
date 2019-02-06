<div class="content-wrapper">
  <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Menu Clients</h3>
              </div>
              <div class="col-md-6">
                  <a href="<?php echo base_url();?>backend/add_clients" class="btn btn-primary btn-sm float-right">Add Data</a>
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
                    <th>Name</th>
                    <th>products</th>
                    <th>Picture</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $no=1;
                      foreach($client->result_array() as $row)
                      {?>
                      <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $row['client_name'] ?></td>
                          <td><?php echo $row['product_name'] ?></td>
                          <td><!-- <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> --><a href="<?php echo base_url('images/clients/'.$row['picture'])?>" alt="" data-lightbox/>view image </a></td>
                          <td><?php echo substr($row['description'],0,25) ?></td>
                          <td>
                              <a href="<?php echo base_url('backend/clients_update/' . $row['client_id'])?>">
                               <button class="btn btn-warning btn-sm">Update</button>
                              <a href="<?php echo base_url('backend/clients_delete/' . $row['client_id'])?>" onClick="return confirm('Are your sure delete category <?php echo  $row['client_name'];?>?')">
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

<!-- pop up preview image -->
<script type="text/javascript">
 $(document).ready(function() {
  $('.image-link').magnificPopup({type:'image'});
});
 </script>
<!-- <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="" alt="" />
            </div>
        </div>
    </div>
</div> -->