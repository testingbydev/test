 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Email Template
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo  ADMIN_SITE_URL ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo  ADMIN_SITE_URL ?>email-templates">Email Templates</a></li>
        <li class="active">Add</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <?= $this->Flash->render() ?>
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Email Templates</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo $this->Form->create($emailtemplates, array(
                    'id'=>'addemailtemplates')); ?>
        
              <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <?php echo $this->Form->input("name" , array("type" => "text","class" => "form-control",'label' => 'Title', "required" => "required"));?>
                </div>
                </div>
                  <div class="col-md-6">
                <div class="form-group">
                  <?php echo $this->Form->input("subject" , array("type" => "text","class" => "form-control",'label' => 'Subject', "required" => "required"));?>
                </div>
                </div>
                  <div class="col-md-12">
                <div class="form-group">
                 <?php echo $this->Form->input("description" , array("type" => "textarea","class" => "form-control ckeditor",'label' => 'Template Design', "required" => "required"));?>
                </div>
                </div>
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
           <?php echo $this->Form->end()?>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->