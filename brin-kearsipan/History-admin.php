<!DOCTYPE html>

<html lang="en" class="no-js">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Informasi Layanan Kearsipan Yogyakarta</title>
    <link href="css/media_query.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link href="css/style_1.css" rel="stylesheet" type="text/css" />
    <!-- Modernizr JS -->
    <script src="js/modernizr-3.5.0.min.js"></script>
    <style>
        .edit-button {
            position: absolute;
            top: 20px;
            right: 20px;
            display: inline-block;
            padding: 8px 16px;
            background-color: #428bca;
            color: white;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
        }

        .edit-button:hover {
            background-color: #3071a9;
        }
        table {
            border: solid 1px #DDEEEE;
            border-collapse: collapse;
            border-spacing: 0;
            width: 90%;
            margin: 10px auto 10px auto;
        }

        table thead th {
            background-color: #DDEFEF;
            border: solid 1px #DDEEEE;
            color: #336B6B;
            padding: 10px;
            text-align: left;
            text-shadow: 1px 1px 1px #fff;
            text-decoration: none;
        }

        table tbody td {
            border: solid 1px #DDEEEE;
            color: #333;
            padding: 10px;
            text-shadow: 1px 1px 1px #fff;
        }
    </style>

</head>

<body>
    <div class="container-fluid fh5co_header_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 fh5co_mediya_center"><a href="https://time.is/id/"
                        class="color_fff fh5co_mediya_setting">
                        <script language="JavaScript">
                            var tanggallengkap = new String();
                            var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
                            namahari = namahari.split(" ");
                            var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
                            namabulan = namabulan.split(" ");
                            var tgl = new Date();
                            var hari = tgl.getDay();
                            var tanggal = tgl.getDate();
                            var bulan = tgl.getMonth();
                            var tahun = tgl.getFullYear();
                            tanggallengkap = namahari[hari] + ", " + tanggal + " " + namabulan[bulan] + " " + tahun;
                        </script>

                        <span id='jam'></span>
                        <script language='JavaScript'>document.write(tanggallengkap);</script>
                        <div class="d-inline-block fh5co_trading_posotion_relative"><a href="#"
                                class="treding_btn">arsipjogja12@brin.go.id</a>
                            <div class="fh5co_treding_position_absolute"></div>
                        </div>
                        <a href="#" class="color_fff fh5co_mediya_setting">Layanan Sistem Informasi Kearsipan
                            Yogyakarta</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 fh5co_padding_menu">
                    <img src="images/Logo BRIN_Lanscape_Colour.png" alt="img" class="fh5co_logo_width" />
                </div>
                <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                    <div class="text-center d-inline-block">
                        <a class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div>
                        </a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://www.linkedin.com/company/brin-ri/" target="_blank" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                        </a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://www.brin.go.id/" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-google"></i></div>
                        </a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://x.com/brin_indonesia?s=20" target="_blank" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                        </a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://www.facebook.com/brin.indonesia?mibextid=MKOS29" target="_blank"
                            class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                        </a>
                    </div>
                    <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->
                    <div class="d-inline-block text-center dd_position_relative">
                        <select class="form-control fh5co_text_select_option" onchange="navigateToPage(this.value)">
                            <option value="">Pilih Halaman</option>
                            <option value="index.php">Guest</option>
                            <option value="index-user.php">User</option>
                            <option value="index-admin.php">Admin</option>
                            <option value="index.php">LogOut</option>
                        </select>
                        </select>
                    </div>

                    <script>
                        function navigateToPage(selectedValue) {
                            // Redirect ke halaman yang dipilih
                            if (selectedValue !== "") {
                                window.location.href = selectedValue;
                            }
                        }
                    </script>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
        <div class="container padding_786">
            <nav class="navbar navbar-toggleable-md navbar-light ">
                <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                <a class="navbar-brand" href="#"><img src="img/Logo BRIN_Lanscape_Colour.png" alt="img"
                        class="mobile_logo_width" /></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index-admin.php">Halaman <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="layanan-admin.php">Layanan <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="single-admin.php">Profil <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="publikasi-admin.php">Publikasi <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Berita&Opini <span
                                    class="sr-only">(current)</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                <a class="dropdown-item" href="blog-admin.php">Berita</a>
                                <a class="dropdown-item" href="opini-admin.php">Opini</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Galeri <span
                                    class="sr-only">(current)</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                <a class="dropdown-item" href="foto-admin.php">Foto</a>
                                <a class="dropdown-item" href="vidio-admin.php">Video</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Lainya <span
                                    class="sr-only">(current)</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                <a class="dropdown-item" href="penelitian-admin.php">E-Arsip Penelitian</a>
                                <a class="dropdown-item" href="form-admin.php">Register Akun Pengguna</a>
                                <a class="dropdown-item" href="akunsaya-admin.php">Akun Saya</a>
                                <a class="dropdown-item" href="Contact_us-admin.php">Hubungi Kami</a>

                            </div>
                        </li>


                        <div class="text-center d-inline-block">
                            <a href="History-admin.php" target="_blank" class="fh5co_display_table">
                                <div class="fh5co_verticle_middle"><i class="fa fa-envelope-square"></i></div>
                            </a>
                        </div>


                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <P style="font-size: 20px; margin-left: 190px;">Status Procces</p>
    <tr></tr>
    <input style="margin-left: 200px;" type="checkbox" name="" id
    ="pengajuan" value="pengajuan" />
    <label style="font-size: 20px;margin-left: 0px;" for="pengajuan">Pengajuan</label>
    <input style="margin-left: 200px;" type="checkbox" name="" id
    ="ditolak" value="ditolak"/>
    <label style="font-size: 20px;margin-left: 0px;"for="ditolak">Ditolak</label>
    <input style="margin-left: 200px;" type="checkbox" name="" id
    ="ditrima" value="ditrima"/>
    <label style="font-size: 20px;margin-left: 0px;"for="ditrima">Ditrima</label>
    <input style="margin-left: 200px;" type="checkbox" name="olahraga" id
    ="olahraga" value="olahraga" />
    <label style="font-size: 20px;margin-left: 0px;"for="olahraga">Penyerahan Arsip</label>



    <a href="edit.php"class=" btn btn-danger" style="margin-left: 70px;">- + &nbsp; Edit Status Procces</a>

    <br />
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Permintaan Ditrima/Ditolak</th>
                <th>Konfirmasi ke PIC</th>
                <th>Pencarian Berkas</th>
                <th>Penyerahan Berkas</th>
                <th>Pengembalian Berkas</th>
                <!-- <th rowspan="2">Action</th> -->
            </tr>
        </thead>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>
    </html>
