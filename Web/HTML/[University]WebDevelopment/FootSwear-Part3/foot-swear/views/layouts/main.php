<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */
/** @var string $content */

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
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header id="header">
        <?php
        NavBar::begin([
            'brandLabel' => 'Foot Swear',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [

                ['label' => 'Loja', 'url' => ['/site/store']],
                !Yii::$app->user->isGuest ? ['label' => 'Área do Cliente', 'url' => ['/site/account']] : ['label' => 'Área do Cliente', 'url' => ['/site/login']],
                Yii::$app->user->can('admin') ? ['label' => 'Admin', 'url' => ['/site/admin']] : '',
            ]
        ]);
        NavBar::end();
        ?>
    </header>

    <main id="main" class="flex-shrink-0" role="main">
        <div class="container">
            <?php if (!empty($this->params['breadcrumbs'])) : ?>
                <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
            <?php endif ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer id="footer">
        <div class="footer-content">
            <div class="f-logo-content">
                <!-- Logo -->
                <div class="f-logo">
                    <img src="images/logo/logo.png" alt="Logo">
                    <p>Foot Swear</p>
                </div>
                <!-- End Logo -->
                <div class="social-media">
                    <a href="#" class="icon-media">
                        <i class="fmedia fa-brands fa-facebook"></i>
                    </a>

                    <a href="#" class="icon-media">
                        <i class="fmedia fa-brands fa-instagram"></i>
                    </a>
                </div>

                <div class="form">
                    <form action="" method="post" id="contact-form" class="form-box">
                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <input class="email" type="email" placeholder="Receba as nossas novidades e promoções">

                        <div class="checkbox">
                            <input type="checkbox" id="checkbox" name="checkbox" required>
                            <label for="terms">Eu li e tomei conhecimento sobre a informação relativa aos <a href="http://localhost/wd-part-3-group-20/foot-swear/web/site/terms" target="_blank"><u class="active">Termos e Política de
                                        Privacidade</u>.</a></label>
                        </div>
                        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        <!--<input type="submit" value="Subscrever Newsletter">-->
                        <?php ActiveForm::end(); ?>
                    </form>
                </div>

                <div class="payment-methods">
                    <img src="images/home/payment.png" alt="Payment Methods">
                </div>
            </div>

            <div class="footer-mapa">
                <p>Informações</p>
                <ul>
                    <li><a href="http://localhost/wd-part-3-group-20/foot-swear/web/site/terms">Termos/Política de Privacidade</a></li>
                    <li><a href="http://localhost/wd-part-3-group-20/foot-swear/web/site/payment">Métodos de Pagamento</a></li>
                    <li><a href="http://localhost/wd-part-3-group-20/foot-swear/web/site/sales">Condições de Venda</a></li>
                </ul>
            </div>

            <div class="footer-mapa">
                <p>Suporte</p>
                <ul>
                    <li><a href="http://localhost/wd-part-3-group-20/foot-swear/web/site/contact">Contactos</a></li>
                    <li><a href="http://localhost/wd-part-3-group-20/foot-swear/web/site/about">Sobre nos</a></li>
                    <li><a href="http://localhost/wd-part-3-group-20/foot-swear/web/site/faq">FAQ (Perguntas Frequentes)</a></li>
                </ul>
            </div>

            <div class="footer-mapa">
                <p>Cliente</p>
                <ul>
                <?php if (!Yii::$app->user->isGuest): ?>
                    <li><a href="http://localhost/wd-part-3-group-20/foot-swear/web/site/account">Área do Cliente</a></li>
                <?php endif; ?>
                    <li><a href="https://www.livroreclamacoes.pt/Inicio/" target="_blank">Livro de Reclamações</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>