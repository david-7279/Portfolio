<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Utilizador $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Utilizadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="utilizador-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'utilizador_metodo_pagamento_id' => $model->utilizador_metodo_pagamento_id, 'utilizador_metodo_pagamento_tipo_pagamento_id1' => $model->utilizador_metodo_pagamento_tipo_pagamento_id1, 'utilizador_metodo_pagamento_id1' => $model->utilizador_metodo_pagamento_id1, 'utilizador_metodo_pagamento_tipo_pagamento_id11' => $model->utilizador_metodo_pagamento_tipo_pagamento_id11], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'utilizador_metodo_pagamento_id' => $model->utilizador_metodo_pagamento_id, 'utilizador_metodo_pagamento_tipo_pagamento_id1' => $model->utilizador_metodo_pagamento_tipo_pagamento_id1, 'utilizador_metodo_pagamento_id1' => $model->utilizador_metodo_pagamento_id1, 'utilizador_metodo_pagamento_tipo_pagamento_id11' => $model->utilizador_metodo_pagamento_tipo_pagamento_id11], [
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
            'id',
            'login',
            'email:email',
            'password',
            'utilizador_metodo_pagamento_id',
            'utilizador_metodo_pagamento_tipo_pagamento_id1',
            'utilizador_metodo_pagamento_id1',
            'utilizador_metodo_pagamento_tipo_pagamento_id11',
        ],
    ]) ?>

</div>
