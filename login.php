<?php
    $action = isset($_POST['action']) ? $_POST['action'] : '';

    if($action == "login"){
        $NIM = $_POST['NIM'];
        $password = $_POST['password'];

            $sqlListUser = "SELECT * FROM list_user WHERE nim = '$NIM'";
            $queryListUser = $dbh->query($sqlListUser);


    }

    //while($row = $queryListUser->fetch(PDO::FETCH_ASSOC)){}
?>
<header class="masthead">
    <div class="container">
        <div class="row gx-4 gx-lg-5 justify-content-center aligns-items-center mb-5">
            <div class="col-lg-4 bg-dark p-4 rounded"> <!--background-color: #FFE7C1; -->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="NIM" type="text" placeholder="Masukkan..." data-sb-validations="required" />
                        <label for="name">NIM</label>
                        <div class="invalid-feedback" data-sb-feedback="NIM:required">NIM is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="password" type="password" placeholder="password" data-sb-validations="required,email" />
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
                    <div class="d-grid"><button class="btn btn-primary btn-xl" id="loginButton" type="login" onclick="login()">Login</button></div>
                </form>
            </div>
        </div>        
    </div>
</header>

<script>
    function login() {
        const NIM = $('#NIM').val();
        const password = $('#password').val();
        alert('Login button clicked!');

        $.ajax({
            type: "POST",
            url: urlLogin,
            data: {
                action: "login",
                NIM,
                password
            }
        })
    }
</script>
