<?php /* Template Name: Promotion Page */ ?>

<?php get_header() ?>

<?php if (is_active_sidebar('promotion-page')) : ?>
    <?php dynamic_sidebar('promotion-page') ?>
<?php endif; ?>

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-6 mt-5">
            <h1 class="mt-5 position-relative"><strong>Promotion</strong>
                <img class="position-absolute" src="<?php echo site_url() ?>/images/Vector.png" style="
                    left: 2em;
                    top: -1.2em;
                    z-index: -1;">
            </h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p style="color:#ffcb05"> 25 Feb 2022 - 06 Mar 2022</p>
            <h2>
                Chinese New Year 2022 Lucky Draw Winners
            </h2>
            <p>
                Congratulations to the winners of Chinese New Year 2022 Lucky Draw Winners! 1st Prize: Ogawa Genix, Hybrid Massage Chair worth $3,980 Kevin Fang XXXX3410 2nd Prize: Ogawa Estilo Prime X + OMG, Neck, Back and Foot Massager bundle worth $1,596 Doreen Seah XXXX4779 3rd Prize: Ogawa Omknee 2 (World’s First Detachable Foot & Knee Massager) worth…
            </p>
        </div>
        <div class="col-md-6 mt-5">
            <div class="promotion-img-feature">
                <?php the_post_thumbnail(); ?>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-4 promotion-menu-child">
            <div class="row">
                <div class="col-md-3">ALL</div>
                <div class="col-md-3">SHOP</div>
                <div class="col-md-3">DINE</div>
                <div class="col-md-3">MALL</div>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <?php for ($i = 0; $i < 12; $i++) :   ?>
            <div class="col-md-4">
                <a href="<?php echo site_url() ?>/promotion/hello-pos/">
                <div class="card mb-4 promotion-list">
                    <img class="card-img-top position-relative" src="<?php echo site_url() ?>/images/imgList1.png" alt="Card image cap">
                    <p class="promotion-list-label">Shop</p>
                    </img>
                    <div class="card-body position-relative">
                        <h5 class="card-title">Promotion <?php echo $i ?></h5>
                        <p class="promotion-list-date">9 Feb 2022 - 01 Mar 2022</p>
                        <h5 class="promotion-list-subtitle">Valentine’s Days Offers</h5>
                        <p class="promotion-list-subtitle-desc">20% OFF* Regular-priced items. 10% OFF* Nett-priced items.</p>
                        <p class="promotion-tag">#<?php echo $i ?></p>
                    </div>
                </div>
                </a>
            </div>
        <?php endfor; ?>
    </div>
    <?php // the_content() 
    ?>
</div>
<?php get_footer() ?>
<style>
    .promotion-menu-child {
        background-color: #ffcb05;
        border-bottom-right-radius: 40px;
        padding-right: 2em;
    }

    .promotion-menu-child::before {
        content: '-';
        position: absolute;
        left: 0;
        background: #ffcb05;
        color: #ffcb05;
        width: 20%;
        z-index: -1;
    }

    .promotion-list {
        color: black;
        border-radius: 34px;
    }

    p.promotion-tag {
        position: absolute;
        top: 0;
        right: 0em;
        width: 9em;
        text-align: center;
        background: #ffcb05;
        color: white;
        padding-right: 1em;
        border-bottom-left-radius: 20px;
    }

    img.card-img-top {
        border-top-left-radius: 34px;
        border-top-right-radius: 34px;
    }

    p.promotion-list-label {
        position: absolute;
        background: #ffcb05;
        padding: 0 2em 0 2em;
        left: 7em;
        right: 7em;
        text-align: center;
        color: white;
        border-bottom-left-radius: 1em;
        border-bottom-right-radius: 1em;
    }

    p.promotion-list-date {
        color: gray;
        margin-bottom: 0;
    }

    h5.promotion-list-subtitle {
        color: #ffcb05;
    }

    p.promotion-list-subtitle-desc {
        margin-bottom: 0;
        font-size: 0.8em;
    }
</style>