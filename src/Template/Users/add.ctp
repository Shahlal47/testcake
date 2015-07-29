
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-pencil"></i>
            <span class="caption-subject bold"><?= __('Add New User ') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body"><br>
        <?= $this->Form->create($user, array('class' => 'form-horizontal')) ?>
        <div class="form-group">
            <label class="col-sm-4 control-label">User Name</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('username', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Email Address</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('email', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Password</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('password', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">User Type/Role</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('role', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Active Status</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('active', array('label' => false, 'type' => 'checkbox', 'class'=>'form-control')); ?>
            </div>
        </div>
        <hr>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-4 col-md-9">
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                    <?= $this->Form->button(__('Cancel'), ['class' => 'btn btn-danger']) ?>
                </div>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>
