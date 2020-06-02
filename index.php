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
                        <h5>Ваш пол</h5>
                        <br/>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="male" name="male" checked>
                            <label class="custom-control-label" for="male">Мужской</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="female" name="male">
                            <label class="custom-control-label" for="female">Женский</label>
                        </div>
                    </div>
                    <div class="swiper-slide">Ваш возраст</div>
                    <div class="swiper-slide">Какой критерий важен для Вас при выборе наушников?</div>
                    </div>
                </div>
                <button type="button" class="btn btn-success next-question">Следующий вопрос</button>
                </div>
            </div>
        </div>

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>