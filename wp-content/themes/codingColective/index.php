<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-sm">
        <div class="container">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="#">Logo</a>

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">SHOP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">DINE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">HAPPENINGS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">EXPLORE COURTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MEDIA</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php if (str_contains($_SERVER['REQUEST_URI'], 'home')) : ?>
        <div class="container cc1821494875">
            <div class="row cc1608512516"></div>
        </div>
        <!-- <img class="cc63" src="http://localhost:8888/wordpress/images/ccc.svg" /> -->
        <img class="img1" src="http://localhost:8888/wordpress/images/img1.png" />
        <img class="img3" src="http://localhost:8888/wordpress/images/img3.png" />
        <img class="img2" src="http://localhost:8888/wordpress/images/img2.png" />
        <img class="group2" src="http://localhost:8888/wordpress/images/group2.svg" />
        <!-- <div class="cc112">
            <div class="cc52">Singapore's Leading</div>
            <div class="cc231">Consumer Electronics,</div>
            <div> IT & Furniture Store</div>
        </div> -->
        <!-- <img class="cc188" src="http://localhost:8888/wordpress/images/explore-more.svg"> -->
        <!-- <img class="cc2766663593" src="http://localhost:8888/wordpress/images/321.svg" /> -->
        <!-- <img class="cc2291668064" src="http://localhost:8888/wordpress/images/vector1.svg" /> -->

    <?php endif; ?>



    <?php if (str_contains($_SERVER['REQUEST_URI'], 'sub-home')) : ?>
        <div class="container cc3976524413"></div>
    <?php endif; ?>
    <footer>

    </footer>

</body>

<script>
    var current_width = $(window).width();

    $(window).resize(function() {
        current_width = $(window).width();
        setPositionImg();
    });

    $(document).ready(function() {
        setPositionImg();
    });

    function setPositionImg() {
        $('.img1').css({
            'left': $(".container").offset().left,
            'position': 'absolute',
            'top': '120px',
            'width': current_width * 40 / 100
        });
        console.log($(".img1").offset().left);
        $('.img2').css({
            'width': $('.img1').width() * 40 / 100,
            'position': 'absolute',
            'top': $(".img1").offset().top + $('.img1').height() - ($('.img1').height() / 1.7),
            'left': $(".img1").offset().left + $('.img1').width() - ($('.img1').width() / 6)
        });

        $('.img3').css({
            'width': $('.img1').width() * 50 / 100,
            'position': 'absolute',
            'top': $(".img1").offset().top + $('.img1').height() - ($('.img1').height() / 3),
            'left': $(".img1").offset().left + $('.img1').width() - ($('.img1').width() / 1.6)
        });

        $('.group2').css({
            'width': $('.img1').width() * 30 / 100,
            'position': 'absolute',
            'top': $(".img1").offset().top + $('.img1').height() - ($('.img1').height() / 5),
            'left': $(".img1").offset().left + $('.img1').width() - ($('.img1').width() / 10)
        });
    }
</script>

</html>