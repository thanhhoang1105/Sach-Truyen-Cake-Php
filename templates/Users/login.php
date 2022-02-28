<div class="users index content">
    <div class="table-responsive">
        <?= $this->Form->create(); ?>
        <form id="login-form" class="form" action="" method="post">
            <h3 class="text-center text-info">Login</h3>
            <div class="form-group">
                <?= $this->Form->control('email'); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('password', array('type' => 'password')); ?></p>
            </div>
            <div class="form-group">
                <?= $this->Form->submit('Login', array('class' => 'button')); ?>
            </div>
        </form>
        <?= $this->Form->end(); ?>
    </div>
</div>
