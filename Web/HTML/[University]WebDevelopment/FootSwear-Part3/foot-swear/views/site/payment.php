<?php

/** @var yii\web\View $this */
/** @var string $content */

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

$this->registerLinkTag(['rel' => 'stylesheet', 'type' => 'css', 'href' => Yii::getAlias('/../css/information.css')]);
$this->registerCssFile("/../css/information.css");
$this->registerCssFile("@web/css/information.css");

$this->title = 'Métodos de Pagamento | Foot Swear';
$this->params['breadcrumbs'][] = 'Métodos de Pagamento';
?>

<?php 
    $this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
    $this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
    $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
    
    $baseUrl = Yii::$app->request->baseUrl;
    $cs = Yii::$app->view;
    $cs->registerCssFile($baseUrl . '/css/information.css', [
        'depends' => [\yii\web\JqueryAsset::className()]
    ]);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<link rel="stylesheet" href="/../css/information.css">
<link rel="stylesheet" href="css/information.css">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<body>
    <?php $this->beginBody() ?>
    <main>
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Métodos de Pagamento</h2>
                </div>

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-12 col-md-6">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="fas fa-solid fa-credit-card"></i>
                            </div>
                            <h3>Referência Multibanco</h3>
                            <p>Para uma maior comodidade, pague através de Referência Multibanco em qualquer Multibanco ou Homebanking. Sugerimos a escolha desta opção caso tenha urgência na expedição da sua encomenda.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-12 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-brands fa-paypal"></i>
                            </div>
                            <h3>Paypal</h3>
                            <p>Apenas terá de introduzir o seu e-mail e palavra-passe. Não é necessário introduzir números de cartões ou copiar entidades, referências ou códigos de segurança. Deverá ter um cartão de débito / crédito Visa, Mastercard, American Express e Discover ou conta bancária associada à sua conta PayPal.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-12 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-brands fa-cc-mastercard"></i>
                            </div>
                            <h3>MBWAY</h3>
                            <p>Basta inserir o seu número de telefone no método de pagamento e aceitar a transação no seu smartphone. Dentro de momentos, a sua encomenda será confirmada!</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-12 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-solid fa-coins"></i>
                            </div>
                            <h3>Footswear</h3>
                            <p>Poderá pagar numa das nossas lojas em numerário até o limite legal de 3.000€ para pessoas singulares residentes em território nacional e 10.000€ para pessoas singulares não residentes. No entanto, para facilitar o troco aos nossos comerciais, sugerimos outros modos de pagamento (como por exemplo, cartão de débito).</p>

                        </div>
                    </div><!-- End Service Item -->
                </div>
            </div>
        </section><!-- End Our Services Section -->
    </main>
    <?php $this->endBody() ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

</html>
<?php $this->endPage() ?>