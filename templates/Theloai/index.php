<?php
$this->Breadcrumbs->add([
    [
        'title' => 'Home',
        'url' => ['controller' => 'Home', 'action' => 'index'],
        'options' => ['class' => 'breadcrumb-item']
    ],
    [
        'title' => 'Thể Loại - ' . $category->name,
        'url' => ['controller' => 'Theloai', 'action' => 'index', $category->id],
        'options' => [
            'class' => 'breadcrumb-item active',
            'innerAttrs' => [
                'class' => 'test-list-class',
                'id' => 'the-products-crumb'
            ]
        ]
    ]
]);
?>
<main>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ($category->stories as $stories) : ?>
                    <div class="col-lg-4">
                        <div class="card shadow-sm">
                            <img src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/img/<?= $stories->image ?> " style=" width: 348px; height:350px;">

                            <div class=" card-body">
                                <h6 class="card-text"><?=
                                                        $this->Text->truncate(
                                                            $stories->name,
                                                            35,
                                                            [
                                                                'ellipsis' => '...',
                                                                'exact' => true
                                                            ]
                                                        );
                                                        ?>
                                </h6>
                                <p class="card-text"><?=
                                                        $this->Text->truncate(
                                                            $stories->recap,
                                                            35,
                                                            [
                                                                'ellipsis' => '...',
                                                                'exact' => true
                                                            ]
                                                        );
                                                        ?>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <?= $this->Html->link(__('Xem'), ['controller' => 'Truyen', 'action' => 'index', $stories->id]) ?>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</main>

<!-- <div class="col">
    <p> < $story->name ?> </p>
</div> -->
