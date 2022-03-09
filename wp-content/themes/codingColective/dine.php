<?php /* Template Name: Dine Page */ ?>

<?php get_header() ?>
<div class="container">
    <div class="row dine-head-container mt-5">
        <div class="col-md-6">
            <div class="dine-head-left-content position-relative">
                <img class="dine-img-vector img-fluid" src="http://localhost:8888/wordpress/images/Vector.png" style="
    width: 13em;
">
                <h1 class="dine-title">A happy tummy<br>starts here</h1>
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <div class="text-center dine-img-1 position-absolute">
                <img class="dine-img-vector img-fluid" src="http://localhost:8888/wordpress/images/dine/img1.png">
                <p>Baker's Brew</p>
            </div>
            <div class="text-center dine-img-2 position-absolute">
                <img class="dine-img-vector img-fluid" src="http://localhost:8888/wordpress/images/dine/img2.png">
                <p>Henri Charpentier</p>
            </div>
            <div class="text-center dine-img-3 position-absolute">
                <img class="dine-img-vector img-fluid" src="http://localhost:8888/wordpress/images/dine/img3.png">
                <p>Awfully Chocolate Café</p>
            </div>
            <div class="text-center dine-img-4 position-absolute">
                <img class="dine-img-vector img-fluid" src="http://localhost:8888/wordpress/images/dine/img4.png">
                <p>The Dark Gallery</p>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
<style>
    h1.dine-title {
        font-size: 2em;
        line-height: initial;
        position: absolute;
        top: 2em;
        left: 2em;
    }

    .row.dine-head-container {
        height: 37em;
    }

    .dine-img-1.position-absolute {
        top: 0em;
        left: 9em;
        width: 10em;
    }

    .dine-img-2.position-absolute {
        left: 19em;
        top: 3em;
        width: 15em;
    }

    .dine-img-3.position-absolute {
        top: 12em;
        left: 0em;
        width: 14em;
    }

    .dine-img-4.position-absolute {
        top: 20em;
        left: 14em;
        width: 12em;
    }

    .dine-head-left-content.position-relative {
        margin-top: 7em;
        margin-left: 5em;
    }
</style>