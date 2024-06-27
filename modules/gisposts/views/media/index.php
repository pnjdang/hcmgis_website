<?php
/**
 * Created by PhpStorm.
 * User: MinhDuc
 * Date: 5/4/2021
 * Time: 2:33 PM
 */

use yii\helpers\Html;
use yii\widgets\Pjax;
use app\modules\DCrud\DCrudAsset;
use yii\bootstrap\Modal;
use coderius\lightbox2\Lightbox2;
use yii\widgets\LinkPager;
DCrudAsset::register($this);

$requestedAction = Yii::$app->requestedAction;
$this->title = $const['actions'][$requestedAction->id]['label'] . ' ' . $const['title'];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="page-head">
    <!-- BEGIN PAGE TITLE -->
    <div class="mb-3">
        <a href="<?= Yii::$app->urlManager->createUrl(['cms/media/create'])?>" role="modal-remote" class="btn btn-primary float-end mt-n1"><i class="fa fa-plus"></i> Thêm mới</a>
        <h1 class="d-inline align-middle">Media</h1>
    </div>
    <!-- END PAGE TITLE -->
</div>

<?php Pjax::begin(['id' => 'pjax-media-index'])?>

<?= Lightbox2::widget([
    'clientOptions' => [
        'resizeDuration' => 200,
        'wrapAround' => true,

    ]
]); ?>
<style>
    .img-wrap{
        min-height: 170px;
        background-color: #0b0b0b;
    }
</style>
<div class="portfolio-content">
    <?php if($model == null):?>
        <div class="row form-group">
            <div class="col-lg-12">
                <div class="alert alert-light alert-info">
                    <h4><i class="fa fa-exclamation-triangle"></i> No file!</h4>
                </div>
            </div>
        </div>
    <?php else:?>
    <div class="row">
        <?php foreach($model as $i => $item):?>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card">
                    <a data-bs-toggle="modal" data-bs-target="#sizedModalLg<?=$item->id?>">
                    <div class="card-img-top" style="background-image: url('../../<?= $item->file_path?>');background-size: cover; background-position: center; min-height: 200px">
                        <span class="badge <?= $item->file_extension == 'jpg' ? 'bg-success' : 'bg-warning' ?> m-2"><?= $item->file_extension == null ? 'jpg' : $item->file_extension ?></span>
                    </div>
                    </a>
                    <div class="card-header">
                        <h5 class="card-title mb-0"><?= $item->file_caption == null ? '<i>(Không mô tả)</i>' : $item->file_caption ?></h5>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#sizedModalLg<?=$item->id?>">Xem chi tiết</button>
                        <div class="modal fade" id="sizedModalLg<?=$item->id?>" tabindex="-1" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><?= $item->file_caption?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body m-3">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th>Tên</th>
                                                        <td><?= $item->file_name ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Mô tả</th>
                                                        <td><?= $item->file_caption ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Dạng file</th>
                                                        <td><?= $item->file_type ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Đường dẫn</th>
                                                        <td><span id="filepath-<?= $item->id?>"><?= Yii::$app->getHomeUrl().$item->file_path ?></span>
                                                            <button type="button" class="btn btn-xs btn-info" id="copyBtn-<?= $item->id?>"
                                                                    onclick="copyToClipboard('#filepath')">Copy to clipboard
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Thời gian</th>
                                                        <td><?= $item->uploaded_at ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

                                        <script>
                                            $('#copyBtn-<?= $item->id?>').click(function () {

                                                var text = $("#filepath-<?= $item->id?>").get(0)
                                                var selection = window.getSelection();
                                                var range = document.createRange();
                                                range.selectNodeContents(text);
                                                selection.removeAllRanges();
                                                selection.addRange(range);
                                                //add to clipboard.
                                                document.execCommand('copy');
                                            })
                                        </script>
                                        
                                        <img class="card-img-top" src="../../<?= $item->file_path?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach;?>

    </div>
    <div class="row form-group">
        <div class="col-lg-12">
            <?= LinkPager::widget([
                'pagination' => $pagination,
            ]);?>
        </div>
    </div>
    <?php endif;?>
</div>


<?php Pjax::end()?>

<?php Modal::begin([
    "id"=>"ajaxCrudModal",
    "size" => "modal-lg",
    "footer"=>"",// always need it for jquery plugin
])?>
<?php Modal::end(); ?>
