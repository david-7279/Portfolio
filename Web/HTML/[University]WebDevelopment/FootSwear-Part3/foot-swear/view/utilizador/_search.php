<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\UtilizadorSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="utilizador-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'login') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'utilizador_metodo_pagamento_id') ?>

    <?php // echo $form->field($model, 'utilizador_metodo_pagamento_tipo_pagamento_id1') ?>

    <?php // echo $form->field($model, 'utilizador_metodo_pagamento_id1') ?>

    <?php // echo $form->field($model, 'utilizador_metodo_pagamento_tipo_pagamento_id11') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
