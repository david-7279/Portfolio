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

$this->registerCssFile("/../css/store.css");
$this->registerCssFile("@web/css/store.css");

$this->title = 'Loja | Foot Swear';
$this->params['breadcrumbs'][] = 'Loja';
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="/../css/store.css">

<!-- isotope plugin -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

<script src="js/filters.js"></script>
<script src="js/price-range.js"></script>

<?php 
    $this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
    $this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
    $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
    
    $baseUrl = Yii::$app->request->baseUrl;
    $cs = Yii::$app->view;
    $cs->registerCssFile($baseUrl . '/../css/store.css', [
        'depends' => [\yii\web\JqueryAsset::className()]
    ]);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<body>
    <?php $this->beginBody() ?>

    <main>
        <div class="container py-5">
            <div class="row text-center mb-5">
                <div class="col-lg-7 mx-auto">
                    <h1 class="product-title">Produtos</h1>
                    <p class="product-subtitle">Descobre <span>Foot Swear</span></p>
                </div>
            </div>
            <!-- End -->

            <aside>
                <div class="fm-search">
                    <div class="mb-0">
                        <div class="input-group">
                            <span class="input-group-text ">
                                <i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" id="search-item" onkeyup="search1(), search2()" placeholder="Procurar Produto">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="my-3">Categorias</h5>
                        <div class="fm-menu">
                            <div class="row filter-button-group">
                                <button type="button" data-filter=".shirts" class="btn btn-primary mx-1">Camisolas</button>
                                <button type="button" data-filter=".boots" class="btn btn-primary mx-1">Chuteiras</button>
                                <button type="button" data-filter=".acessories" class="btn btn-primary mx-1">Acessórios</button>
                                <button type="button" data-filter="*" class="btn btn-primary all">Todas</button>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="card card-price">
                    <div class="card-body card-body-price">
                        <div class="price-card">
                            <h2>Preço</h2>
                            <input type="range" class="form-range" min="0" max="300" step="1" id="price-range">
                            <p id="price-display"></p>
                        </div>
                    </div>
                </div>
            </aside>

            <div class="row">
                <div class="col-7 mx-auto">
                    <div id="product-list">
                        
                        <a href="#" class="stg-card shirts">
                            <ul class="content">
                                <div class="card-stg">
                                    <!-- list group item-->
                                    <li class="list-group-item">
                                        <!-- Custom content-->
                                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                            <div class="media-body order-2 order-lg-1">
                                                <h5 class="p-title mt-0 mb-2">Camisola Selecao</h5>
                                                <p class="p-subtitle mb-0">Portugal</p>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <h6 class="p-price my-2">$59,99</h6>
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="ratings">
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="images/products/camisolas/selecao/portugal/home_1.png" width="200" class="ml-lg-5">
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </a>
                        <!-- End -->


                        <a href="#" class="stg-card shirts">
                            <ul class="content">
                                <div class="card-stg">
                                    <!-- list group item-->
                                    <li class="list-group-item">
                                        <!-- Custom content-->
                                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                            <div class="media-body order-2 order-lg-1">
                                                <h5 class="p-title mt-0 mb-2">Camisola Selecao</h5>
                                                <p class="p-subtitle mb-0">Argentina</p>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <h6 class="p-price my-2">$59,99</h6>
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="ratings">
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="/images/products/camisolas/selecao/argentina/home_1.png" width="200" class="ml-lg-5">
                                            </div>
                                            <!-- End Argentina -->
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </a>

                        <a href="#" class="stg-card shirts">
                            <ul class="content">
                                <div class="card-stg">
                                    <!-- list group item-->
                                    <li class="list-group-item">
                                        <!-- Custom content-->
                                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                            <div class="media-body order-2 order-lg-1">
                                                <h5 class="p-title mt-0 mb-2">Camisola Selecao</h5>
                                                <p class="p-subtitle mb-0">Portugal (Alternativo)</p>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <h6 class="p-price my-2">$59,99</h6>
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="ratings">
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="images/products/camisolas/selecao/portugal/alternativo_1.png" width="200" class="ml-lg-5">
                                            </div>
                                            <!-- End Portugal (Alternativo) -->
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </a>

                        <a href="#" class="stg-card boots">
                            <ul class="content">
                                <div class="card-stg">
                                    <!-- list group item-->
                                    <li class="list-group-item">
                                        <!-- Custom content-->
                                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                            <div class="media-body order-2 order-lg-1">
                                                <h5 class="p-title mt-0 mb-2">Chuteiras</h5>
                                                <p class="p-subtitle mb-0">New Balance Furon V7 Pro FG</p>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <h6 class="p-price my-2">$149,99</h6>
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="ratings">
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="images/products/chuteiras/new-balance/Furon-V7 Pro-FG_1.png" width="200" class="ml-lg-5">
                                            </div>
                                            <!-- End New Balance Furon V7 Pro FG -->
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </a>

                        <a href="#" class="stg-card boots">
                            <ul class="content">
                                <div class="card-stg">
                                    <!-- list group item-->
                                    <li class="list-group-item">
                                        <!-- Custom content-->
                                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                            <div class="media-body order-2 order-lg-1">
                                                <h5 class="p-title mt-0 mb-2">Chuteiras</h5>
                                                <p class="p-subtitle mb-0">Nike Phantom GX Pro Dynamic Fit FG</p>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <h6 class="p-price my-2">$119,99</h6>
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="ratings">
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="images/products/chuteiras/nike/Phantom-GX-Pro-Dynamic-Fit-FG-Red_1.png" width="200" class="ml-lg-5">
                                            </div>
                                            <!-- End Nike Phantom GX Pro Dynamic Fit FG -->
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </a>

                        <a href="#" class="stg-card boots">
                            <ul class="content">
                                <div class="card-stg">
                                    <!-- list group item-->
                                    <li class="list-group-item">
                                        <!-- Custom content-->
                                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                            <div class="media-body order-2 order-lg-1">
                                                <h5 class="p-title mt-0 mb-2">Chuteiras</h5>
                                                <p class="p-subtitle mb-0">Adidas X Crazyfast.3 LL FG</p>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <h6 class="p-price my-2">$79,99</h6>
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="ratings">
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="images/products/chuteiras/adidas/x-crazyfast-3-ll-fg_1.png" width="200" class="ml-lg-5">
                                            </div>
                                            <!-- End Adidas X Crazyfast.3 LL FG< -->
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </a>

                        <a href="#" class="stg-card acessories">
                            <ul class="content">
                                <div class="card-stg">
                                    <!-- list group item-->
                                    <li class="list-group-item">
                                        <!-- Custom content-->
                                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                            <div class="media-body order-2 order-lg-1">
                                                <h5 class="p-title mt-0 mb-2">Acessorios - Bolas</h5>
                                                <p class="p-subtitle mb-0">Adidas Oficial Hi Vision Euro24</p>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <h6 class="p-price my-2">$149,99</h6>
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="ratings">
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="images/products/acessorios/bolas/adidas/adidas-oficial-hi-vision-euro24_1.png" width="200" class="ml-lg-5">
                                            </div>
                                            <!-- End Adidas Oficial Hi Vision Euro24 -->
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </a>

                        <a href="#" class="stg-card acessories">
                            <ul class="content">
                                <div class="card-stg">
                                    <!-- list group item-->
                                    <li class="list-group-item">
                                        <!-- Custom content-->
                                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                            <div class="media-body order-2 order-lg-1">
                                                <h5 class="p-title mt-0 mb-2">Acessorios - Caneleiras</h5>
                                                <p class="p-subtitle mb-0">Nike J Guard-Ce</p>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <h6 class="p-price my-2">$29,99</h6>
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="ratings">
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="images/products/acessorios/caneleiras/nike/nike-j-guard-ce_1.png" width="200" class="ml-lg-5">
                                            </div>
                                            <!-- End Adidas Nike J Guard-Ce -->
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </a>

                        <a href="#" class="stg-card acessories">
                            <ul class="content">
                                <div class="card-stg">
                                    <!-- list group item-->
                                    <li class="list-group-item">
                                        <!-- Custom content-->
                                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                            <div class="media-body order-2 order-lg-1">
                                                <h5 class="p-title mt-0 mb-2">Acessorios - Luvas</h5>
                                                <p class="p-subtitle mb-0">Puma Future Ultimate NC</p>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <h6 class="p-price my-2">$99,99</h6>
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="ratings">
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="images/products/acessorios/luvas/puma/puma-future-ultimate-nc_1.png" width="200" class="ml-lg-5">
                                            </div>
                                            <!-- End Puma Future Ultimate NC -->
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <?php $this->endBody() ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

</html>
<?php $this->endPage() ?>