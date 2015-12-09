<?php include_once('header.php'); ?>
<?php include_once('nav.php'); ?>

    <section id="login-page" class="page">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"></div>

                <div class="col-md-6">
                    <form id="login-form" role="form" method="post" enctype="multipart/form-data" action="loginCheck.php">
                        <h2>Log in</h2>
                        <p id="login-email" class="form-group">
                            <input type="text" class="login-field form-control" name="username" placeholder="Your email" autofocus>
                        </p>
                        <p id="login-password" class="form-group">
                            <input type="password" class="login-field form-control" name="password" placeholder="Your password">
                        </p>
                        <p>
                            <input type="submit" class="login-btn btn btn-default" value="LOG IN">
                        </p>
                        <p>
                            <a class="social-media-login" id="fb-login" href="#"><span>Log in with Facebook</span></a>
                            <a class="social-media-login" id="t-login" href="#"><span>Log in with Twitter</span></a>
                        </p>
                    </form>
                </div>

                <div class="col-md-3"></div>
            </div>

        </div>


    </section>



</body>
</html>
