<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="scss/styles.scss">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ff041f84fb.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body id="body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-4 abs-center mt-5 pt-5">
                <div class="card bg-dark text-light">
                    <div class="card-header">
                        <div>
                            Login
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="../php/login.php" method="POST">
                            <div class="from-group p-1">
                                <label for="txtUsername">User</label>
                                <input type="text" class="form-control" name="txtUsername" id="txtUsername" placeholder="User">
                            </div>
                            <div class="form-group p-1">
                                <label for="txtPass">Password</label>
                                <input type="password" class="form-control" name="txtPass" id="txtPass" placeholder="Password">
                            </div>
                            <div class="form-group p-1 text-end">
                                <button class="btn btn-outline-light">LogIn</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-8 mt-5 pt-5 abs-center">
                <div class="typewriter-effect">
                    <div class="text" id="typewriter-text"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const typeWriter = document.getElementById('typewriter-text');
        const text = 'Portfolio by MaxX. :)';

        typeWriter.innerHTML = text;
        typeWriter.style.setProperty('--characters', text.length);
    </script>
</body>

</html>