<?php
$this->Breadcrumbs->add(
    'Home',
    ['controller' => 'Home', 'action' => 'index'],
    ['class' => 'breadcrumb-item active']
);

?>


<div class="container">

    <div class="row">
        <div class="col-4">
            <h3 style="color: #fff;" class="bg-info text-capitalize p-1">Truyện Hot</h3>
            <div class="list-group">
                <?php foreach ($storyList as $key => $storyName) : ?>
                    <a class="list-group-item" href=<?= $this->Url->build(['controller' => 'Truyen', 'action' => 'index', $key]) ?>><?= $storyName ?></a>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="col-8">
            <div class="row">
                <?php foreach ($stories as $key => $story) : ?>
                    <div class="col-4" style="padding-bottom: 20px;">
                        <div class="thumbnail">

                            <img src="webroot/img/<?= $story->image ?>" style=" width: 223px; height:250px;">
                            <div class="caption">
                                <div class="list-group-item list-group-item-action flex-column ">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">
                                            <?=
                                            $this->Text->truncate(
                                                $story->name,
                                                21,
                                                [
                                                    'ellipsis' => '...',
                                                    'exact' => true
                                                ]
                                            );
                                            ?>
                                        </h6>
                                    </div>
                                    <div class="mb-1">
                                        <?=
                                        $this->Text->truncate(
                                            $story->recap,
                                            26,
                                            [
                                                'ellipsis' => '...',
                                                'exact' => true
                                            ]
                                        );
                                        ?><br />
                                        <?= $this->Html->link(__('Xem'), ['controller' => 'Truyen', 'action' => 'index', $story->id]) ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div><br />
            <ul class='pagination'>
                <?= $this->Paginator->prev("<<") ?>

                <?= $this->Paginator->numbers() ?>

                <?= $this->Paginator->next(">>") ?>

            </ul>
        </div>
    </div>
</div>
