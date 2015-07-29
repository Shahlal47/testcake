
<div class="portlet  box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-list"></i>
            <span class="caption-subject bold">Users Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">User Name</td><td><?= h($user->username) ?></td></tr>
                <tr><td class="text-right">User Role</td><td><?= h($user->role) ?></td></tr>
                <tr><td class="text-right">User Email</td><td><?= h($user->email) ?></td></tr>
                <tr><td class="text-right">Created By</td><td><?=  h($user->created_by) ?></td></tr>
                <tr><td class="text-right">Modified By</td><td><?= h($user->modified_by) ?></td></tr
                <tr><td class="text-right">Created</td><td><?=  h($user->created) ?></td></tr>
                <tr><td class="text-right">Modified</td><td><?= h($user->modified) ?></td></tr>
                <tr><td class="text-right">Active Status</td><td><?= $user->status ? __('Yes') : __('No'); ?></td></tr>
            </table>
        </div>
    </div>
</div>