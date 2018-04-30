
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/page.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>css/icons.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!--icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <div class="login">

    </div>
    <div class="container-fluid header" style="padding:0">
        <div class="menubar parentMenu">
            <div class="container-fluid max1080p">
                <div class="row">
                    <div class="col-lg-3 CenterContainer menuDecoration wrapCenter logo" id="logo">
                        <!--<div class="CenterContainer-Child" style="height:80px;width:270px;background:blue">placeholder</div>-->
                        <div class="innerCenter">
                            <img src="<?php echo base_url() ?>img/logo.png" style="width:100%" />
                        </div>
                    </div>
                    <div class="col-lg-7  menuDecoration wrapCenter">
                        <div class="input-group innerCenter">
                            <input type="text" class="form-control" aria-label="">
                            <div class="input-group-append">
                                <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pilih Kategori
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">zzz</a>
                                        <a class="dropdown-item" href="#">zzzzzzzz</a>
                                        <a class="dropdown-item" href="#">Szzzzzzzss</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-warning">Cari</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2  menuDecoration wrapCenter">
                        <div class="input-group innerCenter">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon2">Rp 00000</div>
                            </div>
                            <button type="button" class="btn btn-warning">Keranjang</button>
                        </div>
                    </div>
                </div>
                <div class="row paddingLR50px">
                    <div class="col-lg-2 toolbar-left">
                        <div class="dropdown dropdown btn-flex " style="width:100%">
                            <button class="btn btn-secondary btn-warning btn-lg" style="border-radius:0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kategori
                            </button>
                            <div class="dropdown-menu btn-flex" style="width:100%" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Buku</a>
                                <a class="dropdown-item" href="#">Buku2</a>
                                <a class="dropdown-item" href="#">Buku3</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 toolbar-right">
                        <div class="btn-group btn-group-lg" style="border-radius:0" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-dark">Beranda</button>
                            <button type="button" class="btn btn-dark">Buku</button>
                            <button type="button" class="btn btn-dark">Forum</button>
                            <button type="button" class="btn btn-dark">Info</button>
                            <button type="button" class="btn btn-dark">Blog</button>
                        </div>
                    </div>
                    <div class="col-lg-2 toolbar-right wrapCenter2">
                        <div class="innerCenter" style="padding:0px">
                            <?php 
                                if($this->session->has_userdata('username')){
                            ?>
                            <a href="<?php echo base_url() ?>Profile"><button type="button" class="btn btn-warning"><?php echo $this->session->userdata('nama') ?></button></a>
                            <a href="<?php echo base_url() ?>Jual"><button type="button" class="btn btn-warning">Jual Buku</button></a>
                            <?php
                                } else {

                            ?>
                            <a href="<?php echo base_url() ?>Login"><button type="button" class="btn btn-warning">Sign Up / Login</button></a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <!--<div class="navbar vbottom childMenu">

                </div>-->
            </div>
        </div>
        <div class="container-fluid content max1080p">
            <div class="row paddingLR50px">
                <div class="col-lg-2 category rightSideBar" style="padding:0">
                    <div class="list-group" id="kategoriBar">
                        <a href="search?kategori=Seks" class="list-group-item list-group-item-action menuKategori">Seks</a>
                        <a href="search?kategori=Komputer" class="list-group-item list-group-item-action menuKategori">Komputer</a>
                        <a href="search?kategori=Novel" class="list-group-item list-group-item-action menuKategori">Novel</a>
                        <a href="search?kategori=Komik" class="list-group-item list-group-item-action menuKategori">Komik</a>
                        <a href="search?kategori=Horor" class="list-group-item list-group-item-action menuKategori">Horor</a>
                        <a href="search?kategori=Cinta" class="list-group-item list-group-item-action menuKategori">Cinta</a>
                        <a href="search?kategori=Filsafat" class="list-group-item list-group-item-action menuKategori">Filsafat</a>
                        <a href="search?kategori=Hukum" class="list-group-item list-group-item-action menuKategori">Hukum</a>
                        <a href="search?kategori=Sosial" class="list-group-item list-group-item-action menuKategori">Sosial</a>
                        <a href="search?kategori=Ekonomi" class="list-group-item list-group-item-action menuKategori">Ekonomi</a>
                        <a href="search?kategori=Matematika" class="list-group-item list-group-item-action menuKategori">Matematika</a>
                        <a href="search?kategori=Kimia" class="list-group-item list-group-item-action menuKategori">Kimia</a>
                        <a href="search?kategori=Bahasa" class="list-group-item list-group-item-action menuKategori">Bahasa</a>
                        <a href="search?kategori=Lain-Lain" class="list-group-item list-group-item-action menuKategori">Lain Lain</a>
                    </div>
                </div>
                <div class="col-lg-10 slider">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="<?php echo base_url() ?>img/banner/banner1.jpg" alt="First slide">
                                <div class="carousel-caption">
                                    <h3>Buku adalah jendela dunia</h3>
                                    <p>Buku bekas tidak masalah, yang penting ilmunya</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="<?php echo base_url() ?>img/banner/banner2.jpg" alt="Second slide">
                                <div class="carousel-caption">
                                    <h3>Buku adalah keajaiban yang unik</h3>
                                    <p>Tidak ada teman yang selalu ada seperti buku</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="<?php echo base_url() ?>img/banner/banner3.jpg" alt="Third slide">
                                <div class="carousel-caption">
                                    <h3>Buku adalah sumber ilmu pengetahuan</h3>
                                    <p>Membaca tidak akan merugikanmu</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row paddingLR50px" style="padding-top: 30px;margin-bottom: 30px;">
                <div class="col-md">
                    <div class="img-fluid divImgBackground threeSection wrapCenter" style="background-image:url(<?php echo base_url() ?>img/banner/banner4.jpg);">
                        <div class="innerCenter">
                            <h4 class="threeSectionName">
                                Koleksi Buku ZZZZ
                            </h4>
                            <div class="threeSectionDetails">
                                <button type="button" class="btn btn-warning btn-sm">Discount sampain -100%</button>
                                <p>
                                    buruan jgn sampai kehabisan njing
                                </p>
                                
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-md">
                    <div>
                        <div class="img-fluid divImgBackground threeSection wrapCenter" style="background-image:url(<?php echo base_url() ?>img/banner/banner5.jpg);">
                            <div class="innerCenter">
                                <h4 class="threeSectionName">
                                    zzzzzzzz
                                </h4>
                                <div class="threeSectionDetails">
                                    <p>
                                        piece of shit
                                    </p>
                                    <button type="button" class="btn btn-warning btn-sm">Explore now</button>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-md">
                    <div>
                        <div class="img-fluid divImgBackground threeSection wrapCenter" style="background-image:url(<?php echo base_url() ?>img/banner/banner6.jpg);">
                            <div class="innerCenter">
                                <h4 class="threeSectionName">
                                    Hanya
                                </h4>
                                <div class="threeSectionDetails">
                                    <h5 class="threeSectionName">
                                        hari ini
                                    </h5>
                                    <p>
                                        menjual harga diri lebih mudah
                                    </p>
                                    <button type="button" class="btn btn-warning btn-sm">Beli saya now!</button>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="row paddingLR50px">
                <!--SIDEBARS-->
                <div class="col-md-2  rightSideBar">
                    <div class="row sidebar">
                        <div class="list-group" style="width:100%">
                            <div class="list-group-item list-group-item-secondary titleBar">
                                <h5>Buku Terbaru.</h5>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col wrapCenter">
                                        <img src="<?php echo base_url() ?>img/placeholder.png" class="tilesHorizontalThumbNail-Small innerCenter-0" />
                                    </div>
                                    <div class="col SideBarThumbNail">
                                        <b>Nama buku gj </b>
                                        <b>****</b>
                                        Rp 1
                                        <button type="button" class="btn btn-warning">Beli</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col wrapCenter">
                                        <img src="<?php echo base_url() ?>img/placeholder.png" class="tilesHorizontalThumbNail-Small innerCenter-0" />
                                    </div>
                                    <div class="col SideBarThumbNail">
                                        <b>Nama buku gj </b>
                                        <b>****</b>
                                        Rp 1
                                        <button type="button" class="btn btn-warning">Beli</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col wrapCenter">
                                        <img src="<?php echo base_url() ?>img/placeholder.png" class="tilesHorizontalThumbNail-Small innerCenter-0" />
                                    </div>
                                    <div class="col SideBarThumbNail">
                                        <b>Nama buku gj </b>
                                        <b>****</b>
                                        Rp 1
                                        <button type="button" class="btn btn-warning">Beli</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row sidebar">
                        <div class="list-group" style="width:100%">
                            <div class="list-group-item list-group-item-warning titleBar">
                                <h5>Testimonial</h5>
                            </div>
                            <div class="list-group-item textTestimonial">
                                <div class="row wrapCenter">
                                    <div class="innerCenter-0">
                                        <p>
                                            xxxyyzzzasdasdasdsaaaa
                                            aaaaaaaaaaaaadasda
                                            dddddddddddddddsdfsdfsd
                                        </p>
                                    </div>
                                </div>
                                <div class="row wrapCenter">
                                    <div class="innerCenter innerCenter-1rem">
                                        <img src="<?php echo base_url() ?>img/face.jpg" class="rounded-circle tilesHorizontalThumbNail-Small thumbnailTestimonial" />
                                    </div>
                                    <div class="innerCenter innerCenter-1rem">
                                        <h5>Aedhelio Homo</h5>
                                        <h6><i>aku suka cowo loh</i></h6>
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--CONTENT-->
                <div class="col-md-10 highlight container mx-auto">
                    <div class="titleSection" style="margin-top:5px">
                        <h2>Terpopuler</h2>
                    </div>
                    <div class="row terpopulerChild paddingLR5percent">
                        <div class="col-md thumbVertical">
                            <div class="row wrapCenter">
                                <img src="<?php echo base_url() ?>img/placeholder.png" class="tilesVerticalThumbNail innerCenter-0" />
                            </div>
                           
                            <div class="row tilesVerticalIcons">
                                <div class="col thumbnailAction">
                                    <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                                </div>
                                <div class="col thumbnailAction">
                                    <span class="fa fa-heart-o" aria-hidden="true"></span>
                                </div>
                                <div class="col thumbnailAction">
                                    <span class="fa fa-exchange" aria-hidden="true"></span>
                                </div>
                                <div class="col thumbnailAction">
                                    <span class="fa fa-eye" aria-hidden="true"></span>
                                </div>
                            </div>
                            
                            <div class="row desc wrapCenter">
                                <div class="innerCenter-0">
                                    <h5>AAAAAAAAAAAAAAAA</h5>
                                </div>
                            </div>
                            <div class="row  wrapCenter">
                                <div class="rating innerCenter-0">
                                    *****
                                </div>
                            </div>
                            <div class="row wrapCenter">
                                <div class="price innerCenter-0">
                                    Rp 1 (Bekas)
                                </div>
                            </div>
                        </div>
                        <div class="col-md thumbVertical">
                            <div class="row wrapCenter">
                                <img src="<?php echo base_url() ?>img/placeholder.png" class="tilesVerticalThumbNail innerCenter-0" />
                            </div>
                           
                            <div class="row tilesVerticalIcons">
                                <div class="col thumbnailAction">
                                    <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                                </div>
                                <div class="col thumbnailAction">
                                    <span class="fa fa-heart-o" aria-hidden="true"></span>
                                </div>
                                <div class="col thumbnailAction">
                                    <span class="fa fa-exchange" aria-hidden="true"></span>
                                </div>
                                <div class="col thumbnailAction">
                                    <span class="fa fa-eye" aria-hidden="true"></span>
                                </div>
                            </div>
                            
                            <div class="row desc wrapCenter">
                                <div class="innerCenter-0">
                                    <h5>AAAAAAAAAAAAAAAA</h5>
                                </div>
                            </div>
                            <div class="row rating wrapCenter">
                                <div class="innerCenter-0">
                                    *****
                                </div>
                            </div>
                            <div class="row wrapCenter">
                                <div class="price innerCenter-0">
                                    Rp 1 (Bekas)
                                </div>
                            </div>
                        </div>
                        <div class="col-md thumbVertical">
                            <div class="row wrapCenter">
                                <img src="<?php echo base_url() ?>img/placeholder.png" class="tilesVerticalThumbNail innerCenter-0" />
                            </div>
                            
                            <div class="row tilesVerticalIcons">
                                <div class="col thumbnailAction">
                                    <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                                </div>
                                <div class="col thumbnailAction">
                                    <span class="fa fa-heart-o" aria-hidden="true"></span>
                                </div>
                                <div class="col thumbnailAction">
                                    <span class="fa fa-exchange" aria-hidden="true"></span>
                                </div>
                                <div class="col thumbnailAction">
                                    <span class="fa fa-eye" aria-hidden="true"></span>
                                </div>
                            </div>
                            
                            <div class="row desc wrapCenter">
                                <div class="innerCenter-0">
                                    <h5>AAAAAAAAAAAAAAAA</h5>
                                </div>
                            </div>
                            <div class="row rating wrapCenter">
                                <div class="innerCenter-0">
                                    *****
                                </div>
                            </div>
                            <div class="row wrapCenter">
                                <div class="price innerCenter-0">
                                    Rp 1 (Bekas)
                                </div>
                            </div>
                        </div>
                        <div class="col-md thumbVertical">
                            <div class="row wrapCenter">
                                <img src="<?php echo base_url() ?>img/placeholder.png" class="tilesVerticalThumbNail innerCenter-0" />
                            </div>
                            
                            <div class="row tilesVerticalIcons">
                                <div class="col thumbnailAction">
                                    <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                                </div>
                                <div class="col thumbnailAction">
                                    <span class="fa fa-heart-o" aria-hidden="true"></span>
                                </div>
                                <div class="col thumbnailAction">
                                    <span class="fa fa-exchange" aria-hidden="true"></span>
                                </div>
                                <div class="col thumbnailAction">
                                    <span class="fa fa-eye" aria-hidden="true"></span>
                                </div>
                            </div>
                            
                            <div class="row desc wrapCenter">
                                <div class="innerCenter-0">
                                    <h5>AAAAAAAAAAAAAAAA</h5>
                                </div>
                            </div>
                            <div class="row rating wrapCenter">
                                <div class="innerCenter-0">
                                    *****
                                </div>
                            </div>
                            <div class="row wrapCenter">
                                <div class="price innerCenter-0">
                                    Rp 1 (Bekas)
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="titleSection">
                        <h2>Buku Bekas terpopuler</h2>
                    </div>
                    <div class="row paddingLR50px">
                        <div class="col-md">
                            <div class="row bekasChild">
                                <div class="col-5 wrapCenter">
                                    <img src="<?php echo base_url() ?>img/placeholder.png" class="tilesHorizontalThumbNail innerCenter-0" />
                                </div>
                                <div class="col horizdescBox">
                                    <h4>Nama buku gj </h4>
                                    <blockquote>
                                        kondisi zaasasassa
                                    </blockquote>
                                    <h5>****</h5>
                                    <h5>Rp 1</h5>
                                    <button type="button" class="btn btn-warning">Beli</button>
                                </div>
                            </div>
                            <div class="row bekasChild">
                                <div class="col-5 wrapCenter">
                                    <img src="<?php echo base_url() ?>img/placeholder.png" class="tilesHorizontalThumbNail innerCenter-0" />
                                </div>
                                <div class="col horizdescBox">
                                    <h4>Nama buku gj </h4>
                                    <blockquote>
                                        kondisi zaasasassa
                                    </blockquote>
                                    <h5>****</h5>
                                    <h5>Rp 1</h5>
                                    <button type="button" class="btn btn-warning">Beli</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="row bekasChild">
                                <div class="col-5 wrapCenter">
                                    <img src="<?php echo base_url() ?>img/placeholder.png" class="tilesHorizontalThumbNail innerCenter-0" />
                                </div>
                                <div class="col horizdescBox">
                                    <h4>Nama buku gj </h4>
                                    <blockquote>
                                        kondisi zaasasassa
                                    </blockquote>
                                    <h5>****</h5>
                                    <h5>Rp 1</h5>
                                    <button type="button" class="btn btn-warning">Beli</button>
                                </div>
                            </div>
                            <div class="row bekasChild">
                                <div class="col-5 wrapCenter">
                                    <img src="<?php echo base_url() ?>img/placeholder.png" class="tilesHorizontalThumbNail innerCenter-0" />
                                </div>
                                <div class="col horizdescBox">
                                    <h4>Nama buku gj </h4>
                                    <blockquote>
                                        kondisi zaasasassa
                                    </blockquote>
                                    <h5>****</h5>
                                    <h5>Rp 1</h5>
                                    <button type="button" class="btn btn-warning">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid foot max1080p" style="color:white">
            <div class="row signup">
                <div class="col-lg-2 wrapCenter toolbar-right">
                    <div class="innerCenter innerCenter-1rem">
                        place holder berlangganan:
                    </div>
                </div>
                <div class="col-lg-7 wrapCenter toolbar-right">
                    <div class="input-group innerCenter innerCenter-1rem">
                        <input type="text" class="form-control" aria-label="">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-warning">Berlangganan</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wrapCenter toolbar-right">
                    <div class="innerCenter innerCenter-1rem" style="text-align:center">
                        Follow di:
                        <a href="#" class="fa fa-sosmed fa-facebook"></a>
                        <a href="#" class="fa fa-sosmed fa-facebook"></a>
                        <a href="#" class="fa fa-sosmed fa-facebook"></a>
                    </div>
                </div>
            </div>
            <div class="row sitemap max1080p">
                <div class="col-md">
                    <div class="sitemap-child">
                        <img src="<?php echo base_url() ?>img/logo2.png" />
                        <p>
                            <br />
                            blababalballbablasljsbaflbsaf3
                            <address>Address: Andakasa</address>
                            <address>Phone  : 0</address>
                            <address>Email: bukuku[at]bukuku[dot]com</address>
                        </p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="sitemap-child">
                        <h3>Company</h3>
                        <div style="margin-top:20px">
                            <ul>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="sitemap-child">
                        <h3>Policy Info</h3>
                        <div style="margin-top:20px">
                            <ul>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="sitemap-child">
                        <h3>Something</h3>
                        <div style="margin-top:20px">
                            <ul>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url() ?>script/handler.js"></script>
    <script src="<?php echo base_url() ?>script/main.js"></script>
</body>

</html>