<?php

use app\models\ConfiguracaoProduto;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\ConfiguracaoProdutoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Configuracao Produtos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="configuracao-produto-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Configuracao Produto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'item_produto_id',
            'opcoes_produto',
            'item_produto_id1',
            'item_produto_produtos_id',
            'variacoes_opcoes_id',
            //'variacoes_opcoes_variacoes_id1',
            //'variacoes_opcoes_variacoes_produtos_categoria_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ConfiguracaoProduto $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'item_produto_id' => $model->item_produto_id, 'item_produto_id1' => $model->item_produto_id1, 'item_produto_produtos_id' => $model->item_produto_produtos_id, 'variacoes_opcoes_id' => $model->variacoes_opcoes_id, 'variacoes_opcoes_variacoes_id1' => $model->variacoes_opcoes_variacoes_id1, 'variacoes_opcoes_variacoes_produtos_categoria_id' => $model->variacoes_opcoes_variacoes_produtos_categoria_id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
