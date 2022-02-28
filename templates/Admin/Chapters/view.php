<div class="container users index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <?= $this->Html->link(__('Thêm Chương'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        <?= $this->Html->link(__('Danh Sách Chương'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        <?= $this->Html->link(__('Sửa Chương'), ['action' => 'edit', $chapter->id], ['class' => 'side-nav-item']) ?>
        <?= $this->Form->postLink(__('Xoá Chương'), ['action' => 'delete', $chapter->id], ['confirm' => __('Bạn có chắc muốn xoá # {0}?', $chapter->id), 'class' => 'side-nav-item']) ?>
    </div>
    <div class=" col-lg-12 table-responsive">
        <h3><?= h($chapter->title) ?></h3>
        <table>
            <tr>
                <th><?= __('Tên Truyện:') ?></th>
                <td><?= $chapter->has('story') ? $this->Html->link($chapter->story->name, ['controller' => 'Stories', 'action' => 'view', $chapter->story->id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('Tên Chương:') ?></th>
                <td><?= h($chapter->title) ?></td>
            </tr>
            <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($chapter->id) ?></td>
            </tr>
            <tr>
                <th><?= __('Tóm Tắt:') ?></th>
                <td><?= h($chapter->recap) ?></td>
            </tr>
            <tr>
                <th><?= __('TG Tạo:') ?></th>
                <td><?= h($chapter->created) ?></td>
            </tr>
            <tr>
                <th><?= __('TG Sửa') ?></th>
                <td><?= h($chapter->modified) ?></td>
            </tr>
        </table>
        <div class="text">
            <strong><?= __('Nội Dung:') ?></strong>
            <blockquote>
                <!-- < $this->Text->autoParagraph(h($chapter->content)); ?> -->
                <?= $this->text->autoParagraph(h($chapter->content)); ?>
            </blockquote>
        </div>
    </div>
</div>
