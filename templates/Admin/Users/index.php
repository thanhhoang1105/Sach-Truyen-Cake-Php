<div class="container users index content">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <?= __('Users') ?>
        <?= $this->Html->link(__('Thêm Users'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    </div>
    <div class=" col-lg-12 table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <!-- <th scope="col">< $this->Paginator->sort('id') ?></th> -->
                    <th scope="col"><?= $this->Paginator->sort('UserName') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Quyền') ?></th>
                    <!-- <th scope="col">< $this->Paginator->sort('created') ?></th>
                    <th scope="col">< $this->Paginator->sort('modified') ?></th> -->
                    <th scope="col" class="actions"><?= $this->Paginator->sort('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <!-- <th scope="row">< $this->Number->format($user->id) ?></th> -->
                        <td><?= h($user->name) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= $this->Number->format($user->status) ?></td>
                        <!-- <td>< h($user->created) ?></td>
                        <td>< h($user->modified) ?></td> -->
                        <td class="actions">
                            <?= $this->Html->link(__('Xem'), ['action' => 'view', $user->id]) ?>
                            <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $user->id]) ?>
                            <?= $this->Form->postLink(__('Xoá'), ['action' => 'delete', $user->id], ['confirm' => __('Bạn có chắc muốn xoá # {0}?', $user->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Trang {{page}} / {{pages}}')) ?></p>
        <!-- <p><?= $this->Paginator->counter(__('Trang {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p> -->
    </div>
</div>
