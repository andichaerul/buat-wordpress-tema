<?php /* Template Name: Login Page */ ?>
<?php get_header() ?>
<section class="section">
    <div class="container mt-5" style="padding: 6em;">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

                <div class="card card-primary">
                    <!-- <div class="card-header">
                        <h4 class="text-center">Login</h4>
                    </div> -->

                    <div class="card-body">
                        <form method="POST" action="#" class="needs-validation" novalidate="">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" placeholder="Email" class="form-control" name="email" tabindex="1" required autofocus>
                                <div class="invalid-feedback">
                                    Please fill in your email
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Password</label>
                                </div>
                                <input id="password" placeholder="Password" type="password" class="form-control" name="password" tabindex="2" required>
                                <div class="invalid-feedback">
                                    please fill in your password
                                </div>
                            </div>

                            <div class="form-group mt-5">
                                <button type="submit" class="btn btn-primary btn-lg btn-block w-100" tabindex="4" style="background: #ffcb05;border-color: #ffcb05;">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>