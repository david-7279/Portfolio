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

$this->title = 'Condições de Venda | Foot Swear';
$this->params['breadcrumbs'][] = 'Condições de Venda';
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
          <h2>Condições de Venda</h2>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-12 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fas fa-solid fa-handshake"></i>
              </div>
              <h3>Condições gerais de venda​</h3>
              <p>
                As presentes condições gerais de venda em baixo escritas regulam as relações contratuais entre qualquer cliente e a Foot Swear. As condições gerais de venda são as únicas aplicáveis e substituem todas as outras condições, exceto prévio acordo, expresso e por escrito. <br>
                A Foot Swear a pode pontualmente poderá modificar certas informações sobre as suas condições gerais. Considera-se que ao validar um pedido, o cliente está facilmente a aceitar as nossas condições gerais de venda. <br>
                Toda a cláusula que acompanhe um pedido do Cliente ou qualquer outro documento, que esteja em oposição com as presentes condições gerais, não será admitida pela Foot Swear.
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-12 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-solid fa-euro-sign"></i>
              </div>
              <h3>Preços</h3>
              <p>
                Os preços dos produtos apresentados para venda na Foot Swear, são faturados em euros (€) e incluem o IVA à taxa legal em vigor. <br>
                O preço de venda não é acumulável com qualquer campanha ativa no momento (cupões, códigos, descontos de parceiros, etc…). O abuso desta alínea poderá originar o cancelamento da sua encomenda.
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-12 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-brands fa-cc-mastercard"></i>
              </div>
              <h3>Condições de pagamento</h3>
              <p>
                Exceto nas condições especiais que devem ser fecho de um acordo prévio escrito, as condições de pagamento da Foot Swear são as seguintes: <br>

                <br>Na loja <br>
                Através de numerário.
                <br>Através de serviços de cartões VISA/MASTERCARD.
                <br>Crédito, através de pedido efetuado a entidades financeiras legalmente estabelecidas para esse efeito, no escrupuloso cumprimento do regime aplicável (Decreto – Lei n.º 359/91, de 21 de Setembro de 1991, Diretiva Comunitária n.º 90/88/CE, de 22 de Dezembro de 1988, Decreto – Lei n.º 101/2001, de 02 de Junho de 2001, – Decreto – Lei n.º 62/2006, de 03 de Maio de 2006). <br>

                <br>No website <br>
                Através de Referências Multibanco.
                <br>Através do serviço de pagamentos MBWay.
                <br>Através do serviço de pagamentos PayPal.
                <br>Através de serviço de cartões VISA/MASTERCARD.
                <br>Os pagamentos por cartão de crédito no site da Foot Swear, estão inseridos no sistema, que garante e protege o cliente de qualquer tipo de fraude bancária.
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-12 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-solid fa-boxes-stacked"></i>
              </div>
              <h3>Encomendas</h3>
              <p>
                Para maior comodidade dos clientes, a Foot Swear disponibiliza os seguintes meios para efetuar suas encomendas:
                Por escrito, via e-mail através do footswear@gmail.pt. <br>
                Através da página na Internet <a href="/index.html" class="ref-text">Foot Swear</a>, no caso de utilização da plataforma online da Foot Swear. <br>
                Pessoalmente, nas instalações da Foot Swear, situada em <a href="http://localhost/wd-part-3-group-20/foot-swear/web/site/contact" class="ref-text">Bragança</a>.
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-12 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-solid fa-truck"></i>
              </div>
              <h3>Condições de envio</h3>
              <p>
                Danos causados durante o transporte para a Fixngo são da responsabilidade do cliente. Nos procedimentos de entrega, o cliente destinatário não poderá proceder à abertura das embalagens sem a assinatura na lista do distribuidor em como as rececionou, no entanto poderá colocar uma nota na folha de assinatura, descrevendo em cada objeto qual o dano causado que verificou nas embalagens. <br>
                Caso contrário nada indicia que algum dano tenha ocorrido. <br>
                No caso de avarias, se a avaria reportada pelo cliente não se verificar, o(s) produto(s) será(ão) enviado(s) com os custos de envio a serem suportados pelo cliente.
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-12 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-solid fa-user-shield"></i>
              </div>
              <h3>Proteção de dados</h3>
              <p>
                Visualize nossa página de <a href="http://localhost/wd-part-3-group-20/foot-swear/web/site/terms" class="ref-text">Termos/Política de Privacidade</a> para estar a par sobre a proteção de dados. <br>
                Para mais informações <a href="http://localhost/wd-part-3-group-20/foot-swear/web/site/contact" class="ref-text">contacte-nos</a>.
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