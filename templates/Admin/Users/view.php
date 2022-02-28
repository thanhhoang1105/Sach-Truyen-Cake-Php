<div class="container users index content">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
        <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
    </div>
    <div class=" col-lg-12 table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Username') ?></th>
                    <th scope="col"><?= __('Password') ?></th>
                    <th scope="col"><?= __('Email') ?></th>
                    <th scope="col"><?= __('Quyền') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= h($user->id) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->password) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= $this->Number->format($user->status) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Trang {{page}} / {{pages}}')) ?></p>
        <p><?= $this->Paginator->counter(__('Trang {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div> -->
</div>
