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
        <div class="container cc651628470">
            <div class="row cc3088461771">
                <div class="col">
                    <img class="cc2406058084" src="http://localhost:8888/wordpress/images/img1.png" />
                    <img class="cc2568338324" src="http://localhost:8888/wordpress/images/img3.png" />
                    <img class="cc4003000486" src="http://localhost:8888/wordpress/images/img2.png" />
                    <img class="cc1062774977" src="http://localhost:8888/wordpress/images/group2.svg" />
                </div>
                <div class="cc112">
                    <div class="cc52">Singapore's Leading</div>
                    <div class="cc231">Consumer Electronics,</div>
                    <div> IT & Furniture Store</div>
                </div>
            </div>
            <img class="cc63" src="http://localhost:8888/wordpress/images/ccc.svg" />



            <img class="cc188" src="http://localhost:8888/wordpress/images/explore-more.svg">
            <img class="cc2766663593" src="http://localhost:8888/wordpress/images/321.svg" />
            <img class="cc2291668064" src="http://localhost:8888/wordpress/images/vector1.svg" />
        </div>
    <?php endif; ?>



    <?php if (str_contains($_SERVER['REQUEST_URI'], 'sub-home')) : ?>
        <div class="container cc3976524413"></div>
    <?php endif; ?>
    <footer>

    </footer>

</body>

<script>
    $(".cc188").click(function(e) {
        e.preventDefault();
        $(".cc1082021360").css("max-width", "100%");
        $(".cc1082021360").css("min-width", "100%");
        $(".cc1062774977").animate({
            top: '0rem',
            left: '63rem'
        });

        $(".cc2568338324").animate({
            top: '0rem',
            left: '0rem'
        });

    });
</script>

</html>