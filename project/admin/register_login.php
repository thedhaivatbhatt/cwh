<?php
require_once("inc/header.php");
?>
</head>

<body id="top">
    <?php
    require_once("inc/menu.php");
    ?>
    <section class="section about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">

                    <div class="card shadow m-3">
                        <div class="card-header bg-secondary ">
                            <h3 class='text-white'>Register</h3>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="name" aria-label="name">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Contact person" aria-label="Contact person">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="address 1" aria-label="address1">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="address 2" aria-label="address2">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="city" aria-label="city">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="state" aria-label="state">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="email" class="form-control" placeholder="email" aria-label="email">
                                    </div>
                                    <div class="col">
                                        <input type="password" class="form-control" placeholder="password" aria-label="password">
                                    </div>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-danger btn-block">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card shadow m-3">
                        <div class="card-header bg-secondary ">
                            <h3 class='text-white'>Login</h3>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="your registered email address" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="password" name="password">
                                </div>
                                <div class="mb-3">
                                    <button type="button" class="btn btn-danger btn-block">Login</button>
                                </div>
                                <div>
                                    <a href="forgot_password.php">Forgot password? click here</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    require_once("inc/footer.php");
    require_once("inc/script.php");
    ?>
</body>

</html>