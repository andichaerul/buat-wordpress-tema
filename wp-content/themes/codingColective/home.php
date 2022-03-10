<?php /* Template Name: Home Page */ ?>
<?php get_header() ?>
<img class="ccc" src="http://localhost:8888/wordpress/images/ccc.svg" />
<img class="img1" src="http://localhost:8888/wordpress/images/img1.png" />
<img class="img2" src="http://localhost:8888/wordpress/images/img2.png" />
<img class="img3" src="http://localhost:8888/wordpress/images/img3.png" />
<img class="group2" src="http://localhost:8888/wordpress/images/group2.svg" />
<div class="cc112">
    <div class="cc52">Singapore's Leading</div>
    <div class="cc231">Consumer Electronics,</div>
    <div> IT & Furniture Store</div>
</div>
<img class="explore" src="http://localhost:8888/wordpress/images/explore-more.svg">
<img class="cc321" src="http://localhost:8888/wordpress/images/321.svg" />
<img class="vector1" src="http://localhost:8888/wordpress/images/vector1.svg" />
<div class="ourTenant">Our Tenant</div>
<div class="ourTenantdesc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </div>
<script>
    $(document).ready(function() {
        $('.ourTenant').hide();
        $('.ourTenantdesc').hide();
        $('.explore').click(function(e) {
            e.preventDefault();
            $(".group2").animate({
                top: '8vw',
                left: '83vw',
            }, 1000);

            $(".img1").animate({
                // top: '8vw',
                left: '38vw',
            }, 1000);

            $(".img2").animate({
                top: '12vw',
                width: '28vw',
                left: '71vw',
            }, 1000);

            $(".img3").animate({
                left: '9vw',
                top: '12vw',
                width: '28vw',
            }, 1000);
            $('.ourTenant').fadeIn();
            $('.ourTenantdesc').fadeIn();

            $(".cc112").fadeOut();
            $(".ccc").fadeOut();
            $(".cc321").fadeOut();
            $(".vector1").fadeOut();
            $(".explore").fadeOut();
        });
    });

    $('.group2').click(function(e) {
        e.preventDefault();
        $(".img1").attr("style", "");
    });
