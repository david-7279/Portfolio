<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\ConfiguracaoProduto $model */

$this->title = $model->item_produto_id;
$this->params['breadcrumbs'][] = ['label' => 'Configuracao Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="configuracao-produto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'item_produto_id' => $model->item_produto_id, 'item_produto_id1' => $model->item_produto_id1, 'item_produto_produtos_id' => $model->item_produto_produtos_id, 'variacoes_opcoes_id' => $model->variacoes_opcoes_id, 'variacoes_opcoes_variacoes_id1' => $model->variacoes_opcoes_variacoes_id1, 'variacoes_opcoes_variacoes_produtos_categoria_id' => $model->variacoes_opcoes_variacoes_produtos_categoria_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'item_produto_id' => $model->item_produto_id, 'item_produto_id1' => $model->item_produto_id1, 'item_produto_produtos_id' => $model->item_produto_produtos_id, 'variacoes_opcoes_id' => $model->variacoes_opcoes_id, 'variacoes_opcoes_variacoes_id1' => $model->variacoes_opcoes_variacoes_id1, 'variacoes_opcoes_variacoes_produtos_categoria_id' => $model->variacoes_opcoes_variacoes_produtos_categoria_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'item_produto_id',
            'opcoes_produto',
            'item_produto_id1',
            'item_produto_produtos_id',
            'variacoes_opcoes_id',
            'variacoes_opcoes_variacoes_id1',
            'variacoes_opcoes_variacoes_produtos_categoria_id',
        ],
    ]) ?>

</div>
