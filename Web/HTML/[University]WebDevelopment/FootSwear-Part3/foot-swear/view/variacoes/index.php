<?php

use app\models\Variacoes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\VariacoesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Variacoes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="variacoes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Variacoes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'categoria_id',
            'nome',
            'produtos_categoria_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Variacoes $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id, 'produtos_categoria_id' => $model->produtos_categoria_id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
