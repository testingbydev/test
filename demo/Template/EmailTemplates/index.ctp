
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Email Templates

    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Email Templates</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
      <?= $this->Flash->render() ?>
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Email Templates</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
           <div class="form-group clearfix">
            <span class="pull-left"> <?php 
           // Use the defaults.
              echo $this->Paginator->limitControl();
              ?></span> <span class="pull-right">  <?= $this->Html->link(__('Add New Email Template'), ['action' => 'add'],['class' => 'btn btn-block btn-success']) ?></span>
            </div>
            <div class="form-group ">
              <input type="text" class="search form-control pull-right" placeholder="What you looking for?">
            </div>
            <span class="counter pull-right"></span>
            <table cellpadding="0" cellspacing="0" class="table table-bordered table-hover table-striped results">
              <thead>
                <tr>

                 <th scope="col"> <label><input type="checkbox" id="checkAll" class="minimal"></label></th>
                 <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                 <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                 <th scope="col"><?= $this->Paginator->sort('subject') ?></th>
                 <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                 <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                 <th scope="col" class="actions"><?= __('Actions') ?></th>
               </tr>
               <tr class="warning no-result">
                <td colspan="4"><i class="fa fa-warning"></i> No result</td>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1;
                    foreach ($emailtemplates as $emailtemplate): ?>
                <tr>
                  <td> <label><input type="checkbox" class="minimal checkbox" value="<?php echo $emailtemplate->id ?>"></label></td>
                  <td><?= $this->Number->format($i) ?></td>
                  <td><?= h($emailtemplate->name) ?></td>
                  <td><?= h($emailtemplate->subject) ?></td>
                  <td><?= h($emailtemplate->created) ?></td>
                  <td><?= h($emailtemplate->modified) ?></td>
                  <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $emailtemplate->id],['class' => 'badge bg-green']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emailtemplate->id],['class' => 'badge bg-green']) ?>
                  </td>
                </tr>
              <?php  $i++; endforeach; ?>
            </tbody>
          </table>
          <div class="paginator">
            <ul class="pagination">
              <?= $this->Paginator->first('<< ' . __('first')) ?>
              <?= $this->Paginator->prev('< ' . __('previous')) ?>
              <?= $this->Paginator->numbers() ?>
              <?= $this->Paginator->next(__('next') . ' >') ?>
              <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
          </div>
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

