<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ConfiguracaoProdutoSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="configuracao-produto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'item_produto_id') ?>

    <?= $form->field($model, 'opcoes_produto') ?>

    <?= $form->field($model, 'item_produto_id1') ?>

    <?= $form->field($model, 'item_produto_produtos_id') ?>

    <?= $form->field($model, 'variacoes_opcoes_id') ?>

    <?php // echo $form->field($model, 'variacoes_opcoes_variacoes_id1') ?>

    <?php // echo $form->field($model, 'variacoes_opcoes_variacoes_produtos_categoria_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
