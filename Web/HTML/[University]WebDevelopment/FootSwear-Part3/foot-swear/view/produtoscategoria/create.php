<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ProdutosCategoria $model */

$this->title = 'Create Produtos Categoria';
$this->params['breadcrumbs'][] = ['label' => 'Produtos Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produtos-categoria-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
