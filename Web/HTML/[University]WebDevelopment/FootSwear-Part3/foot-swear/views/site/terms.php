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

$this->title = 'Termos e Política de Privacidade | Foot Swear';
$this->params['breadcrumbs'][] = 'Termos e Política de Privacidade';
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
                    <h2 class>Termos e Política de Privacidade</h2>
                </div>

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-12 col-md-6">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="fas fa-solid fa-info"></i>

                            </div>
                            <h3>O que fazemos com as suas informações?</h3>
                            <p>A Foot Swear é a entidade responsável pelo tratamento dos dados pessoais dos utilizadores dos seus serviços. Em regra não partilhamos os dados pessoais dos utilizadores, a não ser que: <br>
                                Os mesmos sejam necessários a execução dos serviços requisitados. <br>
                                A comunicação seja levada a cabo para proteger interesses vitais da empresa, dos utilizadores ou qualquer outra finalidade prevista na lei. <br>
                                Também utilizamos os seus dados para comunicar consigo detalhes sobre os seus pedidos, ofertas especiais, anúncios de promoção, pesquisa de mercado, e para ajudar com pedidos operacionais como reset de palavra-passe ou abandono de carrinhos. <br>
                                Estas comunicações podem ser feitas por vários métodos, tais como e-mail ou por contacto telefónico.
                            </p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-12 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-solid fa-user-check"></i>
                            </div>
                            <h3>Consentimentos</h3>
                            <p>Como vocês obtêm meu consentimento?<br>Quando você nos fornece as suas informações pessoais para completar uma transação, verificar seu cartão de crédito, fazer um pedido, providenciar uma entrega ou retoma de uma compra, você está concordando com a nossa coleta e uso de informações pessoais apenas para esses fins específicos. <br>
                                Se pedirmos suas informações pessoais por uma razão secundária, como marketing, vamos pedir seu consentimento, ou te dar a oportunidade de dizer não. <br><br>
                                Como posso retirar o meu consentimento?<br>
                                Caso depois de fornecer seus dados você mude de ideia, você pode retirar o seu consentimento quando quiser e assim evitar que entremos em contato para obter ou divulgar informações. Entre em contato connosco através do fixngo@outlook.com
                            </p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-12 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-regular fa-file-lines"></i>
                            </div>
                            <h3>Divulgação</h3>
                            <p>Podemos divulgar suas informações pessoais se formos obrigados por lei a fazê-lo ou se você violar nossos Termos de serviço.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-12 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="/wd-part-3-group-20/foot-swear/web/images/logo/logo.png" alt="">
                            </div>
                            <h3>Footswear</h3>
                            <p>O website surgiuda concretização de um projeto na área de Desenvolvimento Web, recorrendo a linguagens de programação, tais como HTML e CSS.<br>Este website representa uma plataforma de comércio eletrônico online, cuja finalidade primordial consiste na oferta de produtos e serviços para transações comerciais.</p>

                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-12 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-solid fa-shield"></i>
                            </div>
                            <h3>Segurança</h3>
                            <p>Para proteger suas informações pessoais, tomamos precauções e seguimos as melhores práticas da indústria para nos certificar que elas não sejam perdidas, acessadas, divulgadas, alteradas ou destruídas.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-12 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-solid fa-file-pen"></i>
                            </div>
                            <h3>Alterações nas políticas de privacidade</h3>
                            <p>Reservamos o direito de modificar essa política de privacidade a qualquer momento. Portanto, por favor, leia-a com frequência. As alterações e esclarecimentos surtem efeito imediatamente após serem publicadas no site. <br>
                                Caso façamos alterações na política de privacidade, iremos notificá-lo sobre a atualização. Assim, você saberá quais informações, como as usamos, e sob que circunstâncias, caso aplicável, as utilizaremos e/ou divulgaremos. <br>
                                Caso ocorra a fusão da nossa loja com outra empresa, suas informações podem ser transferidas para os novos proprietários para que possamos continuar vendendo produtos para você.
                            </p>
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