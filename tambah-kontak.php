<?php include('header.php')  ?>

<body>

    <?php include('navbar.php')  ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mt-2 mb-2">Tambah Data Kontak</h3>
                    </div>
                    <div class="card-body">
                        <form action="proses/tambah-kontak.php" method="POST">
                            <div class="mb-3">
                                <label for="inputNAma" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="inputNAma">
                            </div>

                            <div class="mb-3">
                                <label for="inputNoHP" class="form-label">No. HP</label>
                                <input type="text" name="no_hp" class="form-control" id="inputNoHP">
                            </div>

                            <div class="mb-3">
                                <label for="inputAlamat" class="form-label">Alamat</label>
                                <textarea name="alamat" class="form-control" id="inputAlamat"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>


</html>