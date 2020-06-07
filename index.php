<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>SHOPER</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="img/icon/favicon.jpg">
</head>
    <body>
        <div class="quest container-fluid">
            <div class="row row-slider">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h5>Ваш пол</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="male" name="male" checked>
                                        <label class="custom-control-label" for="male">Мужской</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="female" name="male">
                                        <label class="custom-control-label" for="female">Женский</label>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="swiper-slide">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h5>Ваш возраст</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="before18" name="age" checked>
                                        <label class="custom-control-label" for="male">до 18 лет</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="before25" name="age">
                                        <label class="custom-control-label" for="before25">18-25 лет</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="before35" name="age">
                                        <label class="custom-control-label" for="before35">26-35 лет</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="before45" name="age">
                                        <label class="custom-control-label" for="before45">36-45 лет</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="before100" name="age">
                                        <label class="custom-control-label" for="before100">от 45 лет</label>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="swiper-slide">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h5>Какой критерий важен для Вас при выборе наушников?</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="property1" name="property" checked>
                                        <label class="custom-control-label" for="property1">Качество звука</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="property2" name="property">
                                        <label class="custom-control-label" for="property2">Громкость звука</label>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    </div>
                </div>
                <button type="button" class="btn btn-success next-question">Следующий вопрос</button>
                </div>
            </div>
        </div>

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/sweetalert.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>