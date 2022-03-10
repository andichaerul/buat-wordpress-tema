<?php /* Template Name: Dine Page */ ?>

<?php get_header() ?>
<div class="container">
    <div class="row dine-head-container mt-5">
        <div class="col-md-6">
            <div class="dine-head-left-content position-relative">
                <img class="dine-img-vector img-fluid" src="http://localhost:8888/wordpress/images/Vector.png" style="width: 13em;">
                <h1 class="dine-title">A happy tummy<br>starts here</h1>
            </div>
        </div>
        <div class="col-md-6 position-relative mt-5">
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
    <div class="row mb-5 mt-5">
        <div class="col-md-4">
            <input type="text" class="form-control dine-search" placeholder="Seach">
        </div>
        <div class="col-md-4">
            <select class="form-control dine-select-category">
                <option disable>Select Category</option>
            </select>
        </div>
        <div class="col-md-4">
            <select class="form-control dine-select-level">
                <option disable>Select a Level</option>
            </select>
        </div>
    </div>

    <div class="row mt-5 mb-5">
        <?php for ($i = 0; $i < 12; $i++) :   ?>
            <div class="col-md-3">
                <div class="card mb-4 dine-list">
                    <img class="card-img-top position-relative" src="http://localhost:8888/wordpress/images/imgList1.png" alt="Card image cap">
                    <div class="card-body p-2">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="dine-title-card">B1</h5>
                            </div>
                            <div class="col-md-6">
                                <h6 class="dine-title2-card text-end">B1-K128</h6>
                            </div>
                        </div>
                        <p class="dine-card-text">Takeaway and Food Court</p>
                        <p class="dine-card-text1">365 Juices Bar</p>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
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

    input.form-control.dine-search {
        background: #005baa;
        border-radius: 2em;
    }

    select.form-control.dine-select-category {
        border-radius: 2em;
    }

    select.form-control.dine-select-level {
        border-radius: 2em;
    }

    .dine-list {
        color: black;
        border-radius: 2em;
        overflow: hidden;
    }

    p.dine-card-text1 {
        position: absolute;
        left: 3em;
        background: #ffcb05;
        right: 3em;
        bottom: -1em;
        text-align: center;
        border-top-right-radius: 1em;
        border-top-left-radius: 1em;
        color: white
    }
</style>