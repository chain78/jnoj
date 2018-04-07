<?php

use yii\helpers\Html;
use yii\helpers\Markdown;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\Discuss */

$this->title = Html::encode($model->title);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view">
    <h1 class="news-title">
        <?= $this->title ?>
    </h1>
    <div class="news-meta">
        <span class="glyphicon glyphicon-time icon-muted"></span> <?= date('Y:m:d h:i', $model->created_at) ?>
    </div>
    <div class="news-content">
        <?= Markdown::process($model->content, 'gfm') ?>
    </div>
</div>