<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */
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

$this->registerCssFile("/../css/contact.css");
$this->registerCssFile("@web/css/contact.css");

$this->title = 'Contactos | Foot Swear';
$this->params['breadcrumbs'][] = 'Contactos';
?>

<?php
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);

$baseUrl = Yii::$app->request->baseUrl;
$cs = Yii::$app->view;
$cs->registerCssFile($baseUrl . '/../css/contact.css', [
    'depends' => [\yii\web\JqueryAsset::className()]
]);
?>

<link rel="stylesheet" href="/../css/contact.css">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

<!-- Bootstrap CSS v5.2.1 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<main>

    <!--Contact-->
    <section id="services" class="services sections-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Contactos</h2>
            </div>

            <!-- Mapa -->
            <div class="col-lg-12 col-md-12">
                <div class="web-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2974.433478540627!2d-6.7702873235192556!3d41.79742147046098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd3a4a1ee035460b%3A0x72fde1e40776b97b!2sESTIG!5e0!3m2!1sen!2spt!4v1700680327871!5m2!1sen!2spt" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- End Mapa -->

            <!-- Icon Social Media -->
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <div class="icon-social-media">
                        <a href="https://www.facebook.com/footswear/" target="_blank">
                            <i class="fas fa-brands fa-facebook"></i>
                        </a>

                        <a href="https://www.instagram.com/footswear/" target="_blank">
                            <i class="fas fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <!-- End Icon Social Media -->

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                    <!-- Morada -->
                    <div class="col-lg-3 col-md-10">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <span class="material-symbols-outlined">
                                    home
                                </span>
                            </div>
                            <h3>Morada</h3>
                            <p>
                                Instituto Politécnico de Bragança<br>
                                Campus de Santa Apolónia<br>
                                5300-253 BRAGANÇA<br>
                                Portugal
                            </p>
                        </div>
                    </div>
                    <!-- End Morada -->

                    <!-- Contacto -->
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <span class="material-symbols-outlined">
                                    call
                                </span>
                            </div>
                            <h3>Telefone-nos</h3>
                            <p>
                                Tel: (+351) 273 303 200<br>
                                Fax: (+351) 273 325 405
                            </p>
                        </div>
                    </div>
                    <!-- End Contacto -->

                    <!-- Email -->
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <span class="material-symbols-outlined">
                                    mail
                                </span>
                            </div>
                            <h3>Envia-nos email</h3>
                            <p>footswear@gmail.com</p>
                        </div>
                    </div>
                    <!-- End Email -->

                    <!-- Horario -->
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <span class="material-symbols-outlined">
                                    schedule
                                </span>
                            </div>
                            <h3>Horario</h3>
                            <p>
                                Segunda a Sexta <br> 09:00 - 18:00 <br>
                                Sabado a Domingo<br> 09:00 - 20:00 <br>
                            </p>
                        </div>
                    </div>
                    <!-- End Horario -->

            <!-- Form -->
            <div class="col-lg col-md-12">
              <div class="service-item position-relative">
                <form action="#" method="post" id="contact-form" class="email-form" data-aos="fade-up" data-aos-delay="200">
                  <div class="row gy-4">
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <div class="col-md-6">
                    <?= $form->field($model, 'name')->textInput(['placeholder' => 'Nome'])->label(false) ?>
                      <!--<input type="text" name="name" class="form-control" placeholder="Nome" required> -->
                    </div>

                    <div class="col-md-6 ">
                    <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email'])->label(false) ?>
                      <!-- <input type="email" class="form-control" name="email" placeholder="Email" required> -->
                    </div>

                    <div class="col-md-6">
                      <select class="form-select" name="servico" id="servico" required>
                        <option label="Selecionar o tipo de serviço pretendido"></option>
                        <option value="1">Informações</option>
                        <option value="2">Erro de Compra</option>
                        <option value="3">Erro de Envio</option>
                        <option value="4">Parcerias</option>
                        <option value="5">Outro</option>
                      </select>
                    </div>

                    <div class="col-md-6">
                      <input type="tel" class="form-control" name="" id="" placeholder="Número de Telemóvel" required>
                    </div>

                    <div class="col-md-12">
                      <?= $form->field($model, 'body')->textarea(['rows' => 6, 'placeholder' => 'Escreva aqui a sua mensagem' ])->label(false) ?>
                      
                      <!-- <textarea class="form-control" name="message" rows="6" placeholder="Mensagem" required></textarea> -->
                    </div>

                    <div class="col-md-12 text-center">
                      <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                      <!-- <button type="submit">Enviar</button> -->
                    </div>
                    <?php ActiveForm::end(); ?>
                  </div>
                </form>
                <!-- End Form -->
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- End Contact Section -->

</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

</html>
<?php $this->endPage() ?>