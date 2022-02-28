<?php
$this->Breadcrumbs->add([
    [
        'title' => 'Home',
        'url' => ['controller' => 'Home', 'action' => 'index'],
        'options' => ['class' => 'breadcrumb-item']
    ],
    [
        'title' => 'Truyện - ' . $story->name,
        'url' => ['controller' => 'Truyen', 'action' => 'index', $story->id],
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


<div class="container">
    <div class="row">
        <div class="col-12 col-lg-9 float-left" style="margin-bottom: 20px">
            <main>
                <div class="top-part">
                    <div class="row">
                        <div class="left-colum col-12 col-md-3">
                            <div class="series-cover">
                                <div class="ratio">
                                    <a><img src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/img/<?= $story->image ?>" style=" width: 189.5px; height:271.61px;"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-9">
                            <div class="series-name">
                                <span>
                                    <h3><?= $story->name ?></h3>
                                </span>
                            </div>

                            <div class="series-info">
                                <div class="series-gernes" style="margin-bottom: 10px">
                                    <button type="button" class="btn btn-outline-secondary">Action</button>
                                    <button type="button" class="btn btn-outline-secondary">Adventure</button>
                                    <button type="button" class="btn btn-outline-secondary">comedy</button>
                                    <button type="button" class="btn btn-outline-secondary">Fantasy</button>
                                    <button type="button" class="btn btn-outline-secondary">Harem</button>
                                    <button type="button" class="btn btn-outline-secondary">Mystery</button>
                                    <button type="button" class="btn btn-outline-secondary">Romance</button>
                                </div>
                                <div class="info-item" style="margin-bottom: 10px">
                                    <a>
                                        <span>Tác giả:</span>
                                        <span class="info-value ">abc</span>
                                    </a>

                                </div>
                                <div class="info-item" style="margin-bottom: 10px">
                                    <a>
                                        <span>Người viết:</span>
                                        <span class="info-value ">xyz</span>
                                    </a>
                                </div>
                                <div class="info-item" style="margin-bottom: 10px">
                                    <a>
                                        <span>Tình trạng:</span>
                                        <span class="info-value ">xxxx</span>
                                    </a>
                                </div>
                                <div class="info-item" style="margin-bottom: 10px">
                                    <a>
                                        <span>Mô tả:</span>
                                        <span class="info-value "><?=
                                                                    $this->Text->truncate(
                                                                        $story->recap,
                                                                        240,
                                                                        [
                                                                            'ellipsis' => '...',
                                                                            'exact' => true
                                                                        ]
                                                                    );
                                                                    ?>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bottom-part">
                </div>
            </main>
        </div>
        <div class="col-12 col-lg-3 float-right">
            <p>bbbbbbbbbbbbbbbbbbb</p>
        </div>
        <div class="col-12 col-lg-9 float-left">
            <section class="volume-list at-series basic-section volume-mobile gradual-mobile ">
                <header>
                    <span>
                        <h3>Chương</h3>
                    </span>
                </header>
                <main>
                    <div class="side-features">
                        <div class="row">
                            <table class="table table-striped table-hover" style="border:0px;">
                                <?php foreach ($chapters as $chapter) : ?>
                                    <tbody>
                                        <tr>
                                            <th><?= $chapter->recap ?></th>
                                            <td><?= $chapter->modified ?></td>
                                            <td><?= $this->Html->link(__('Xem'), ['controller' => 'Chuong', 'action' => 'index', $chapter->id, 'class' => 'btn btn-success']) ?></td>
                                        </tr>
                                    </tbody>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </main>
            </section>
        </div>
    </div>
</div>
