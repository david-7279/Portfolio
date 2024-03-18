<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Variacoes $model */

$this->title = 'Create Variacoes';
$this->params['breadcrumbs'][] = ['label' => 'Variacoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="variacoes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
