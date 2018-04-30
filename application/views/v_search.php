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
        
        <?php include 'header.php'; ?>

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
                        <h2 id="result-txt">Hasil pencarian untuk: ""</h2>
                    </div>
                    <div class="col" id="Content">
                        
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php' ?>

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