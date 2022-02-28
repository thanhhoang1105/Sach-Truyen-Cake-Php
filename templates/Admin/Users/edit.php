<div class="container users index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <?= __('Edit User') ?>
        <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item float-right']) ?>
        <?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $user->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item float-right']
        ) ?>
    </div>
    <div class="col-lg-12">
        <?= $this->Form->create($user) ?>
        <div class="col-xs-12">
            <div class="form-group">
                <label for="name" class="text-danger"><strong>Tên User:</strong></label>
                <?= $this->Form->control('name', ['label' => false, 'class' => 'form-control']); ?>
            </div>
            <div class="form-group">
                <label for="password" class="text-danger"><strong>Password:</strong></label>
                <?= $this->Form->control('password', ['label' => false, 'class' => 'form-control']); ?>
            </div>
            <div class="form-group">
                <label for="email" class="text-danger"><strong>Email:</strong></label>
                <?= $this->Form->control('email', ['label' => false, 'class' => 'form-control']); ?>
            </div>
            <div class="form-group">
                <label for="status" class="text-danger"><strong>Quyền:</strong></label>
                <?= $this->Form->control('status', ['label' => false, 'class' => 'form-control']); ?>
            </div>
        </div>
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
