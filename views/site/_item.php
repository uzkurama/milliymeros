<?php

use yii\helpers\Url;
use yii\bootstrap5\Html;

$this->title = 'Sotib olingan ashyolar';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="t-pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 t-mb-50 mb-lg-0">
                <ul class="t-list list-group service-list">
                    <li class="service-list__item">
                        <a href="#items_list" class="t-link active service-list__link t-link--primary w-100 text-capitalize font-weight-bold" data-toggle="list">
                            Xarid qilingan ashyolar ro'yxati
                        </a>
                    </li>
                    <li class="service-list__item">
                        <a href="#contract_list" class="t-link t-link--primary service-list__link w-100 text-capitalize font-weight-bold" data-toggle="list">
                            Shartnomalar
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="items_list">
                        <img class="img-fluid mb-5" src="/uploads/bg_ashyo.jpg">
                        <div class="table-responsive">
                            <table class="table table-striped table-condensed table-hover table-bordered">
                                <tbody>
                                    <tr>
                                        <td><i class="las la-file-word"></i> <a href="/uploads/list_items_1.docx" target="_blank">Xarid qilinga ashyolar ro'yxati 1</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="las la-file-word"></i> <a href="/uploads/list_items_2.docx" target="_blank">Xarid qilinga ashyolar ro'yxati 2</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contract_list">
                        <img class="img-fluid mb-5" src="/uploads/bg_ashyo.jpg">
                        <div class="table-responsive">
                            <table class="table table-striped table-condensed table-hover table-bordered">
                                <tbody>
                                    <tr>
                                        <td><i class="las la-file-word"></i> <a href="/uploads/contracts/1-son.pdf" target="_blank">Shartnoma 1</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="las la-file-word"></i> <a href="/uploads/contracts/2-son.pdf" target="_blank">Shartnoma 2</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="las la-file-word"></i> <a href="/uploads/contracts/3-son.pdf" target="_blank">Shartnoma 3</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="las la-file-word"></i> <a href="/uploads/contracts/5-son.pdf" target="_blank">Shartnoma 5</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
