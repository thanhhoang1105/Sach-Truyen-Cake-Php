<div class="container users index content">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <?= __('Danh Mục') ?>
        <?= $this->Html->link(__('Thêm Danh Mục'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    </div>
    <div class=" col-lg-12 table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <!-- <th scope="col">< $this->Paginator->sort('id') ?></th> -->
                    <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                    <th scope="col" style="width:700px"><?= $this->Paginator->sort('Mô tả') ?></th>
                    <!-- <th scope="col">< $this->Paginator->sort('created') ?></th>
                    <th scope="col">< $this->Paginator->sort('modified') ?></th> -->
                    <th scope="col" class="actions"><?= $this->Paginator->sort('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category) : ?>
                    <tr>
                        <!-- <td>< $this->Number->format($category->id) ?></td> -->
                        <td><?= h($category->name) ?></td>
                        <td><?= h($category->mota) ?></td>
                        <!-- <td>< h($category->created) ?></td>
                        <td>< h($category->modified) ?></td> -->
                        <td class="actions">
                            <?= $this->Html->link(__('Xem  '), ['action' => 'view', $category->id]) ?>
                            <?= $this->Html->link(__(' Sửa '), ['action' => 'edit', $category->id]) ?>
                            <?= $this->Form->postLink(__(' Xoá'), ['action' => 'delete', $category->id], ['confirm' => __('Bạn có chắc muốn xoá # {0}?', $category->id)]) ?>
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
        <!-- <p><?= $this->Paginator->counter(__('Trang {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p> -->
    </div>
</div>
