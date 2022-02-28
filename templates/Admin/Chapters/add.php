<div class="container users index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <?= __('Thêm Chương') ?>
        <?= $this->Html->link(__('Danh Sách Chương'), ['action' => 'index'], ['class' => 'side-nav-item float-right']) ?>
    </div>
    <div class="col-lg-12">
        <?= $this->Form->create($chapter) ?>
        <div class="col-xs-12">
            <div class="form-group">
                <label for="story_id" class="text-danger"><strong>Tên Truyện:</strong></label>
                <?= $this->Form->control('story_id', ['options' => $stories, 'label' => false, 'class' => 'form-control']); ?>
            </div>
            <div class="form-group">
                <label for="title" class="text-danger"><strong>Tiêu Đề:</strong></label>
                <?= $this->Form->control('title', ['label' => false, 'class' => 'form-control']); ?>
            </div>
            <div class="form-group">
                <label for="recap" class="text-danger"><strong>Tên Chương:</strong></label>
                <?= $this->Form->textarea('recap', ['label' => false, 'class' => 'ckeditor']); ?>
            </div>
            <div class="form-group">
                <label for="content" class="text-danger"><strong>Nội Dung Chương:</strong></label>
                <?= $this->Form->control('content', ['label' => false, 'class' => 'ckeditor']); ?>
            </div>
        </div>
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
<script src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/ckeditor/ckeditor.js"></script>
