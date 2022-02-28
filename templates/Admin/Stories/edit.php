<div class="container users index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <?= __('Edit Story') ?>
        <?= $this->Html->link(__('List Stories'), ['action' => 'index'], ['class' => 'side-nav-item float-right']) ?>
        <?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $story->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $story->id), 'class' => 'side-nav-item float-right']
        ) ?>
    </div>
    <div class="col-lg-12">
        <?= $this->Form->create($story, ['type' => 'file']) ?>
        <div class="col-xs-12">
            <div class="form-group">
                <label for="name" class="text-danger"><strong>Tên Truyện:</strong></label>
                <?= $this->Form->control('name', ['label' => false, 'class' => 'form-control']); ?>
            </div>
            <div class="form-group">
                <label for="recap" class="text-danger"><strong>Tóm Tắt:</strong></label>
                <?= $this->Form->control('recap', ['label' => false, 'class' => 'form-control']); ?>
            </div>
            <div class="form-group">
                <label for="category_id" class="text-danger"><strong>Thể Loại Truyện:</strong></label>
                <?= $this->Form->control('category_id', ['options' => $categories, 'label' => false, 'class' => 'form-control']); ?>
            </div>
            <div class="form-group">
                <label for="change_image" class="text-danger"><strong>Hình Ảnh:</strong></label>
                <?= $this->Form->control('change_image', ['type' => 'file', 'label' => false]); ?>
            </div>
        </div>
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
<script src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/ckeditor/ckeditor.js"></script>
