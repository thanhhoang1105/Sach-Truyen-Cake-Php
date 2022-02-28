<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News[]|\Cake\Collection\CollectionInterface $news
 */
?>
<div class="news index content">
    <?= $this->Html->link(__('New News'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('News') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('details') ?></th>
                    <th><?= $this->Paginator->sort('images') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($news as $news): ?>
                <tr>
                    <td><?= $this->Number->format($news->id) ?></td>
                    <td><?= h($news->name) ?></td>
                    <td><?= h($news->title) ?></td>
                    <td><?= h($news->details) ?></td>
                    <td><?= @$this->Html->image($news->images, ['style' => 'max-width:50px;height:50px;border-radius:50%;']) ?></td>
                    <td><?= h($news->created) ?></td>
                    <td><?= h($news->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $news->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $news->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $news->id], ['confirm' => __('Are you sure you want to delete # {0}?', $news->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
