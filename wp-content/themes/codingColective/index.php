<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    
    -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-sm ">
        <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="xcollapse xnavbar-collapse" id="navbarNav">
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
        </div>
    </nav>




    <?php if (str_contains($_SERVER['REQUEST_URI'], 'home')) : ?>
        <img class="ccc" src="http://localhost:8888/wordpress/images/ccc.svg" />
        <img class="img1" src="http://localhost:8888/wordpress/images/img1.png" />
        <img class="img3" src="http://localhost:8888/wordpress/images/img3.png" />
        <img class="img2" src="http://localhost:8888/wordpress/images/img2.png" />
        <img class="group2" src="http://localhost:8888/wordpress/images/group2.svg" />
        <div class="cc112">
            <div class="cc52">Singapore's Leading</div>
            <div class="cc231">Consumer Electronics,</div>
            <div> IT & Furniture Store</div>
        </div>
        <img class="explore" src="http://localhost:8888/wordpress/images/explore-more.svg">
        <img class="321" src="http://localhost:8888/wordpress/images/321.svg" />
        <img class="vector1" src="http://localhost:8888/wordpress/images/vector1.svg" />
    <?php endif; ?>
    <!-- DINE -->
    <?php if (str_contains($_SERVER['REQUEST_URI'], 'dine')) : ?>
        <br><br><br><br>
        <div class="container">
            <div class="row cc609023808">
                <div class="col-md-6 parentHappyTummy">
                    <img class="imgHappyTummy" src="http://localhost:8888/wordpress/images/vector2.svg" />
                    <div class="happyTummy">A happy tummy<br> starts here</div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 parentDineImg1">
                            <img class="dineImg1" src="http://localhost:8888/wordpress/images/dineImg1.png" />
                            Baker’s Brew
                        </div>
                        <div class="col-md-6 parentDineImg2">
                            <img class="dineImg2" src="http://localhost:8888/wordpress/images/dineImg2.png" />
                            Henri Charpentier
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 parentDineImg3">
                            <img class="dineImg3" src="http://localhost:8888/wordpress/images/dineImg3.png" />
                            Awfully Chocolate Café
                        </div>
                        <div class="col-md-6 parentDineImg4">
                            <img class="dineImg4" src="http://localhost:8888/wordpress/images/dineImg4.png" />
                            The Dark Gallery
                        </div>
                    </div>
                </div>
            </div>

            <br><br><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input class="form-control searchInput" type="text" class="form-control" placeholder="Search">
                    </div>
                </div>
                <div class="col-md-4">
                    <select class="form-control selectCategory">
                        <option>Select Category</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="form-control selectLevel">
                        <option>Select a Level</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <?php for ($i = 0; $i < 10; $i++) : ?>
                    <div class="col-md-3 parentList">
                        <div class="card">
                            <div class="row">
                                <div class="col">
                                    <img class="imgList" src="http://localhost:8888/wordpress/images/imgList1.png" />
                                </div>
                            </div>
                            <div class="row listText">
                                <div class="col nameList"><?php echo "B{$i}" ?></div>
                                <div class="col typeNameList"><?php echo "L{$i}-128" ?></div>
                            </div>
                            <div class="descList">Takeaway and Food Court</div>
                            <div class="row cardFooter">
                                <div class="col cardFooterText">365 Juices Bar</div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col logoFooter">
                        LOGO
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="footerHeadMenu">
                            Happenings
                        </div>
                        <div class="footerListMenu">
                            <div class="footerListMenu_">Promotion</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footerHeadMenu">
                            Services
                        </div>
                        <div class="footerListMenu_">Customer Services Counter</div>
                        <div class="footerListMenu_">Gift Voucher</div>
                        <div class="footerListMenu_">Parking</div>
                    </div>
                    <div class="col">
                        <div class="footerHeadMenu">
                            About Us
                        </div>
                        <div class="footerListMenu_">Store Directory</div>
                        <div class="footerListMenu_">Great Reward</div>
                        <div class="footerListMenu_">Getting Here</div>
                        <div class="footerListMenu_">Lease Enquiry</div>
                        <div class="footerListMenu_">Careers</div>
                        <div class="footerListMenu_">Allgreen Properties Limited</div>
                        <div class="footerListMenu_">Privacy Policy</div>
                    </div>
                    <div class="col">
                        <div class="footerHeadMenu">
                            Contact
                        </div>
                        <div class="footerListMenu_">1 Kim Seng Promenade, Singapore 237994</div>
                        <div class="footerListMenu_"> Open Daily:10am – 10pm</div>
                    </div>
                    <div class="col-3">
                        <div class="footerHeadMenu">
                            Stay Connected
                        </div>
                        <div class="footerListMenu_"> Subscribe for latest promotions, events and updates!</div>
                        <div class="footerListMenu_">
                            <input class="form-control inputScb" placeholder="Enter your email addres">
                            <button class="btn-primary btnScb">Subscribe</button>
                        </div>
                        <div class="footerListMenu_">
                            <div class="row parentIconSosmed">
                                <div class="col">
                                    <img class="iconSosmed" src="http://localhost:8888/wordpress/images/icon-sosmed/Frame.png" />
                                </div>
                                <div class="col">
                                    <img class="iconSosmed" src="http://localhost:8888/wordpress/images/icon-sosmed/Frame-1.png" />
                                </div>
                                <div class="col">
                                    <img class="iconSosmed" src="http://localhost:8888/wordpress/images/icon-sosmed/Frame-2.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    <?php endif; ?>
