<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="students view large-10 medium-9 columns">
    <h2><?= h($student->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($student->name) ?></p>
            <h6 class="subheader"><?= __('Father Name') ?></h6>
            <p><?= h($student->father_name) ?></p>
            <h6 class="subheader"><?= __('Mother Name') ?></h6>
            <p><?= h($student->mother_name) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($student->email) ?></p>
            <h6 class="subheader"><?= __('Mobile') ?></h6>
            <p><?= h($student->mobile) ?></p>
            <h6 class="subheader"><?= __('Nid') ?></h6>
            <p><?= h($student->nid) ?></p>
            <h6 class="subheader"><?= __('Created By') ?></h6>
            <p><?= h($student->created_by) ?></p>
            <h6 class="subheader"><?= __('Modified By') ?></h6>
            <p><?= h($student->modified_by) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($student->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($student->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($student->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Address') ?></h6>
            <?= $this->Text->autoParagraph(h($student->address)) ?>
        </div>
    </div>
</div>
