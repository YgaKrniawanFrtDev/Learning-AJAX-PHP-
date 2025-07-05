<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font googlw -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tektur:wght@400..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Tektur:wght@400..900&display=swap" rel="stylesheet">
    <!-- font googlw -->
    <style>
        body {
            background: rgb(69, 51, 68);
            background: linear-gradient(90deg, rgba(69, 51, 68, 1) 0%, rgba(43, 13, 43, 1) 93%);
        }


        .sidebar {
            height: 100vh;
            background: rgb(189, 189, 191);
            background: rgb(189, 189, 191);
            background: rgb(61, 61, 78);
            background: linear-gradient(90deg, rgba(61, 61, 78, 1) 0%, rgba(172, 26, 222, 1) 93%);
            color: white;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;

        }

        .sidebar a:hover {
            background-color: rgb(141, 141, 141);
            border-radius: 5px;
            border: 1px solid white;
            transition: ease-in 0.3s;
        }



        .navbar-brand h3 {
            font-family: tektur;
        }


        .navbar-list {
            font-family: poppins;
        }

        .content {
            background: linear-gradient(90deg, rgba(61, 61, 78, 1) 0%, rgba(172, 26, 222, 1) 93%);
            height: 100px;
            width: auto;
            border-radius: 5px;
        }

        .content h3 {
            font-family: tektur;

        }


        .form-control {
            width: 400px
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-md-block sidebar p-4">
                <div class="navbar-brand">
                    <h3 class="fw-bold">
                        Sobur <br>
                        building
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-buildings" viewBox="0 0 16 16">
                            <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022M6 8.694 1 10.36V15h5zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5z" />
                            <path d="M2 11h1v1H2zm2 0h1v1H4zm-2 2h1v1H2zm2 0h1v1H4zm4-4h1v1H8zm2 0h1v1h-1zm-2 2h1v1H8zm2 0h1v1h-1zm2-2h1v1h-1zm0 2h1v1h-1zM8 7h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zM8 5h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zm0-2h1v1h-1z" />
                        </svg>
                    </h3>
                </div>
                <a href="#" class="navbar-list" onclick="showContent('userList')" class="text-light">Daftar User <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                    </svg></a>
                <a href="#" class="navbar-list" onclick="showContent('itemList')" class="text-light">Daftar Barang <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                        <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                        <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3z" />
                    </svg></a>
            </nav>
            <main class="col-md-10 p-4">
                <div id="userList" class="content d-flex gap-3">
                    <div>
                        <h3 class="text-light fw-bold p-4">Daftar User <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                            </svg> </h3>
                    </div>
                    <div>
                        <form class="d-flex  p-4" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light type=" submit">Search</button>
                        </form>
                    </div>
                    <div style="margin-left: 200px;" class="d-flex">
                        <div class="dropdown p-1 mt-3 me-4">
                            <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profile <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Lihat Profil</a></li>
                                <li><a class="dropdown-item" href="#">Keluar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="main-body">
                    <!-- table -->
                    <div class="table mt-3">
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No.Hp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="DataUser">
                                <!-- data akan di isi dari database dengan ajax -->
                            </tbody>
                        </table>
                    </div>
                    <!-- table -->

                    <!-- btn tambah Data -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#add-modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                            <path d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                        </svg>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" style="border-radius: 20px;">
                            <div class="modal-content" style="border: 20px;">
                                <div class="modal-header bg-dark">
                                    <h5 class="modal-title text-center text-light fw-bold" id="exampleModalLabel">Tambah User baru</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="background-color: #3E3F5B;">
                                    <div class="mx-auto p-55">
                                        <form action="" method="POST" id="formData">
                                            <div class="mb-3">
                                                <label for="" class="text-light fw-bold">Nama</label>
                                                <input type="text" name="Nama" id="Nama" class="form-control bg-light">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="text-light fw-bold">Alamat</label>
                                                <input type="text" name="Alamat" id="Alamat" class="form-control bg-light">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="text-light fw-bold">No Hp</label>
                                                <input type="text" name="No_hp" id="No_hp" class="form-control bg-light">
                                            </div>
                                            <div class="modal-footer bg-dark">
                                                <button type="button" class="btn btn-outline-secondary text-light" data-bs-dismiss="modal">Tutup</button>
                                            </div>
                                            <button type="submit" class="btn btn-secondary">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Update Modal -->
                    <div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" style="border-radius: 20px;">
                            <div class="modal-content" style="border: 20px;">
                                <div class="modal-header bg-dark">
                                    <h5 class="modal-title text-center text-light fw-bold" id="exampleModalLabel">Edit Data User</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="background-color: #3E3F5B;">
                                    <div class="mx-auto p-55">
                                        <form action="" method="POST" id="UpdateForm">
                                            <input type="hidden" id="Edit-id" name="Edit-id" data-id="Id_user">
                                            <div class="mb-3">
                                                <label for="" class="text-light fw-bold">Nama</label>
                                                <input type="text" name="Edit-nama" id="Edit-nama" class="form-control bg-light">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="text-light fw-bold">Alamat</label>
                                                <input type="text" name="Edit-alamat" id="Edit-alamat" class="form-control bg-light">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="text-light fw-bold">No Hp</label>
                                                <input type="text" name="Edit-no-hp" id="Edit-no-hp" class="form-control bg-light">
                                            </div>
                                            <button type="button" class="btn btn-outline-secondary text-light" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-secondary">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- btn tambah Data -->
                </div>
            </main>
        </div>
    </div>
    <!-- cdn sweet alert -->
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- cdn sweet alert -->
    <!-- cdn jquery -->
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <!-- cdn jquery -->
    <script>
        $(document).ready(function() {
            // Fungsi untuk membaca data
            function loadData() {
                $.ajax({
                    url: "handlerPhp/readUser.php",
                    type: "GET",
                    dataType: "json",
                    success: function(resultUser) {
                        let html = "";
                        $.each(resultUser, function(index, item) {
                            html += `<tr>
                            <td>${index + 1}</td>
                            <td>${item.Nama}</td>
                            <td>${item.Alamat}</td>
                            <td>${item.No_hp}</td> 
                            <td>
                                <button type="button" class="btn-edit btn btn-warning text-light fw-bold" 
                                    data-bs-toggle="modal" data-bs-target="#UpdateModal"
                                    data-id="${item.Id_user}" data-nama="${item.Nama}" 
                                    data-alamat="${item.Alamat}" data-no_hp="${item.No_hp}">Edit</button>
                                <button class="btn-delete btn btn-danger text-light fw-bold" 
                                    data-id="${item.Id_user}">Hapus</button>
                            </td> 
                        </tr>`;
                        });
                        $("#DataUser").html(html);
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error: ", status, error);
                    }
                });
            }

            // Load data saat pertama kali halaman dimuat
            loadData();

            // Tambah Data
            $("#formData").submit(function(e) {
                e.preventDefault(); // Mencegah reload halaman

                let resultForm = $(this).serialize();

                $.ajax({
                    url: "handlerPhp/createUser.php",
                    type: "POST",
                    data: resultForm,
                    dataType: "json",
                    success: function(resultData) {
                        if (resultData.success) {
                            Swal.fire({
                                icon: "success",
                                title: "Sukses!",
                                text: resultData.success
                            }).then(() => {
                                $("#formData")[0].reset(); // Reset form
                                $("#add-data").modal("hide");
                                loadData(); // Refresh data
                            });
                        } else if (resultData.error) {
                            Swal.fire({
                                icon: "error",
                                title: "Gagal!",
                                text: resultData.error
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error: ", status, error);
                        Swal.fire({
                            icon: "error",
                            title: "Terjadi kesalahan!",
                            text: error
                        });
                    }
                });
            });


            // Menampilkan Data pada Form Update
            $(document).on("click", ".btn-edit", function() {
                let Id_user = $(this).data("id");
                let Nama = $(this).data("nama");
                let Alamat = $(this).data("alamat");
                let No_hp = $(this).data("no_hp");

                $("#Edit-id").val(Id_user);
                $("#Edit-nama").val(Nama);
                $("#Edit-alamat").val(Alamat);
                $("#Edit-no-hp").val(No_hp);
            });

            // Edit Data User (Update)
            $("#UpdateForm").submit(function(e) {
                e.preventDefault();
                let DataForm = $(this).serialize();
                console.log(DataForm);

                $.ajax({
                    url: "handlerPhp/updateUser.php",
                    type: "POST",
                    data: DataForm,
                    dataType: "json",
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: "success",
                                title: "Sukses!",
                                text: response.success
                            }).then(() => {
                                $("#UpdateModal").modal("hide");
                                loadData(); // Refresh tabel
                            });
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Gagal!",
                                text: response.error
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error: ", status, error);
                    }
                });
            });

            // Hapus Data
            $(document).on("click", ".btn-delete", function() {
                let Id_user = $(this).data("id");

                if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                    $.ajax({
                        url: "handlerPhp/deleteUser.php",
                        type: "POST",
                        dataType: "json",
                        data: {
                            Id_user: Id_user
                        },
                        success: function(resultDelete) {
                            alert(resultDelete.success || resultDelete.error);
                            loadData();
                        },
                        error: function(xhr, status, error) {
                            console.error("AJAX Error: ", status, error);
                        }
                    });
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>