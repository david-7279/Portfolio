<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);

$this->registerCssFile("/../css/user.css");
$this->registerCssFile("@web/css/user.css");

$this->title = 'Área do Cliente';
$this->params['breadcrumbs'][] = 'Área do Cliente';
?>

<?php
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);

$baseUrl = Yii::$app->request->baseUrl;
$cs = Yii::$app->view;
$cs->registerCssFile($baseUrl . '/../css/user.css', [
    'depends' => [\yii\web\JqueryAsset::className()]
]);
?>

<link rel="stylesheet" href="/../css/user.css">

<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

<!-- Bootstrap CSS v5.2.1 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <!-- Title -->
    <div class="m-title">
        <h2> Olá, <!-- Name of the user here! --></h2>
        <p>Painel de Ferramentas</p>
        <hr>
    </div>
    <!-- End Title -->

    <!-- Content Card -->
    <div class="content-card-stg">
        <!-- Card -->
        <div class="card-stg">
            <a href="#">
                <div class="c-icon-stg">
                    <i class="c-fas-stg fa-solid fa-user"></i>
                </div>
                <p class="c-title-stg">Perfil</p>
                <p class="c-text-stg">Gerir o conteúdo do seu perfil. Como nome, email, morada entre outros</p>
            </a>
        </div>
        <!-- End card -->

        <!-- Card -->
        <div class="card-stg">
            <a href="#">
                <div class="c-icon-stg">
                    <i class="c-fas-stg fa-solid fa-truck-ramp-box"></i>
                </div>
                <p class="c-title-stg">Encomendas</p>
                <p class="c-text-stg">Gerir encomendas dos produtos comprados</p>
            </a>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="card-stg">
            <a href="#">
                <div class="c-icon-stg">
                    <i class="c-fas-stg fa-solid fa-cart-shopping"></i>
                </div>
                <p class="c-title-stg">Carrinho</p>
                <p class="c-text-stg">Gerir todos os produtos no carrinho de compras</p>
            </a>
        </div>
    </div>
    <!-- End Content Card -->

    <!-- Login and Create Account -->
    <!-- Title -->
    <div class="m-title-lca">
        <p class="m-title">Painel de Sessão</p>
        <hr>
    </div>
    <!-- End Title -->

    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                    'inputOptions' => ['class' => 'col-lg-3 form-control'],
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                ],
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ]) ?>

            <div class="form-group">
                <div>
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>

    <!-- Content Card -->
    <div class="content-card">
        <!-- Card -->
        <div class="card">
            <div class="sm-icon">
                <a href="#">
                    <i class="c-fas fa-brands fa-facebook"></i>
                </a>
                <a href="#">
                    <i class="c-fas fa-brands fa-instagram"></i>
                </a>
            </div>
            <p class="c-title">Siga-nos</p>
            <p class="c-text-stg">Esteja a par das nossas publicações</p>
        </div>
        <!-- End card -->

        <!-- Card -->
        <div class="card">
            <a href="#">
                <div class="space"></div>
                <div class="c-icon">
                    <i class="c-fas fa-solid fa-question"></i>
                </div>
                <p class="c-title">Assistência</p>
                <p class="space-assistencia"></p>
            </a>

            <!-- Form Message -->
            <form class="c-form-box" action="page.php" method="post">
                <input type="text" name="fname" id="fname" placeholder="Nome" maxlength="25" required>
                <input type="email" placeholder="Email" maxlength="120" required>
                <textarea name="textarea" id="textarea" cols="30" rows="10" placeholder="Escre aqui a sua mensgem" required></textarea>
                <input type="submit" value="Enviar">
            </form>
            <!-- End Form Message -->
        </div>
        <!-- End Card -->
</body>