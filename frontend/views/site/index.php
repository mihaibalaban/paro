<?php

/* @var $this yii\web\View */

use yii\bootstrap\Carousel;

$this->title = 'My Yii Application';
?>
<link href="https://file.myfontastic.com/oAnRr49LRSuj7cYjEYP7b9/icons.css" rel="stylesheet">

<div class="bannerHomePage">
    <?php
    echo Carousel::widget([
        'items' => [
            [
                'content' => '<img src="http://www.visitalanya.com/wp-content/uploads/2016/01/dentalcare-in-alanya.jpg"/>',
                'caption' => '<h1>I know, it is ugly...</h1><p>I have no ideea about beautiful, except me</p>',
                'options' => [
                    'style' => 'max-height: 400px;'
                ],
            ], [
                'content' => '<img src="http://www.dentalloungeuae.com/ressources/images/9a8a1ed20426.jpeg"/>',
                'caption' => '<h2>This is ugly too</h2><p>But me either</p>',
                'options' => [
                    'style' => 'max-height: 400px'
                ],
            ],
        ]
    ]);
    ?>
    <!--    <img class="responsiveImage" src="http://www.visitalanya.com/wp-content/uploads/2016/01/dentalcare-in-alanya.jpg"/>-->
</div>


<div class="container services">

    <div class="row">

        <div class="col-lg-4">

            <div class="icon-list-item">

                <div class="icon-list-icon">
                    <span class="icon icon-toothbraces"></span>
                </div>

                <div class="icon-list-content">
                    <h3 class="icon-list-title">Extractii 1 </h3>
                    <h5 class="icon-list-under">Lorem ipsum.</h5>
                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="icon-list-item">

                <div class="icon-list-icon">
                    <span class="icon icon-toothstop"></span>
                </div>

                <div class="icon-list-content">
                    <h3 class="icon-list-title">Extractii 2</h3>
                    <h5 class="icon-list-under">Lorem ipsum</h5>
                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="icon-list-item">

                <div class="icon-list-icon">
                    <span class="icon icon-toothimplant"></span>
                </div>

                <div class="icon-list-content">
                    <h3 class="icon-list-title">Extractii 3</h3>
                    <h5 class="icon-list-under">Another lorem ipsum.</h5>
                </div>

            </div>

        </div>

    </div>

    <div class="row">

        <div class="col-lg-4">

            <div class="icon-list-item">

                <div class="icon-list-icon">
                    <span class="icon icon-toothcheck"></span>
                </div>

                <div class="icon-list-content">
                    <h3 class="icon-list-title">Extractii 4</h3>
                    <h5 class="icon-list-under">this time is a bigger lorem ipsum.</h5>
                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="icon-list-item">

                <div class="icon-list-icon">
                    <span class="icon icon-toothsparkle"></span>
                </div>

                <div class="icon-list-content">
                    <h3 class="icon-list-title">Extractii 5</h3>
                    <h5 class="icon-list-under">it si 3 o'clock</h5>
                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="icon-list-item">

                <div class="icon-list-icon">
                    <span class="icon icon-toothcrack"></span>
                </div>

                <div class="icon-list-content">
                    <h3 class="icon-list-title">Extractii 6</h3>
                    <h5 class="icon-list-under">And the last one for tonight</h5>
                </div>

            </div>

        </div>

    </div>

</div>

<!-- Services section End -->

<div class="container-fluid contact-section">

    <div class="container">
        <div class="row">

            <div class="col-lg-5">

                <h2 class="contact-form-title">Contactare</h2>

                <div class="testimonial">
                    <p class="testimonial-text">"Aici va fi un text lung de descriere"</p>
                    <h4 class="testimonial-name">Jhon Doe, Pacient</h4>
                </div>
                <div class="testimonial">
                    <p class="testimonial-text">Aici va fi alt text lung de descriere a vaccinului</p>
                    <h4 class="testimonial-name">Donald Trumo, Pacient</h4>
                </div>

            </div>

            <div class="col-lg-6">
                <h2 class="contact-form-title">Programeaza-te</h2>
                <ul class="input-list style-1 clearfix">
                    <li>
                        <input type="text" placeholder="Please enter your name">
                    </li>
                    <li>
                        <input type="text" placeholder="Enter your email">
                    </li>
                    <li>
                        <input type="text" placeholder="Enter your phone number">
                    </li>
                </ul>
                <button type="button" class="btn btn-lg btn-hero contact-button">Trimite</button>
            </div>

        </div>
    </div>

</div>