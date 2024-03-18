<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Utilizador $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="utilizador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'login')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'utilizador_metodo_pagamento_id')->textInput() ?>

    <?= $form->field($model, 'utilizador_metodo_pagamento_tipo_pagamento_id1')->textInput() ?>

    <?= $form->field($model, 'utilizador_metodo_pagamento_id1')->textInput() ?>

    <?= $form->field($model, 'utilizador_metodo_pagamento_tipo_pagamento_id11')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
