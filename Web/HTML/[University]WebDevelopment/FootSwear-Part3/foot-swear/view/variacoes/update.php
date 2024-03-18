<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Variacoes $model */

$this->title = 'Update Variacoes: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Variacoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'produtos_categoria_id' => $model->produtos_categoria_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="variacoes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
