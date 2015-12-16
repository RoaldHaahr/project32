<?php $page="signup"; ?>
<?php include_once('header.php'); ?>
<?php include_once('nav.php'); ?>

    <section id="signup-page" class="page">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"></div>

                <div class="col-md-6">
                    <form id="signup-form" role="form" method="post" enctype="multipart/form-data" action="addUser.php">
                        <h2>Sign up</h2>
                        <p id="signup-email" class="form-group">
                            <input type="text" class="signup-field form-control" name="username" placeholder="Your email" autofocus>
                        </p>
                        <p id="signup-password" class="form-group">
                            <input type="password" class="signup-field form-control" name="password" placeholder="Your password">
                        </p>
                        <p>
                            <input type="submit" class="link-button yellow-link" value="SIGN UP">
                        </p>
                        <p>
                            <a class="social-media-signup" id="fb-signup" href="#"><span>Sign up with Facebook</span></a>
                            <a class="social-media-signup" id="t-signup" href="#"><span>Sign up with Twitter</span></a>
                        </p>
                    </form>
                </div>

                <div class="col-md-3"></div>
            </div>

        </div>


    </section>

<?php include_once('footer.php'); ?>