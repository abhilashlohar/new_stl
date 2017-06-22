<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Iv Right Serial Number'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Iv Right Rows'), ['controller' => 'IvRightRows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Iv Right Row'), ['controller' => 'IvRightRows', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Item Serial Numbers'), ['controller' => 'ItemSerialNumbers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item Serial Number'), ['controller' => 'ItemSerialNumbers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ivRightSerialNumbers index large-9 medium-8 columns content">
    <h3><?= __('Iv Right Serial Numbers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('iv_right_row_id') ?></th>
                <th><?= $this->Paginator->sort('item_serial_number_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ivRightSerialNumbers as $ivRightSerialNumber): ?>
            <tr>
                <td><?= $this->Number->format($ivRightSerialNumber->id) ?></td>
                <td><?= $ivRightSerialNumber->has('iv_right_row') ? $this->Html->link($ivRightSerialNumber->iv_right_row->id, ['controller' => 'IvRightRows', 'action' => 'view', $ivRightSerialNumber->iv_right_row->id]) : '' ?></td>
                <td><?= $ivRightSerialNumber->has('item_serial_number') ? $this->Html->link($ivRightSerialNumber->item_serial_number->id, ['controller' => 'ItemSerialNumbers', 'action' => 'view', $ivRightSerialNumber->item_serial_number->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ivRightSerialNumber->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ivRightSerialNumber->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ivRightSerialNumber->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ivRightSerialNumber->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
