<div class="container users index content">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <?= $this->Html->link(__('Danh Sách DM'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        <?= $this->Html->link(__('Thêm Danh Mục'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        <?= $this->Html->link(__('Sửa Danh Mục'), ['action' => 'edit', $category->id], ['class' => 'side-nav-item']) ?>
        <?= $this->Form->postLink(__('Xoá Danh Mục'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id), 'class' => 'side-nav-item']) ?>
    </div>
    <div class=" col-lg-12 table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Thể loại') ?></th>
                    <th scope="col" style="width:500px;"><?= __('Mô tả') ?></th>
                    <th scope="col"><?= __('TG Tạo') ?></th>
                    <th scope="col"><?= __('TG Sửa') ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $this->Number->format($category->id) ?></td>
                    <td><?= h($category->name) ?></td>
                    <td><?= h($category->mota) ?></td>
                    <td><?= h($category->created) ?></td>
                    <td><?= h($category->modified) ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="container users index content">
    <div class=" col-lg-12 table-responsive">
        <div class="related">
            <h4><?= __('Related Stories') ?></h4>
            <?php if (!empty($category->stories)) : ?>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"><?= __('Id') ?></th>
                                <th scope="col"><?= __('Cat_Id') ?></th>
                                <th scope="col"><?= __('Tên Truyện') ?></th>
                                <th scope="col" style="width:300px"><?= __('Tóm Tắt') ?></th>
                                <th scope="col"><?= __('Hình') ?></th>
                                <th scope="col"><?= __('TG Tạo') ?></th>
                                <th scope="col"><?= __('TG Sửa') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($category->stories as $stories) : ?>
                                <tr>
                                    <td><?= h($stories->id) ?></td>
                                    <td><?= h($stories->category_id) ?></td>
                                    <td><?= h($stories->name) ?></td>
                                    <td><?= h($stories->recap) ?></td>
                                    <td><?= @$this->Html->image($stories->image, ['style' => 'max-width:50px;height:50px;border-radius:50%;']) ?></td>
                                    <td><?= h($stories->created) ?></td>
                                    <td><?= h($stories->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('Xem '), ['controller' => 'Stories', 'action' => 'view', $stories->id]) ?>
                                        <?= $this->Html->link(__('Sửa'), ['controller' => 'Stories', 'action' => 'edit', $stories->id]) ?>
                                        <?= $this->Form->postLink(__('Xoá'), ['controller' => 'Stories', 'action' => 'delete', $stories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stories->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?php echo $this->Paginator->prev('< ' . __('previous')) ?>
            <?php echo $this->Paginator->numbers() ?>
            <?php echo $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Trang {{page}} / {{pages}}')) ?></p>
    </div>
</div>