</script>
<style>
    /*
Theme Name: Twenty Twenty
Theme URI: https://wordpress.org/themes/twentytwenty/
Author: the WordPress team
Author URI: https://wordpress.org/
Description: Our default theme for 2020 is designed to take full advantage of the flexibility of the block editor. Organizations and businesses have the ability to create dynamic landing pages with endless layouts using the group and column blocks. The centered content column and fine-tuned typography also makes it perfect for traditional blogs. Complete editor styles give you a good idea of what your content will look like, even before you publish. You can give your site a personal touch by changing the background colors and the accent color in the Customizer. The colors of all elements on your site are automatically calculated based on the colors you pick, ensuring a high, accessible color contrast for your visitors.
Tags: blog, one-column, custom-background, custom-colors, custom-logo, custom-menu, editor-style, featured-images, footer-widgets, full-width-template, rtl-language-support, sticky-post, theme-options, threaded-comments, translation-ready, block-styles, wide-blocks, accessibility-ready
Version: 1.3
Requires at least: 5.0
Tested up to: 5.4
Requires PHP: 7.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: twentytwenty
This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/

    @import url("http://fonts.googleapis.com/css?family=Lato:400,700");

    :root {
        --background-color-yellow: #ffc107;
        --text-color-1: white;
        --body-background-color: #005BAA;
        ;
    }

    body {
        background: var(--body-background-color);
        color: var(--text-color-1);
        font-family: 'Lato', sans-serif;
    }


    .cc52 {
        font-weight: bold;
    }

    .cc87 {
        text-align: right;
    }

    img.cc188 {
        width: 23%;
        position: absolute;
        right: 4rem;
        top: 20rem;
    }

    .cc54 {
        position: absolute;
        text-align: center;
        font-size: 2.5rem;
        line-height: initial;
        top: 8rem;
        right: 6rem;
    }

    img.cc63 {
        position: absolute;
        left: 37rem;
        width: 10%;
    }


    img.cc2766663593 {
        width: 19%;
        position: absolute;
        left: 0rem;
        bottom: 0;
    }

    .cc1082021360 {
        overflow: hidden;
        max-height: 39rem;
        min-height: 39rem;
    }

    img.cc1062774977 {
        position: absolute;
        /* left: 23em; */
        width: 12%;
        top: 26em;
    }

    .cc3612105092 {
        position: relative;
        max-height: 18rem;
        min-height: 18rem;
        margin-top: -12rem;
    }

    img.cc2291668064 {
        position: absolute;
        right: 0rem;
        width: 15%;
        bottom: 0;
    }

    .cc3976524413 {
        position: relative;
        width: 100%;
        height: 700px;
    }

    .cc1101706932 {
        position: relative;
        margin-top: 123px;
        height: 567px;
        overflow: hidden;
        border-color: white;
        /* border-style: solid; */
        border-width: 1px;
    }

    .cc651628470 {
        position: relative;
        width: 100%;
        overflow: hidden;
        height: 700px;
        /* margin-top: 114px; */
    }

    .row.cc3088461771 {
        margin-top: 120px;
    }

    .cc443035959 {
        position: relative;
        width: 100%;
        height: 700px;
    }

    html {
        zoom: 0.95;
    }

    img.dineImg1 {
        width: 15vw;
    }

    img.dineImg2 {
        width: 22vw;
        padding-top: 20px;
    }

    .parentDineImg1 {
        padding-left: 7vw;
    }

    .parentDineImg1 {
        text-align: center;
    }

    .parentDineImg2 {
        text-align: center;
    }

    .parentDineImg3 {
        text-align: center;
    }

    .parentDineImg4 {
        text-align: center;
    }

    img.dineImg3 {
        margin-top: -90px;
        margin-left: -60px;
        width: 25vw;
    }

    input.form-control.searchInput {
        background: #005baa;
        color: white;
        border-radius: 50px;
        margin-bottom: 4vw;
    }

    input.form-control.searchInput::placeholder {
        color: white;
    }

    select.form-control.selectCategory {
        border-radius: 50px;
    }

    select.form-control.selectLevel {
        border-radius: 50px;
    }

    .col-md-6.parentHappyTummy {
        padding-top: 8%;
        padding-left: 4%;
    }

    img.imgList {
        width: 100%;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
    }

    .row.listText {
        color: black;
        padding-left: 5px;
        padding-right: 5px;
    }

    .col.typeNameList {
        text-align: right;
    }

    .col.nameList {
        font-size: 25px;
        font-weight: bold;
    }

    .descList {
        color: black;
        padding-left: 5px;
    }

    .col-md-3.parentList {
        margin-bottom: 20px;
    }

    .card {
        border-radius: 30px;
    }

    .row.cardFooter {
        color: white;
    }

    .col.cardFooterText {
        background: #ffc106;
        margin-left: 70px;
        margin-right: 70px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    footer {
        background-color: #ffc106;
        padding: 60px;
    }

    .row.parentIconSosmed {
        text-align: center;
        margin-top: 12px;
    }

    .footerHeadMenu {
        font-size: 20px;
        margin-bottom: 12px;
    }

    .footerListMenu_ {
        font-size: 14px;
    }

    .col.logoFooter {
        font-size: 23px;
        margin-bottom: 12px;
        color: #005baa;
        font-weight: bolder;
    }

    input.form-control.inputScb {
        border-radius: 50px;
        float: left;
        width: 70%;
    }

    button.btn-primary.btnScb {
        margin-left: -40px;
        border-radius: 50px;
        height: 39px;
        padding-left: 20px;
        padding-right: 20px;
    }

    img.img1 {
        width: 32vw;
        position: absolute;
        left: 9.2vw;
        top: 120px;
    }

    img.img2 {
        width: 14vw;
        top: 250px;
        position: absolute;
        left: 31.3vw;
    }

    img.img3 {
        position: absolute;
        left: 16vw;
        top: 389px;
        width: 18vw;
    }

    img.group2 {
        position: absolute;
        left: 35vw;
        top: 437px;
        width: 13vw;
    }

    .cc112 {
        position: absolute;
        font-size: 3.5vw;
        line-height: initial;
        top: 150px;
        left: 61vw;
        text-align: right;
    }

    img.explore {
        top: 341px;
        position: absolute;
        width: 24vw;
        left: 68vw;
    }

    img.ccc {
        position: absolute;
        left: 50vw;
    }

    img.cc321 {
        position: absolute;
        left: 0;
        top: 44vw;
        width: 21vw;
    }

    img.vector1 {
        position: absolute;
        top: 50vw;
        left: 80vw;
    }

    .ourTenant {
        position: absolute;
        font-size: 5vw;
        top: 42vw;
        left: 42vw;
    }

    .ourTenantdesc {
        font-size: 1.3vw;
        line-height: initial;
        text-align: center;
        position: absolute;
        top: 51vw;
        width: 46vw;
        left: 31vw;
        height: 11vw;
    }

    .happyTummy {
        position: absolute;
        font-size: 3vw;
        line-height: initial;
        top: 14vw;
        font-weight: bold;
        left: 10vw;
    }

    img.ccc1 {
        position: absolute;
        left: 45vw;
        top: 17vw;
    }

    img.ccc2 {
        position: absolute;
        right: 0;
        top: 39vw;
    }

    img.dineImg4 {
        width: 15vw;
    }

    .parentFT {
        margin-top: 3em;
        position: relative;
    }

    .promotion {
        position: absolute;
        top: 34px;
        font-size: 4vw;
    }

    img.ccc5 {
        margin-left: 10vw;
    }

    .datePromotion {
        margin-top: 6vw;
        color: #ffcb05;
    }

    img.promotion-h-img {
        width: 38vw;
    }

    .parentImgPromotion {
        text-align: center;
        padding: 77px;
    }

    img.cardImgListPromotion {
        width: 100%;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
    }

    .cardTitlePromotion {
        font-size: 1em;
        color: black;
    }


    .cardTypePromotion {
        background: #ffc106;
        text-align: right;
        border-bottom-left-radius: 15px;
    }

    .card {
        overflow: hidden;
    }

    .groupCardContentPromotion {
        padding: 0.5em;
    }

    .dateCard {
        color: gray;
        font-size: 0.7em;
    }

    .subTitlePromotion {
        font-size: 1.2em;
        color: #ffc106;
    }

    .descPromotion_ {
        color: black;
        font-size: 0.8em;
    }

    footer {
        margin-top: 5vw;
    }
</style>