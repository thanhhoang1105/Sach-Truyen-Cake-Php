<!--<br>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
	<div class="panel">
		<h2 class="text-center">Please Register</h2>
		<?= $this->Form->create($user); ?>
			<p>name:<?= $this->Form->input('name'); ?></p>
			<p>email:<?= $this->Form->input('email'); ?></p>
			<p>password:<?= $this->Form->input('password', array('type' => 'password')); ?></p>
			<?= $this->Form->submit('Register', array('class' => 'button')); ?>
		<?= $this->Form->end(); ?>
	</div>
</div>-->



<div class="users index content">
    <div class="table-responsive">
    	<?= $this->Form->create($user); ?>
        <form id="login-form" class="form" action="" method="post">
                            <h2 class="text-center">Please Register</h2>
                             <div class="form-group">
                                <?= $this->Form->control('name'); ?>
                            </div>
                            <div class="form-group">
                                <?= $this->Form->control('email'); ?>
                            </div>
                            <div class="form-group">
                                <?= $this->Form->control('password', array('type' => 'password')); ?></p>
                            </div>
                            <div class="form-group">
                            	<?= $this->Form->submit('Register', array('class' => 'button')); ?>
                                
                            </div>
                           
        </form>
        <?= $this->Form->end(); ?>
    </div>
</div>
