<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Iv Right Serial Number'), ['action' => 'edit', $ivRightSerialNumber->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Iv Right Serial Number'), ['action' => 'delete', $ivRightSerialNumber->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ivRightSerialNumber->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Iv Right Serial Numbers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Iv Right Serial Number'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Iv Right Rows'), ['controller' => 'IvRightRows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Iv Right Row'), ['controller' => 'IvRightRows', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Item Serial Numbers'), ['controller' => 'ItemSerialNumbers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item Serial Number'), ['controller' => 'ItemSerialNumbers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ivRightSerialNumbers view large-9 medium-8 columns content">
    <h3><?= h($ivRightSerialNumber->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Iv Right Row') ?></th>
            <td><?= $ivRightSerialNumber->has('iv_right_row') ? $this->Html->link($ivRightSerialNumber->iv_right_row->id, ['controller' => 'IvRightRows', 'action' => 'view', $ivRightSerialNumber->iv_right_row->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Item Serial Number') ?></th>
            <td><?= $ivRightSerialNumber->has('item_serial_number') ? $this->Html->link($ivRightSerialNumber->item_serial_number->id, ['controller' => 'ItemSerialNumbers', 'action' => 'view', $ivRightSerialNumber->item_serial_number->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($ivRightSerialNumber->id) ?></td>
        </tr>
    </table>
</div>
