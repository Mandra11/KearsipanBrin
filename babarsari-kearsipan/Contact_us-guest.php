<!DOCTYPE html>

<html lang="en" class="no-js">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>24 News — Free Website Template, Free php5 Template by Freephp5.co</title>
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
                            <a href="https://www.facebook.com/brin.indonesia?mibextid=MKOS29"  target="_blank" class="fh5co_display_table">
                                <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                            </a>
                        </div>
                        <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->
                        <div class="d-inline-block text-center dd_position_relative">
                        <select class="form-control fh5co_text_select_option" onchange="navigateToPage(this.value)">
                            <option value="">Pilih Halaman</option>
                            <option value="index-guest.php">Guest</option>
                            <option value="login-guest.php">Login</option>
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
                            <a class="nav-link" href="index-guest.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="layanan-guest.php">Layanan <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="single-guest.php">Profil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="publikasi-guest.php">Publikasi <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Berita&Opini <span
                                    class="sr-only">(current)</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                <a class="dropdown-item" href="blog-guest.php">Berita</a>
                                <a class="dropdown-item" href="opini-guest.php">Opini</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Galeri <span
                                    class="sr-only">(current)</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                <a class="dropdown-item" href="foto-guest.php">Foto</a>
                                <a class="dropdown-item" href="vidio-guest.php">Video</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Lainya <span
                                    class="sr-only">(current)</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                <a class="dropdown-item" href="penelitian-guest.php">E-Arsip Penelitian</a>
                                <a class="dropdown-item" href="akunsaya-guest.php">Akun Saya</a>
                                <a class="dropdown-item" href="Contact_us-guest.php">Hubungi Kami</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid contact_us_bg_img">
        <div class="container">
            <div class="row">
                <a href="#" class="fh5co_con_123"><i class="fa fa-home"></i></a>
                <a href="#" class="fh5co_con pt-2"> Kontak Kami </a>
            </div>
        </div>
    </div>
    <div class="container-fluid  fh5co_fh5co_bg_contcat">
        <div class="container">
            <div class="row py-4">
                <div class="col-md-4 py-3">
                    <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                        <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                            <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-phone"></i></span> </div>
                        </div>
                        <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                            <span class="c_g d-block">Hubungi Kami</span>
                            <span class="d-block c_g fh5co_contact_us_no_text">+62 813-2989-9440</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 py-3">
                    <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                        <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                            <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-envelope"></i></span>
                            </div>
                        </div>
                        <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                            <span class="c_g d-block">Ada pertanyaan?</span>
                            <span class="d-block c_g fh5co_contact_us_no_text">arsipjogja12@brin.go.id</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 py-3">
                    <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                        <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                            <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-map-marker"></i></span>
                            </div>
                        </div>
                        <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                            <span class="c_g d-block">Alamat</span>
                            <span class="d-block c_g fh5co_contact_us_no_text">BRIN KSE A. BAIQUNI, Tambak Bayan, Caturtunggal, Kabupaten Sleman, Daerah Istimewa Yogyakarta</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-4">
        <div class="container">
            <div class="col-12 text-center contact_margin_svnit ">
                <div class="text-center fh5co_heading py-2">Hubungi Kami</div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <form class="row" id="fh5co_contact_form">
                        <div class="col-12 py-3">
                            <input type="text" class="form-control fh5co_contact_text_box"
                                placeholder="Masukan Nama Anda" />
                        </div>
                        <div class="col-6 py-3">
                            <input type="text" class="form-control fh5co_contact_text_box" placeholder="E-mail" />
                        </div>
                        <div class="col-6 py-3">
                            <input type="text" class="form-control fh5co_contact_text_box" placeholder="Subjek" />
                        </div>
                        <div class="col-12 py-3">
                            <textarea class="form-control fh5co_contacts_message" placeholder=" Isi Pesan"></textarea>
                        </div>
                        <div class="col-12 py-3 text-center"> <a href="#" class="btn contact_btn">Kirim Pesan</a>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-6 align-self-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.1069419553805!2d110.4118315733363!3d-7.778484377170095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a596d02f4c803%3A0x81e89e3938756a7b!2sBRIN%20KSE%20A.%20BAIQUNI!5e0!3m2!1sid!2sid!4v1697681998697!5m2!1sid!2sid"
                        class="map_sss" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
   
        <div class="container-fluid fh5co_footer_bg pb-3">
        <div class="container animate-box">
            <div class="row">
                <div class="col-12 spdp_right py-5"><img src=images/Main_Logo_of_National_Research_and_Innovation_Agency_of_Indonesia.svg.png alt=" img"
                        class="footer_logo" /></div>
                <div class="clearfix"></div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="footer_main_title py-3"> Sekilas Layanan Arsip </div>
                    <div class="footer_sub_about pb-3" style="text-align: justify;"> Arsip sering dibutuhkan dan dipakai
                        dalam bidang manajemen serta guestistrasi".
                        Berdasarkan Undang-Undang Nomor 43 Tahun 2009 tentang Kearsipan, arsip adalah rekaman
                        kegiatan atau peristiwa dalam berbagai bentuk serta media, yang dibuat dan diterima oleh
                        lembaga negara, pemerintah daerah, lembaga pendidikan, perusahaan, organisasi politik,
                        organisasi masyarakat maupun perseorangan, dalam rangka melaksanakan kehidupan
                        bermasyarakat, berbangsa dan bernegara.
                        Arsip dapat didefinisikan sebagai bukti atau rekaman aktivitas dan transaksi, mulai dari
                        pembayaran hingga langkah pengambilan keputusan.
                    </div>
                    <div class="footer_mediya_icon">
                        <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                            </a></div>
                        <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                            </a></div>
                        <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                            </a></div>
                        <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                            </a></div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <div class="footer_main_title py-3"> Kategori</div>
                    <ul class="footer_menu">
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Study Banding</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Kunjungan</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Penelitian</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Layanan Arsip</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Buat Akun</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Sumber Daya</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Teknologi</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Lingkungan</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                    <div class="footer_main_title py-3"> Paling banyak dilihat</div>
                    <div class="footer_makes_sub_font"> Oktober 10,2023</div>
                    <a href="#" class="footer_post pb-4"> Study Banding </a>
                    <div class="footer_makes_sub_font"> Oktober 17,2023</div>
                    <a href="#" class="footer_post pb-4"> Pemusnahan Arsip Tahap 1 </a>
                    <div class="footer_makes_sub_font"> Juni 17, 2022</div>
                    <a href="#" class="footer_post pb-4"> Kunjungan Tim Kearsipan Karang Sambung Kebumen </a>
                    <div class="footer_position_absolute"><img src="images/footer_sub_tipik.png" alt="img"
                            class="width_footer_sub_img" /></div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 ">
                    <div class="footer_main_title py-3"> Terakhir di Ubah</div>
                    <a href="berita1.php" class="footer_img_post_6"><img src="images/pemusnahanarsip.jpeg"
                            alt="img" /></a>
                    <a href="berita1.php" class="footer_img_post_6"><img src="images/pemusnahan arsip foto ke 2.jpg"
                            alt="img" /></a>
                    <a href="profil.php" class="footer_img_post_6"><img src="images/STRUKTUR ORGANISASI_page-0001.jpg"
                            alt="img" /></a>
                    <a href="berita3.php" class="footer_img_post_6"><img src="images/kunjunganarsipkarangsambung.jpg"
                            alt="img" /></a>
                    <a href="berita2.php" class="footer_img_post_6"><img src="images/kunjunganugm.png" alt="img" /></a>
                    <a href="profil.php" class="footer_img_post_6"><img src="images/LOGO BATAN.png" alt="img" /></a>
                    <a href="profil.php" class="footer_img_post_6"><img src="images/Tusi.png" alt="img" /></a>
                    <a href="profil.php" class="footer_img_post_6"><img src="images/Proker.png" alt="img" /></a>
                    <a href="profil.php" class="footer_img_post_6"><img src="images/profil.jpeg" alt="img" /></a>
                </div>
            </div>
            <div class="row justify-content-center pt-2 pb-4">
                <div class="col-12 col-md-8 col-lg-7 ">
                    <div class="input-group">
                        <span class="input-group-addon fh5co_footer_text_box" id="basic-addon1"><i
                                class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control fh5co_footer_text_box" placeholder="Enter your email..."
                            aria-describedby="basic-addon1">
                        <a href="#" class="input-group-addon fh5co_footer_subcribe" id="basic-addon12"> <i
                                class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid fh5co_footer_right_reserved">
        <div class="container">
            <div class="row  ">
                <div class="col-12 col-md-6 py-4 Reserved"> © Copyright 2023, All rights reserved. Design by <a
                        href="https://freehtml5.co" title="Free php5 Bootstrap templates">Layanan Sistem Informasi
                        Kawasan Yogyakarta</a>. </div>
                <div class="col-12 col-md-6 spdp_right py-4">
                    <a href="#" class="footer_last_part_menu">Halaman</a>
                    <a href="Contact_us.php" class="footer_last_part_menu">Tentang Kami</a>
                    <a href="Contact_us.php" class="footer_last_part_menu">Kontak</a>
                    <a href="blog.php" class="footer_last_part_menu">Berita Terakhir ini</a>
                </div>
            </div>
        </div>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

</body>

</html>