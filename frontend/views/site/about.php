<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Cine suntem:';
//$this->params['breadcrumbs'][] = $this->title;
?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="site-about">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="row">

        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Blue">
                <h2>
                    <span>Dr. Teodor GEORGESCU</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                    </strong>
                </h2>

                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive"
                             src="http://www.parodontologie.ro/files/echipa/10511495_673568502721673_1721636451242847073_o.jpg">
                    </div>
                    <div class="mc-description">
                        Doctorul Teodor GEORGESCU are o experiență profesională remarcabilă, de peste 40 de ani. Acesta
                        este
                        doctor în științe medicale și șef de disciplină la Facultatea „Titu Maiorescu”.

                        Totodată, este inventatorul unei metode de tratament al parodontopatiilor marginale cronice și
                        autor
                        a diverse studii de specialitate.
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="mc-footer">
                    <?= Html::a("Publucatii", ['publicatii'], [
                        'class' => "btn btn-lg btn-hero",
                        'style' => "margin-top: 3px;"
                    ]) ?>

                </div>
            </article>
        </div>

        <div class=" col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Blue">
                <h2>
                    <span>Dr. Carmen GEORGESCU</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                    </strong>
                </h2>

                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive"
                             src="http://www.parodontologie.ro/images/carmen_georgescu.jpg">
                    </div>
                    <div class="mc-description">
                        Doctor Carmen Georgescu este unul din cei mai buni stomatologi de la noi din țară. Datorită
                        experienței profesionale vaste, dar și a personalității carismatice, aceasta a fost invitată în
                        repetate rânduri în cadrul unor emisiuni televizate precum „Neața cu Răzvan și Dani”. De
                        asemenea,
                        este co-autoarea mai multor studii de specialitate.
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="mc-footer">

                </div>
            </article>
        </div>

        <div class=" col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Blue">
                <h2>
                    <span>Dr. Liliana Osain-Georgescu</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                    </strong>
                </h2>

                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive"
                             src="http://www.parodontologie.ro/files/liliana_georgescu.jpg">
                    </div>
                    <div class="mc-description">
                        Doctor Liliana Osain-Georgescu a moștenit pasiunea pentru profesia de stomatolog de la tatăl
                        acesteia, Dr. Teodor Georgescu. Atunci când nu lucrează la Cabinetul de pe Berzei, Dr. Liliana
                        Osain – Georgescu este medic stomatolog și la o școală bucureșteană, unde profesează cu plăcere,
                        fiind specializată pe partea de stomatologie pediatrică.
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="mc-footer">

                </div>
            </article>
        </div>

        <div class=" col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Blue">
                <h2>
                    <span>Mihaela Ștefănescu</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                    </strong>
                </h2>

                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive"
                             src="http://www.parodontologie.ro/images/10490095_674296175982239_3884196809037158640_o.jpg">
                    </div>
                    <div class="mc-description">
                        Mihaela Ștefănescu este vocea caldă care răspunde la telefon, dar și fața zâmbitoare care
                        întâmpină pacienții la intrarea în cabinet. În același timp, este ajutorul de încredere al
                        doctorilor Georgescu.
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="mc-footer">

                </div>
            </article>
        </div>

        <div class=" col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Blue">
                <h2>
                    <span>Florin Gebescu</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                    </strong>
                </h2>

                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive"
                             src="http://www.parodontologie.ro/images/10373068_686137291464794_4184693631454564466_o.jpg">
                    </div>
                    <div class="mc-description">
                        Florin Gebescu este tehnician dentar cu o vastă experiență. Colaborarea acestuia cu doctorii
                        Georgescu a început în urmă cu 20 de ani și continuă, cu succes, până în ziua de astăzi. De-a
                        lungul timpului, au existat numeroși pacienți care au revenit în mod special la cabinetul din
                        Berzei nr. 33 pentru a beneficia de lucrările dentare executate de acesta.
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="mc-footer">

                </div>
            </article>
        </div>

    </div>
<?php
$this->registerJS('
$(function() {
        $(".material-card >.mc-btn-action").click(function () {
            var card = $(this).parent(".material-card");
            var icon = $(this).children("i");
            icon.addClass("fa-spin-fast");

            if (card.hasClass("mc-active")) {
                card.removeClass("mc-active");

                window.setTimeout(function() {
                    icon
                        .removeClass("fa-arrow-left")
                        .removeClass("fa-spin-fast")
                        .addClass("fa-bars");

                }, 800);
            } else {
                card.addClass("mc-active");

                window.setTimeout(function() {
                    icon
                        .removeClass("fa-bars")
                        .removeClass("fa-spin-fast")
                        .addClass("fa-arrow-left");

                }, 800);
            }
        });
    });
');