<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h4>आसामी </h4>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Creditors</a></li>
        <li class="active">Add Creditor</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Creditors List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Creditor_ID</th>
                  <th>Creditor Name</th>
                  <th>Creditor Address</th>
                  <th>Creditor Contact</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php $i =0;?>
                <?php foreach($creditors as $creditor): ?>
                  <?php $i++; ?>
                 <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $creditor['creditor_name']; ?></td>
                    <td><?php echo $creditor['creditor_address']; ?></td>
                    <td> <?php echo $creditor['creditor_contact']; ?></td>
                    
                    <td><a href='creditors/editcreditor/<?php echo $creditor['cid']; ?>'><img src="<?php echo base_url(); ?>assets/dist/img/edit_icon.png" height="20" width="20"></td>
                    <td><a href='creditors/deletecreditor/<?php echo $creditor['cid']; ?>' onclick="return confirm('डिलिट गर्ने हो ?');"><img src="<?php echo base_url(); ?>assets/dist/img/delete_iconr.png" height="20" width="20"></td>

                  </tr>
                <?php endforeach?>
                
              </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->