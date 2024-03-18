<?php

/** @var yii\web\View $this */
/** @var string $content */

use yii\bootstrap5\ActiveForm;
use yii\captcha\Captcha;
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

$this->registerLinkTag(['rel' => 'stylesheet', 'type' => 'css', 'href' => Yii::getAlias('/../css/home/style.css')]);
$this->registerCssFile("/../css/home/style.css");
$this->registerCssFile("@web/css/home/style.css");


$this->title = 'Foot Swear';
?>



<?php
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);

$baseUrl = Yii::$app->request->baseUrl;
$cs = Yii::$app->view;
$cs->registerCssFile($baseUrl . '/css/home/style.css', [
    'depends' => [\yii\web\JqueryAsset::className()]
]);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<link rel="stylesheet" href="/foot-swear/web/css/home/style.css">
<link rel="stylesheet" href="css/home/style.css">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="js/home.js"></script>

<body>
    <?php $this->beginBody() ?>

    <main class="site-index">
        <!-- Hero -->
        <a href="#" class="ref-hero">
            <section class="hero">
                <div class="hero-container">
                    <!-- Hero Content -->
                    <div class="hero-content">
                        <div class="hero-title">
                            <p>Equipamento de Portugal</p>
                        </div>
                        <div class="hero-text">
                            Excelência em Campo, Orgulho Nacional
                            Descubra a Vanguarda do Equipamento de Futebol Português
                        </div>
                        <a href="#" class="view-more">
                            Descobre mais
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </a>
                    </div>
                    <!-- End Hero Content -->

                    <!-- Hero Image -->
                    <div class="hero-image">
                        <a href="#">
                            <img src="images/products/camisolas/selecao/portugal/home_1.png" alt="Camisola Selecao">
                        </a>
                    </div>
                    <!-- End Hero Image -->
                </div>
            </section>
        </a>
        <!-- End Hero -->

        <!-- Content Card -->
        <div class="content-card-stg">
            <!-- Card -->
            <div class="card-stg">
                <a href="http://localhost/wd-part-3-group-20/foot-swear/web/site/store">
                    <div class="icon-stg">
                        <img src="images/products/camisolas/selecao/portugal/home_1.png" class="c-img-stg">
                    </div>
                    <p class="c-title-stg">Camisolas</p>
                    <p class="c-text-stg">Basta variedade de camisolas de diferentes ligas e selecoes</p>
                </a>
            </div>
            <!-- End card -->

            <!-- Card -->
            <div class="card-stg">
                <a href="http://localhost/wd-part-3-group-20/foot-swear/web/site/store">
                    <div class="icon-stg">
                        <img src="images/products/chuteiras/nike/Phantom-GX-Pro-Dynamic-Fit-FG-Turq-Black-Fuchsia-Dream-White_1.png" class="c-img-stg">
                    </div>
                    <p class="c-title-stg">Chuteiras</p>
                    <p class="c-text-stg">Chuteiras que levam a um novo patamar de habilidade</p>
                </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card-stg">
                <a href="http://localhost/wd-part-3-group-20/foot-swear/web/site/store">
                    <div class="icon-stg">
                        <img src="images/products/acessorios/bolas/adidas/adidas-oficial-hi-vision-euro24_1.png" class="c-img-stg">
                    </div>
                    <p class="c-title-stg">Acessorios</p>
                    <p class="c-text-stg">Melhora o seu aspeto a nivel profissional, com acessorios de alta qualidade
                    </p>
                </a>
            </div>
        </div>
        <!-- End Content Card -->

        <!-- Products -->
        <section id="menu" class="menu">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Nossos Produtos</h2>
                    <p>Descobre <span>Foot Swear</span></p>
                </div>

                <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#new-products">
                            <h4>Novos</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#popular-products">
                            <h4>Populares</h4>
                        </a><!-- End tab nav item -->
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#shirts">
                            <h4>Camisolas</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#boots">
                            <h4>Chuteiras</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#acessories">
                            <h4>Acessorios</h4>
                        </a>
                    </li><!-- End tab nav item -->
                </ul>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                    <div class="tab-pane fade active show" id="new-products">
                        <div class="tab-header text-center">
                            <h3>Novos</h3>
                        </div>
                        <div class="row gy-5">
                            <div class="col-lg-4 menu-item">
                                <a href="#" class="glightbox">
                                    <img src="images/products/camisolas/selecao/portugal/home_1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Camisola Selecao</h4>
                                <p class="menu-sub-title">Portugal</p>
                                <p class="price">$59,99</p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="#" class="glightbox">
                                    <img src="images/products/camisolas/selecao/portugal/alternativo_1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Camisola Selecao (Alternativo)</h4>
                                <p class="menu-sub-title">Portugal</p>
                                <p class="price">$59,99</p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="#" class="glightbox">
                                    <img src="images/products/chuteiras/new-balance/Furon-V7 Pro-FG_1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Chuteiras</h4>
                                <p class="menu-sub-title">New Balance Furon V7 Pro FG</p>
                                <p class="price">$149,99</p>
                            </div><!-- Menu Item -->
                        </div>
                    </div>
                    <!-- End Novos Content -->

                    <div class="tab-pane fade" id="popular-products">
                        <div class="tab-header text-center">
                            <h3>Populares</h3>
                        </div>
                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="#" class="glightbox">
                                    <img src="images/products/camisolas/selecao/argentina/home_1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Camisola Selecao</h4>
                                <p class="menu-sub-title">Argentina</p>
                                <p class="price">$59,99</p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="#" class="glightbox">
                                    <img src="images/products/camisolas/selecao/portugal/home_1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Camisola Selecao</h4>
                                <p class="menu-sub-title">Portugal</p>
                                <p class="price">$59,99</p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="#" class="glightbox">
                                    <img src="images/products/chuteiras/nike/Phantom-GX-Pro-Dynamic-Fit-FG-Red_1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Chuteiras</h4>
                                <p class="menu-sub-title">Nike Phantom GX Pro Dynamic Fit FG</p>
                                <p class="price">$119,99</p>
                            </div><!-- Menu Item -->
                        </div>
                    </div>
                    <!-- End Populares Content -->

                    <div class="tab-pane fade" id="shirts">

                        <div class="tab-header text-center">
                            <h3>Camisolas</h3>
                        </div>
                        <div class="row gy-5">
                            <div class="col-lg-4 menu-item">
                                <a href="#" class="glightbox">
                                    <img src="images/products/camisolas/selecao/portugal/home_1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Camisola Selecao</h4>
                                <p class="menu-sub-title">Portugal</p>
                                <p class="price">$59,99</p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="#" class="glightbox">
                                    <img src="images/products/camisolas/selecao/portugal/alternativo_1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Camisola Selecao (Alternativo)</h4>
                                <p class="menu-sub-title">Portugal</p>
                                <p class="price">$59,99</p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="#" class="glightbox">
                                    <img src="images/products/camisolas/selecao/argentina/home_1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Camisola Selecao</h4>
                                <p class="menu-sub-title">Argentina</p>
                                <p class="price">$59,99</p>
                            </div><!-- Menu Item -->
                        </div>
                    </div>
                    <!-- End Camisolas Content -->

                    <div class="tab-pane fade" id="boots">
                        <div class="tab-header text-center">
                            <h3>Chuteiras</h3>
                        </div>
                        <div class="row gy-5">
                            <div class="col-lg-4 menu-item">
                                <a href="#" class="glightbox">
                                    <img src="images/products/chuteiras/new-balance/Furon-V7 Pro-FG_1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Chuteiras</h4>
                                <p class="menu-sub-title">New Balance Furon V7 Pro FG</p>
                                <p class="price">$149,99</p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="#" class="glightbox">
                                    <img src="images/products/chuteiras/nike/Phantom-GX-Pro-Dynamic-Fit-FG-Red_1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Chuteiras</h4>
                                <p class="menu-sub-title">Nike Phantom GX Pro Dynamic Fit FG</p>
                                <p class="price">$119,99</p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="#" class="glightbox">
                                    <img src="images/products/chuteiras/adidas/x-crazyfast-3-ll-fg_1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Chuteiras</h4>
                                <p class="menu-sub-title">Adidas X Crazyfast.3 LL FG</p>
                                <p class="price">$79,99</p>
                            </div><!-- Menu Item -->
                        </div>
                    </div>
                    <!-- End Chuterias Content -->

                    <div class="tab-pane fade" id="acessories">
                        <div class="tab-header text-center">
                            <h3>Acessorios</h3>
                        </div>
                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="http://localhost/wd-part-3-group-20/foot-swear/web/site/store" class="glightbox">
                                    <img src="images/products/acessorios/bolas/adidas/adidas-oficial-hi-vision-euro24_1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Bolas de Futebol</h4>
                                <p class="menu-sub-title">Adidas Oficial Hi Vision Euro24</p>
                                <p class="price">$149,99</p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="http://localhost/wd-part-3-group-20/foot-swear/web/site/store" class="glightbox">
                                    <img src="images/products/acessorios/caneleiras/nike/nike-j-guard-ce_1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Caneleiras</h4>
                                <p class="menu-sub-title">Nike J Guard-Ce</p>
                                <p class="price">$29,99</p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="http://localhost/wd-part-3-group-20/foot-swear/web/site/store" class="glightbox">
                                    <img src="images/products/acessorios/luvas/puma/puma-future-ultimate-nc_1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Luvas</h4>
                                <p class="menu-sub-title">Puma Future Ultimate NC</p>
                                <p class="price">$99,99</p>
                            </div><!-- Menu Item -->
                        </div>
                    </div>
                    <!-- End Acessorios Content -->
                </div>
            </div>
        </section>
        <!-- End Menu Section -->

        <!-- Banner Section -->
        <section class="banner">
            <div class="container-acessorios">
                <div id="slide">
                    <div class="acessorios-item" style="background-image: url(images/home/kit.jpg);">
                        <div class="acessorios-content">
                            <div class="name">Equipamentos</div>
                            <div class="des">Veste para sentir mais emoção</div>
                            <a href="#">
                                <button>Descobre mais</button>
                            </a>
                        </div>
                    </div>
                    <div class="acessorios-item" style="background-image: url(images/home/caneleiras.jpg);">
                        <div class="acessorios-content">
                            <div class="name">Caneleiras</div>
                            <div class="des">Protega-se para futuras lesões</div>
                            <a href="#">
                                <button>Descobre mais</button>
                            </a>
                        </div>
                    </div>
                    <div class="acessorios-item" style="background-image: url(images/home/bola.jpg);">
                        <div class="acessorios-content">
                            <div class="name">Bolas</div>
                            <div class="des">Liberte o jogador que há em si</div>
                            <a href="#">
                                <button>Descobre mais</button>
                            </a>
                        </div>
                    </div>
                    <div class="acessorios-item" style="background-image: url(images/home/chuteiras.jpg);">
                        <div class="acessorios-content">
                            <div class="name">Chuteiras</div>
                            <div class="des">Até faz curva</div>
                            <a href="#">
                                <button>Descobre mais</button>
                            </a>
                        </div>
                    </div>
                    <div class="acessorios-item" style="background-image: url(images/home/luvas.jpg);">
                        <div class="acessorios-content">
                            <div class="name">Luvas</div>
                            <div class="des">Parece fácil defender os remates</div>
                            <a href="#">
                                <button>Descobre mais</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Section -->
    </main>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>