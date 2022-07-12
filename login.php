<?php include('header.php')  ?>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-5 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="mt-2 mb-2">Form Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="proses/login.php" method="POST">
                            <div class="mb-3">
                                <label for="inputUsername" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="inputUsername">
                            </div>

                            <div class="mb-3">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="inputPassword">
                                <input type="checkbox" onclick="lihatPassword('inputPassword')"> Tampilkan Password
                            </div>
                            <hr>

                            <a href="register.php" style="text-decoration: none; display:block" class="mb-2">Belum punya akun? Daftar di sini!</a>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script>
        function lihatPassword(id) {
            var element = document.getElementById(id);
            if (element.type === "password") {
                element.type = "text";
            } else {
                element.type = "password";
            }
        }
    </script>
    <?php if (!empty($_SESSION['notif'])) : ?>
        <script>
            alert('<?php echo $_SESSION['notif'] ?>')
        </script>
        <?php unset($_SESSION['notif']); ?>
    <?php endif; ?>
</body>


</html>