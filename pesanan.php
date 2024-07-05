

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Pesanan Kantin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE | Dashboard v2">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous">
    <link rel="stylesheet" href="adminlte.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script> <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <?php
    include("header.php");
    include("sidebar.php");
    include("koneksi.php");

    // Pagination settings
    $limit = 5;
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $offset = ($page - 1) * $limit;

    // Fetch data
    $result = mysqli_query($conn, "SELECT * FROM tb_pesanan LIMIT $limit OFFSET $offset");
    $total_result = mysqli_query($conn, "SELECT COUNT(*) AS count FROM tb_pesanan");
    $total_rows = mysqli_fetch_assoc($total_result)['count'];
    $total_pages = ceil($total_rows / $limit);
    ?>

    <!-- Main content -->
    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Pesanan</h3>
                    </div>
                    <div class="col-sm-6 text-end">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahPesananModal">Tambah Pesanan</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-content">
            <div class="container-fluid">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Pemesan</th>
                            <th>Lauk Utama</th>
                            <th>Lauk Tambahan 1</th>
                            <th>Lauk Tambahan 2</th>
                            <th>Catatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['nama_pemesan']; ?></td>
                                <td><?php echo $row['lauk_utama']; ?></td>
                                <td><?php echo $row['lauk_tambahan_satu']; ?></td>
                                <td><?php echo $row['lauk_tambahan_dua']; ?></td>
                                <td><?php echo $row['catatan']; ?></td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editPesananModal<?php echo $row['id']; ?>">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deletePesanan(<?php echo $row['id']; ?>)">Delete</button>
                                </td>
                            </tr>

                            <!-- Edit Pesanan Modal -->
                            <div class="modal fade" id="editPesananModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="editPesananModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editPesananModalLabel">Edit Pesanan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="editPesananForm<?php echo $row['id']; ?>">
                                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                <div class="mb-3">
                                                    <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
                                                    <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" value="<?php echo $row['nama_pemesan']; ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="lauk_utama" class="form-label">Lauk Utama</label>
                                                    <input type="text" class="form-control" id="lauk_utama" name="lauk_utama" value="<?php echo $row['lauk_utama']; ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="lauk_tambahan_satu" class="form-label">Lauk Tambahan 1</label>
                                                    <input type="text" class="form-control" id="lauk_tambahan_satu" name="lauk_tambahan_satu" value="<?php echo $row['lauk_tambahan_satu']; ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="lauk_tambahan_dua" class="form-label">Lauk Tambahan 2</label>
                                                    <input type="text" class="form-control" id="lauk_tambahan_dua" name="lauk_tambahan_dua" value="<?php echo $row['lauk_tambahan_dua']; ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="catatan" class="form-label">Catatan</label>
                                                    <input type="text" class="form-control" id="catatan" name="catatan" value="<?php echo $row['catatan']; ?>" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </tbody>
                </table>
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item <?php if ($page <= 1) echo 'disabled'; ?>">
                            <a class="page-link" href="?page=<?php echo $page - 1; ?>">Back</a>
                        </li>
                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <li class="page-item <?php if ($page == $i) echo 'active'; ?>">
                                <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                        <?php endfor; ?>
                        <li class="page-item <?php if ($page >= $total_pages) echo 'disabled'; ?>">
                            <a class="page-link" href="?page=<?php echo $page + 1; ?>">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>
    <?php
    include("footer.php");
    mysqli_close($conn);
    ?>

    <!-- Modal Tambah Pesanan -->
    <div class="modal fade" id="tambahPesananModal" tabindex="-1" aria-labelledby="tambahPesananModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahPesananModalLabel">Tambah Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="tambahPesananForm">
                        <div class="mb-3">
                            <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
                            <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" required>
                        </div>
                        <div class="mb-3">
                            <label for="lauk_utama" class="form-label">Lauk Utama</label>
                            <input type="text" class="form-control" id="lauk_utama" name="lauk_utama" required>
                        </div>
                        <div class="mb-3">
                            <label for="lauk_tambahan_satu" class="form-label">Lauk Tambahan 1</label>
                            <input type="text" class="form-control" id="lauk_tambahan_satu" name="lauk_tambahan_satu" required>
                        </div>
                        <div class="mb-3">
                            <label for="lauk_tambahan_dua" class="form-label">Lauk Tambahan 2</label>
                            <input type="text" class="form-control" id="lauk_tambahan_dua" name="lauk_tambahan_dua" required>
                        </div>
                        <div class="mb-3">
                            <label for="catatan" class="form-label">Catatan</label>
                            <input type="text" class="form-control" id="catatan" name="catatan" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Submit form using AJAX for tambahPesananForm
            $("#tambahPesananForm").submit(function(event) {
                event.preventDefault();
                $.ajax({
                    url: "tambah_pesanan.php",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function(response) {
                        alert("Pesanan berhasil ditambahkan");
                        location.reload();
                    },
                    error: function() {
                        alert("Terjadi kesalahan. Silakan coba lagi.");
                    }
                });
            });

            // Function to delete pesanan
            window.deletePesanan = function(id) {
                if (confirm('Apakah Anda yakin ingin menghapus pesanan ini?')) {
                    $.ajax({
                        url: 'delete_pesanan.php',
                        type: 'POST',
                        data: {
                            id: id
                        },
                        success: function(response) {
                            alert("Pesanan berhasil dihapus");
                            location.reload();
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                }
            };

            // Submit form using AJAX for editPesananForm
            $("form[id^='editPesananForm']").submit(function(event) {
                event.preventDefault();
                var formId = $(this).attr('id');
                var id = formId.replace('editPesananForm', '');
                $.ajax({
                    url: 'update_pesanan.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#editPesananModal' + id).modal('hide');
                        alert("Pesanan berhasil diperbarui");
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>

</html>