<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ConfiguracaoProduto $model */

$this->title = 'Create Configuracao Produto';
$this->params['breadcrumbs'][] = ['label' => 'Configuracao Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="configuracao-produto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