</body>

<?php if (str_contains($_SERVER['REQUEST_URI'], 'home')) : ?>
    <script>
        var current_width = $(window).width();
        var isSubMenu = 0;
        $('.explore').click(function(e) {
            isSubMenu = 1;
            e.preventDefault();
            $(".cc112").css({
                'visibility': 'hidden'
            });


            $(".group2").animate({
                'left': $('.cc112').offset().left + $('.cc112').width() / 1.5,
                'top': $('.cc112').offset().top
            });

            $(".img1").animate({
                // 'left': $('.base_ani2').offset().left,
                // 'width': $('.base_ani2').width()
            });

            // $(".img3").animate({
            //     'left': $('.base_ani1').offset().left,
            //     'width': $('.base_ani1').width() * 90 / 100,
            //     'top': $('.img1').offset().top
            // });

            // $(".img2").animate({
            //     'left': $('.base_ani3').offset().left,
            //     'width': $('.base_ani3').width() * 90 / 100,
            //     'top': $('.img1').offset().top
            // });

            $(".explore").animate({
                'left': $('.explore').offset().left + $('.explore').offset().left * 0.4,
                'top': $('.explore').offset().top + $('.explore').offset().top * 0.4
            })
            setTimeout(() => {
                $(".explore").hide();

            }, 200);




            $('.cc112').fadeOut();
            $('.ccc').fadeOut();
            $('.vector1').fadeOut();
            $('.321').fadeOut();
        });

        $(window).resize(function() {
            current_width = $(window).width();
            if (isSubMenu === 0) {
                setPositionImg();
            } else {
                setPositionImg1();
            }
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

            $('.ccc').css({
                'width': $('.img1').width() * 30 / 100,
                'position': 'absolute',
                'top': 0,
                'left': $(".img1").offset().left + $('.img1').width() - ($('.img1').width() / 10)
            });

            $('.explore').css({
                'width': $('.cc112').width() * 70 / 100,
                'position': 'absolute',
                'top': $(".cc112").offset().top + $('.cc112').height() / 0.8,
                'left': $(".cc112").offset().left + $('.cc112').width() / 3
            });


            $('.321').css({
                'width': $('.img1').width() * 50 / 100,
                'position': 'absolute',
                'top': $('.img3').height() + $('.img3').offset().top / 1.3,
                // 'top': $(document).height()
            });



            $('.vector1').css({
                'position': 'absolute',
                'width': $('.cc112').width() / 2,
                'left': $('.cc112').offset().left + $('.cc112').width() / 1.8,
                'top': $('.321').offset().top + $('.321').width() - $('.vector1').height() - 10,
            });
        }

        function setPositionImg1() {
            $('.group2').css({
                'left': current_width * 0.8
            });
        }
    </script>
<?php endif; ?>

<?php if (str_contains($_SERVER['REQUEST_URI'], 'dine')) : ?>
    <script>
        var current_width = $(window).width();
        $(document).ready(function() {
            // $('.imgHappyTummy').css({
            //     'padding': $('.parentHappyTummy').width() * 0.2,
            // });

            $('.happyTummy').css({
                'position': 'absolute',
                'width': $('.imgHappyTummy').width() + $('.imgHappyTummy').width() * 0.1,
                'left': $('.imgHappyTummy').offset().left + $('.imgHappyTummy').offset().left * 10 / 100,
                'top': $('.imgHappyTummy').offset().top - $('.imgHappyTummy').offset().top * 5 / 100,
                'font-size': '42px',
                'line-height': 'normal',
            });
        });
        // $(window).resize(function() {
        //     $('.happyTummy').css({
        //         'position': 'absolute',
        //         'width': $('.imgHappyTummy').width() + $('.imgHappyTummy').width() * 0.1,
        //         'left': $('.imgHappyTummy').offset().left + $('.imgHappyTummy').offset().left * 0.8,
        //         'top': $('.imgHappyTummy').offset().top + $('.imgHappyTummy').offset().top * 1,
        //         'font-size': '42px',
        //         'line-height': 'normal',
        //     });
        // })
    </script>
<?php endif; ?>

</html>