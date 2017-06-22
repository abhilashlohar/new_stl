<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ivRightSerialNumber->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ivRightSerialNumber->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Iv Right Serial Numbers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Iv Right Rows'), ['controller' => 'IvRightRows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Iv Right Row'), ['controller' => 'IvRightRows', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Item Serial Numbers'), ['controller' => 'ItemSerialNumbers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item Serial Number'), ['controller' => 'ItemSerialNumbers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ivRightSerialNumbers form large-9 medium-8 columns content">
    <?= $this->Form->create($ivRightSerialNumber) ?>
    <fieldset>
        <legend><?= __('Edit Iv Right Serial Number') ?></legend>
        <?php
            echo $this->Form->input('iv_right_row_id', ['options' => $ivRightRows]);
            echo $this->Form->input('item_serial_number_id', ['options' => $itemSerialNumbers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
