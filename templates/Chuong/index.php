<?php
$this->Breadcrumbs->add([
    [
        'title' => 'Home',
        'url' => ['controller' => 'Home', 'action' => 'index'],
        'options' => ['class' => 'breadcrumb-item']
    ],
    [
        'title' => '' . $chapter->title,
        'url' => ['controller' => 'Chuong', 'action' => 'index', $chapter->id],
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

<div class="col" id="flipbook">
    <h1><?= $chapter->recap ?></h1>
    <?= $chapter->content ?>
</div>
