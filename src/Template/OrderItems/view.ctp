<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order Item'), ['action' => 'edit', $orderItem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order Item'), ['action' => 'delete', $orderItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderItem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Order Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orderItems view large-9 medium-8 columns content">
    <h3><?= h($orderItem->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Order') ?></th>
            <td><?= $orderItem->has('order') ? $this->Html->link($orderItem->order->id, ['controller' => 'Orders', 'action' => 'view', $orderItem->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Product') ?></th>
            <td><?= $orderItem->has('product') ? $this->Html->link($orderItem->product->name, ['controller' => 'Products', 'action' => 'view', $orderItem->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($orderItem->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($orderItem->quantity) ?></td>
        </tr>
        <tr>
            <th><?= __('Price') ?></th>
            <td><?= $this->Number->format($orderItem->price) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($orderItem->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($orderItem->modified) ?></td>
        </tr>
    </table>
</div>
