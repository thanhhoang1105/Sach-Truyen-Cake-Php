<div class="container users index content">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <?= __('Chương') ?>
        <?= $this->Html->link(__('Thêm Chương'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    </div>
    <div class=" col-lg-12 table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <!-- <th>< $this->Paginator->sort('id') ?></th> -->
                    <th><?= $this->Paginator->sort('Tên Truyện') ?></th>
                    <th><?= $this->Paginator->sort('Tiêu Đề') ?></th>
                    <!-- <th>< $this->Paginator->sort('Tên Chương') ?></th> -->
                    <!-- <th>< $this->Paginator->sort('created') ?></th>
                    <th>< $this->Paginator->sort('modified') ?></th> -->
                    <th class="actions"><?= $this->Paginator->sort('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($chapters as $chapter) : ?>
                    <tr>
                        <!-- <td>< $this->Number->format($chapter->id) ?></td> -->
                        <td><?= $chapter->has('story') ? $this->Html->link($chapter->story->name, ['controller' => 'Stories', 'action' => 'view', $chapter->story->id]) : '' ?></td>
                        <td><?= h($chapter->title) ?></td>
                        <!-- <td>< h($chapter->recap) ?></td> -->
                        <!-- <td>< h($chapter->created) ?></td>
                        <td>< h($chapter->modified) ?></td> -->
                        <td class="actions">
                            <?= $this->Html->link(__('Xem'), ['action' => 'view', $chapter->id]) ?>
                            <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $chapter->id]) ?>
                            <?= $this->Form->postLink(__('Xoá'), ['action' => 'delete', $chapter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapter->id)]) ?>
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
