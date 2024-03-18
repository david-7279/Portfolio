<?php

use app\models\Utilizador;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\UtilizadorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Utilizadors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utilizador-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Utilizador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'login',
            'email:email',
            'password',
            'utilizador_metodo_pagamento_id',
            //'utilizador_metodo_pagamento_tipo_pagamento_id1',
            //'utilizador_metodo_pagamento_id1',
            //'utilizador_metodo_pagamento_tipo_pagamento_id11',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Utilizador $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id, 'utilizador_metodo_pagamento_id' => $model->utilizador_metodo_pagamento_id, 'utilizador_metodo_pagamento_tipo_pagamento_id1' => $model->utilizador_metodo_pagamento_tipo_pagamento_id1, 'utilizador_metodo_pagamento_id1' => $model->utilizador_metodo_pagamento_id1, 'utilizador_metodo_pagamento_tipo_pagamento_id11' => $model->utilizador_metodo_pagamento_tipo_pagamento_id11]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
