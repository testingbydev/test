 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View Email Template
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo  ADMIN_SITE_URL ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo  ADMIN_SITE_URL ?>email-templates">Email Templates</a></li>
        <li class="active">View</li>
      </ol>
    </section>

    <!-- Main content -->
      <section class="content">

      <!-- Default box -->
      <div class="box">
      
        <div class="box-header with-border">
          <h3 class="box-title">Email Templates</h3>
        </div>
        <div class="box-body">
                <table cellpadding="0" cellspacing="0" class="table table-bordered table-hover table-striped results">
            <tbody>
             
                <tr>
                  <td><strong>Name</strong> </td>
                  <td><?= $emailtemplates->name ?></td>
                </tr>
                 <tr>
                  <td><strong>Subject</strong> </td>
                  <td><?= $emailtemplates->subject ?></td>
                 
                </tr>
                 <tr>
                  <td colspan="2"><strong>Template</strong> </td>
                </tr>
                <tr>
                  <td colspan="2"><?= $emailtemplates->description ?></td>
                 
                </tr>
             
            </tbody>
          </table>
        </div>

      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->