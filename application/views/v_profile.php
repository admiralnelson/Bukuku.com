<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/page.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>css/icons.css" />


    <script scr="<?php echo base_url() ?>script/gallery_jQueryPlugin.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- plugin -->
    <script type="text/javascript" src="<?php echo base_url() ?>script/slider.js"></script>
    <style>
        .jssorl-009-spin img{animation-name:jssorl-009-spin;animation-duration:1.6s;animation-iteration-count:infinite;animation-timing-function:linear}@keyframes jssorl-009-spin{from{transform:rotate(0);}to{transform:rotate(360deg);}}.jssora106{display:block;position:absolute;cursor:pointer}.jssora106 .c{fill:#fff;opacity:.3}.jssora106 .a{fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10}.jssora106:hover .c{opacity:.5}.jssora106:hover .a{opacity:.8}.jssora106.jssora106dn .c{opacity:.2}.jssora106.jssora106dn .a{opacity:1}.jssora106.jssora106ds{opacity:.3;pointer-events:none}.jssort101 .p{position:absolute;top:0;left:0;box-sizing:border-box;background:#000}.jssort101 .p .cv{position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1}.jssort101 .a{fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden}.jssort101 .p:hover .cv,.jssort101 .p.pdn .cv{border:none;border-color:transparent}.jssort101 .p:hover{padding:2px}.jssort101 .p:hover .cv{background-color:rgba(0,0,0,6);opacity:.35}.jssort101 .p:hover.pdn{padding:0}.jssort101 .p:hover.pdn .cv{border:2px solid #fff;background:none;opacity:.35}.jssort101 .pav .cv{border-color:#fff;opacity:.35}.jssort101 .pav .a,.jssort101 .p:hover .a{visibility:visible}.jssort101 .t{position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6}.jssort101 .pav .t,.jssort101 .p:hover .t{opacity:1}
    </style>
    
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!--icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
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
                                <div class="input-group-text" id="btnGroupAddon2">Rp 0</div>
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
                            <a href="<?php echo base_url() ?>Profil"><button type="button" class="btn btn-warning"><?php echo $this->session->userdata('nama') ?></button></a>
                            
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
            <div class="row">
                <div class="col-sm-10 col-md-10 col-lg-10" style="margin-top: 10px">
                    <!--CONTENT-->
                    <h3>Edit Profile</h3>
                    <?php
                        $atribut = array(
                        'class' => 'form-group',
                        'style' => 'margin: 0 auto;'
                    );
                        echo form_open("Profile/edit", $atribut);

                    ?>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo($NAMA); ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo($EMAIL); ?>" required>
                    </div>
                     <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo($ALAMAT); ?>" required>
                    </div>
                     <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo($USERNAME); ?>" readonly>
                    </div>
                     <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" name="password" type="Password" value="<?php echo($PASSWORD); ?>" >
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-warning">Update Profile</button>
                        <?php echo $this->session->flashdata('error') ?>
                    </div>
                    
                </form>
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
                    <div class="innerCenter innerCenter-1rem" style="text-align:middle">
                        Follow di:
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-facebook"></a>

                    </div>
                </div>
            </div>
            <div class="row sitemap max1080p">
                <div class="col-md">
                    <div class="sitemap-child">
                        <img src="<?php echo base_url() ?>img/logo.png" />
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