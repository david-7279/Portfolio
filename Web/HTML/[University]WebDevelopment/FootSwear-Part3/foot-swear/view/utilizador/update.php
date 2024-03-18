<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Utilizador $model */

$this->title = 'Update Utilizador: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Utilizadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'utilizador_metodo_pagamento_id' => $model->utilizador_metodo_pagamento_id, 'utilizador_metodo_pagamento_tipo_pagamento_id1' => $model->utilizador_metodo_pagamento_tipo_pagamento_id1, 'utilizador_metodo_pagamento_id1' => $model->utilizador_metodo_pagamento_id1, 'utilizador_metodo_pagamento_tipo_pagamento_id11' => $model->utilizador_metodo_pagamento_tipo_pagamento_id11]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="utilizador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
