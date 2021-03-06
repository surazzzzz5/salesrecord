<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h4>आसामी </h4>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Creditors</a></li>
        <li class="active">Edit Creditor</li>
      </ol>
    </section>

      <section class="content">
          <div class="row">
              <div class="col-xs-12">
                  <div class="box">
                      <div class="box-header">
                          <h3 class="box-title">Edit Creditors</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                     

                          <?php echo form_open('creditors/creditors/updatecreditor'); ?>
                          <input type="hidden" name="creditor_id" value="<?php echo($creditor['cid']);?>">
                          <table class="table table-bordered table-hover">
                              <tr>
                                  <td>Creditor Name</td>
                                  <td><input type="text" name="creditor_name" required="required"class="form-control" value="<?php echo($creditor['creditor_name']) ?>"></td>
                              </tr>
                              <tr>
                                  <td> Creditor Address</td>
                                  <td><input type="text" name="creditor_address" required="required"class="form-control" value="<?php echo($creditor['creditor_address']) ?>" ></td>
                              </tr>
                              <tr>
                                  <td>Creditor Contact</td>
                                  <td><input type="tel" name="creditor_contact" required="required" class="form-control"value="<?php echo($creditor['creditor_contact']) ?>" ></td>
                              </tr>
                              <tr>
                                  <td colspan = "2"><input class ="btn btn-primary" type="submit" name="submit" value="Update Creditor"></td>
                                  <td></td>
                              </tr>
                          </table>

                          </form>

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