<?php include('header.php')  ?>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-5 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="mt-2 mb-2">Form Register</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="inputUsername" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="inputUsername">
                            </div>

                            <div class="mb-3">
                                <label for="inputNama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="inputNama">
                            </div>

                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="inputEmail">
                            </div>

                            <div class="mb-3">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="inputPassword">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" onclick="lihatPassword('inputPassword')" id="ts_1">
                                  <label class="form-check-label" for="ts_1">
                                    Tampilkan Password
                                  </label>
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="inputUlangPassword" class="form-label">Ulangi Password</label>
                                <input type="password" name="ulang_password" class="form-control" id="inputUlangPassword">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" onclick="lihatPassword('inputUlangPassword')" id="ts_1">
                                  <label class="form-check-label" for="ts_1">
                                    Tampilkan Password
                                  </label>
                                </div>
                            </div>
                            <hr>

                            <a href="login.php" style="text-decoration: none; display:block" class="mb-2">Sudah punya akun? Login di sini!</a>
                            <button type="submit" class="btn btn-primary">Register</button>
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
</body>


</html>
