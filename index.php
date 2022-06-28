<?php include('header.php')  ?>

<body>

    <?php include('navbar.php')  ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mt-2 mb-2" style="float: left;">Data Kontak</h3>
                        <a href="tambah-kontak.php" class="btn btn-success mt-2 mb-2" style="float: right;">
                            <i class="fa-solid fa-plus"></i> Tambah Kontak </a>
                    </div>
                    <div class="card-body">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>No HP</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Redho Harli</td>
                                    <td>081234567890</td>
                                    <td>Yogyakarta</td>
                                    <td>
                                        <a href="edit-kontak.php" class="btn btn-primary"><i class="fa-solid fa-pen"></i> Edit</a>
                                        <a href="hapus-kontak.php" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Redho Harli</td>
                                    <td>081234567890</td>
                                    <td>Yogyakarta</td>
                                    <td>
                                        <a href="edit-kontak.php" class="btn btn-primary"><i class="fa-solid fa-pen"></i> Edit</a>
                                        <a href="hapus-kontak.php" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Redho Harli</td>
                                    <td>081234567890</td>
                                    <td>Yogyakarta</td>
                                    <td>
                                        <a href="edit-kontak.php" class="btn btn-primary"><i class="fa-solid fa-pen"></i> Edit</a>
                                        <a href="hapus-kontak.php" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Redho Harli</td>
                                    <td>081234567890</td>
                                    <td>Yogyakarta</td>
                                    <td>
                                        <a href="edit-kontak.php" class="btn btn-primary"><i class="fa-solid fa-pen"></i> Edit</a>
                                        <a href="hapus-kontak.php" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>


</html>