<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/page.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>css/icons.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!--jQuery Plugin-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.js"></script>
    <link rel="stylesheet" href="css/controls.css" />
 
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!--icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <div class="container-fluid header" style="padding:0">
        <div id="snackbar" class="max1080p"><h3></h3></div>
        <div class="menubar parentMenu">
            <div class="container-fluid max1080p">
                <div class="row">
                    <div class="col-lg-3 CenterContainer menuDecoration wrapCenter logo" id="logo">
                        <!--<div class="CenterContainer-Child" style="height:80px;width:270px;background:blue">placeholder</div>-->
                        <div class="innerCenter">
                            <img src="img/logo.png" style="width:100%" />
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
                                <div class="input-group-text" id="btnGroupAddon2">Rp 0</div>
                            </div>
                            <button type="button"  id="Keranjang" data-toggle="modal" data-target="#myModal" class="btn btn-warning">Keranjang</button>
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
                        <div class="btn-group btn-group-lg" style="border-radius:0" role="group" aria-label="toolbar">
                            <button type="button" class="btn btn-dark">Beranda</button>
                            <button type="button" class="btn btn-dark">Buku</button>
                            <button type="button" class="btn btn-dark">Forum</button>
                            <button type="button" class="btn btn-dark">Info</button>
                            <button type="button" class="btn btn-dark">Blog</button>
                        </div>
                    </div>
                    <div class="col-lg-2 toolbar-right wrapCenter2">
                        <div class="innerCenter" style="padding:0px">
                            <button type="button" class="btn btn-warning">Sign Up / Login</button>
                        </div>
                    </div>
                </div>
                <!--<div class="navbar vbottom childMenu">

                </div>-->
            </div>
        </div>
        <!--MODAL WINDOW-->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg max1080p">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Inventory</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>fucking</td>
                                    <td>Faggot</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-buttons">
                        <button type="button" class="btn btn-secondary float-left" id="ToPage"><code> E </code> Ke halaman lapak</button>
                        <button type="button" class="btn btn-secondary float-left" id="DropItem"><code> X </code> Drop yang dipilih</button>
                        <button type="button" class="btn btn-secondary float-left" id="ClearItem"><code> R </code> Kosongkan semua</button>

                        <button type="button" class="btn  btn-secondary float-right" data-dismiss="modal"><code> Esc </code> Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid content max1080p">
            <div class="row paddingLR50px">
                <!--SIDEBARS-->
                <div class="col-md-2  rightSideBar">
                    <div class="row sidebar">
                        <div class="list-group" style="width:100%">
                            <div class="list-group-item list-group-item-secondary titleBar">
                                <h5>Opsi pencarian</h5>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="list-group checkBoxGroup " id="kategoriBar">
                                        <div class="list-group-item paddingLR50px " style="padding-left:30px">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> 
                                            Bekas
                                        </div>
                                        <div class="list-group-item paddingLR50px " style="padding-left:30px">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            TrustedBuyer(TM)
                                        </div>
                                        <div class="list-group-item">
                                            <div class="dropdown">
                                                <button class="btn btn-warning dropdown-toggle" style="width:100%" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Urut berdasarkan:
                                                </button>
                                                <div class="dropdown-menu" style="width:100%" aria-labelledby="dropdownMenuButton">
                                                    <div class="dropdown-item">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Urutan menaik
                                                    </div>
                                                    <div class="dropdown-item">
                                                        Lokasi
                                                    </div>
                                                    <div class="dropdown-item">
                                                        Harga
                                                    </div>
                                                    <div class="dropdown-item">
                                                        Rating
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item wrapCenter ">
                                            <div class="innerCenter-0">
                                                <span id="LabelPrice">Batas Harga:</span>
                                                <input id="PriceSlider" type="text" data-slider-min="1" data-slider-max="100" data-slider-step="1" data-slider-value="3" />
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="dropdown" >
                                                <button class="btn btn-warning dropdown-toggle" style="width:100%" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Kategori
                                                </button> 
                                                <div class="dropdown-menu" style="width:100%" aria-labelledby="dropdownMenuButton">
                                                    <div class="dropdown-item">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Fiksi1
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Fiksi2
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Fiksi3
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Fiksi4
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Fiksi5
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Fiksi6
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Fiksi7
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="dropdown">
                                                <button class="btn btn-warning dropdown-toggle" style="width:100%" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Lokasi
                                                </button>
                                                <div class="dropdown-menu" style="width:100%" aria-labelledby="dropdownMenuButton">
                                                    <div class="dropdown-item">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Terdekat
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Sumatra
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Jawa
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Kalimantan
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Bali &Aacute; NTB, NTT
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Maluku
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Papua
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <label for="Lokasi">Spesifik:</label>
                                                        <input type="text" class="form-control" id="Lokasi">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <button class="btn btn-warning" style="width:100%" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Filter!
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                </div>
                                <div class="row">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row sidebar">
                        <div class="list-group" style="width:100%">
                            <div class="list-group-item list-group-item-warning titleBar">
                                <h5>Sponsor</h5>
                            </div>
                            <div class="list-group-item textTestimonial">
                                <div class="row wrapCenter">
                                    <div class="innerCenter-0">
                                        <blockquote>
                                            xxxyyzzzasdasdasdsaaaa
                                            aaaaaaaaaaaaadasdasffsdads
                                            dddddddddddddddsdfsdfsd
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--CONTENT-->
                <div class="col-md-10 highlight max1080p">
                    <div class="titleSection" style="margin-top:5px">
                        <h2>Hasil pencarian untuk: "{searchTerms}"</h2>
                    </div>
                    <div class="col" id="Content">
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="row sitemap max1080p" style="margin:0">
            <div class="col-md">
                <div class="sitemap-child">
                    <img src="img/logo2.png" />
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
    <script src="<?php echo base_url() ?>script/handler.js"></script>
    <script src="<?php echo base_url() ?>script/main.js"></script>
    <script src="<?php echo base_url() ?>script/inventory/DataLoader.js"></script>
    <script src="<?php echo base_url() ?>script/inventory/inventory.js"></script>
    <script>
        SliderInit();
        IntialiseTable();
    </script>
</body>

</html>