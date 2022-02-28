<div class="container users index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <?= __('Thêm Danh Mục') ?>
        <?= $this->Html->link(__('Danh Sách DM'), ['action' => 'index'], ['class' => 'side-nav-item float-right']) ?>
    </div>
    <?= $this->Form->create($category) ?>
    <div class="col-lg-12">

        <div class="col-xs-12">
            <div class="form-group">
                <label for="name" class="text-danger"><strong>Thể Loại:</strong></label>
                <?= $this->Form->textarea('name', ['label' => false, 'class' => 'form-control']); ?>
            </div>
            <div class="form-group">
                <label for="mota" class="text-danger"><strong>Mô Tả:</strong></label>
                <?= $this->Form->textarea('mota', ['label' => false, 'class' => 'form-control']); ?>
            </div>
        </div>

    </div>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
<!-- <script src="http://< $_SERVER['SERVER_NAME'] ?>:< $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/ckeditor/ckeditor.js"></script> -->
<script>
    //CKEDITOR.replace('content');
</script>
