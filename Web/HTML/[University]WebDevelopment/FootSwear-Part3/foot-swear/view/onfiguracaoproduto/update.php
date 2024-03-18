<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ConfiguracaoProduto $model */

$this->title = 'Update Configuracao Produto: ' . $model->item_produto_id;
$this->params['breadcrumbs'][] = ['label' => 'Configuracao Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->item_produto_id, 'url' => ['view', 'item_produto_id' => $model->item_produto_id, 'item_produto_id1' => $model->item_produto_id1, 'item_produto_produtos_id' => $model->item_produto_produtos_id, 'variacoes_opcoes_id' => $model->variacoes_opcoes_id, 'variacoes_opcoes_variacoes_id1' => $model->variacoes_opcoes_variacoes_id1, 'variacoes_opcoes_variacoes_produtos_categoria_id' => $model->variacoes_opcoes_variacoes_produtos_categoria_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="configuracao-produto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
