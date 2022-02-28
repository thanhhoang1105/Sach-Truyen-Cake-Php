<div class="container users index content">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <?= $this->Html->link(__('Thêm Truyện'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        <?= $this->Html->link(__('Danh Sách Truyện'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        <?= $this->Html->link(__('Sửa Truyện'), ['action' => 'edit', $story->id], ['class' => 'side-nav-item']) ?>
        <?= $this->Form->postLink(__('Xoá Truyện'), ['action' => 'delete', $story->id], ['confirm' => __('Bạn có chắc muốn xoá # {0}?', $story->id), 'class' => 'side-nav-item']) ?>
    </div>
    <div class=" col-lg-12 table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Tên Truyện') ?></th>
                    <th scope="col"><?= __('Thể Loại') ?></th>
                    <th scope="col"><?= __('Hình') ?></th>
                    <th scope="col"><?= __('TG Tạo') ?></th>
                    <th scope="col"><?= __('TG Sửa') ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= h($story->id) ?></td>
                    <td><?= h($story->name) ?></td>
                    <td><?= $story->has('category') ? $this->Html->link($story->category->name, ['controller' => 'Categories', 'action' => 'view', $story->category->id]) : '' ?></td>
                    <td><?= @$this->Html->image($story->image, ['style' => 'max-width:50px;height:50px;border-radius:50%;']) ?></td>
                    <td><?= h($story->created) ?></td>
                    <td><?= h($story->modified) ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="container users index content">
    <div class=" col-lg-12 table-responsive">
        <div class="related">
            <h4><?= __('Related Stories') ?></h4>
            <?php if (!empty($story->chapters)) : ?>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"><?= __('Id') ?></th>
                                <th scope="col"><?= __('Story_Id') ?></th>
                                <th scope="col"><?= __('Tên Chương') ?></th>
                                <th scope="col" style="width:300px"><?= __('Tóm Tắt') ?></th>
                                <th scope="col"><?= __('TG Tạo') ?></th>
                                <th scope="col"><?= __('TG Sửa') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($story->chapters as $chapters) : ?>
                                <tr>
                                    <td><?= h($chapters->id) ?></td>
                                    <td><?= h($chapters->story_id) ?></td>
                                    <td><?= h($chapters->title) ?></td>
                                    <td><?= h($chapters->recap) ?></td>
                                    <td><?= h($chapters->created) ?></td>
                                    <td><?= h($chapters->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('Xem'), ['controller' => 'Chapters', 'action' => 'view', $chapters->id]) ?>
                                        <?= $this->Html->link(__('Sửa'), ['controller' => 'Chapters', 'action' => 'edit', $chapters->id]) ?>
                                        <?= $this->Form->postLink(__('Xoá'), ['controller' => 'Chapters', 'action' => 'delete', $chapters->id], ['confirm' => __('Bạn có chắc muốn xoá # {0}?', $chapters->id)]) ?>
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
