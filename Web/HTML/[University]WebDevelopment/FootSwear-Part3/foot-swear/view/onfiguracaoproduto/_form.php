<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ConfiguracaoProduto $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="configuracao-produto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item_produto_id')->textInput() ?>

    <?= $form->field($model, 'opcoes_produto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_produto_id1')->textInput() ?>

    <?= $form->field($model, 'item_produto_produtos_id')->textInput() ?>

    <?= $form->field($model, 'variacoes_opcoes_id')->textInput() ?>

    <?= $form->field($model, 'variacoes_opcoes_variacoes_id1')->textInput() ?>

    <?= $form->field($model, 'variacoes_opcoes_variacoes_produtos_categoria_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
