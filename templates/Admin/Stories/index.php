<div class="container users index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <?= __('Truyện') ?>
        <?= $this->Html->link(__('Thêm Truyện'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    </div>
    <div class=" col-lg-12 table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('Tên Truyện') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Thể Loại') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Hình') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('TG Tạo') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('TG Sửa') ?></th>
                    <th scope="col" class="actions"><?= $this->Paginator->sort('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stories as $story) : ?>
                    <tr>
                        <td><?= h($story->name) ?></td>
                        <td><?= $story->has('category') ? $this->Html->link(
                                $story->category->name,
                                ['controller' => 'Categories', 'action' => 'view', $story->category->id]
                            ) : '' ?></td>
                        <td><?= @$this->Html->image(
                                $story->image,
                                ['style' => 'max-width:50px;height:50px;border-radius:50%;']
                            ) ?></td>
                        <td><?= h($story->created) ?></td>
                        <td><?= h($story->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Xem '), ['action' => 'view', $story->id]) ?>
                            <?= $this->Html->link(__(' Sửa '), ['action' => 'edit', $story->id]) ?>
                            <?= $this->Form->postLink(
                                __(' Xoá'),
                                ['action' => 'delete', $story->id],
                                ['confirm' => __('Bạn có chắc muốn xoá # {0}?', $story->id)]
                            ) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Trang {{page}} / {{pages}}')) ?></p>
    </div>
</div>


<!--


<div class="stories index content">
    <?= $this->Html->link(__('New Story'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Stories') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('category_id') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stories as $story) : ?>
                    <tr>
                        <td><?= $this->Number->format($story->id) ?></td>
                        <td><?= h($story->name) ?></td>
                        <td><?= $story->has('category') ? $this->Html->link($story->category->name, ['controller' => 'Categories', 'action' => 'view', $story->category->id]) : '' ?></td>
                        <td><?= h($story->image) ?></td>
                        <td><?= h($story->created) ?></td>
                        <td><?= h($story->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $story->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $story->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $story->id], ['confirm' => __('Are you sure you want to delete # {0}?', $story->id)]) ?>
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
</div> -->
