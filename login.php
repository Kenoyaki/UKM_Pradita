<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>UKM Pradita</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

<header class="masthead">
    <div class="container">
        <div class="row gx-4 gx-lg-5 justify-content-center aligns-items-center pt-5 mb-5">
            <div class="col-lg-4 bg-dark p-4 rounded"> <!--background-color: #FFE7C1; -->
                <form id="contactForm" method="POST" action="auth_controller.php">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="NIM" type="text" placeholder="Masukkan..." data-sb-validations="required" />
                        <label for="name">NIM</label>
                        <div class="invalid-feedback" data-sb-feedback="NIM:required">NIM is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="password" type="password" placeholder="password" data-sb-validations="required,email" />
                        <label for="email">Password</label>
                        <div class="invalid-feedback" data-sb-feedback="password:required">Password is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="password:password">Password is not valid.</div>
                    </div>
                    <!-- This is what your users will see when the form succesfully submited -->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-xl" id="loginButton" type="login">Login</button></div>
                </form>
            </div>
        </div>        
    </div>
</header>

</html>