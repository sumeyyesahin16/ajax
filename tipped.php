<!DOCTYPE html>
<html lang="tr">

<?php
include 'head.php'
?>
<script>
    function experiment(){
        $.ajax({"url": "https://kargokontrol.modaselvim.net:8484/api/v1/ydKargo/liste",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json"
                },
                "data": JSON.stringify({
                    "token": "857607d2377eb9b15048b37153f472da",
                    "startDate": "2022-08-30",
                    "endDate": "2022-08-30",
                    "type": [0, 1]
                }),
                columns: [
                    { data: 'id' },
                    { data: 'username' },
                    { data: 'tarih' },
                    { data: 'TS'},
                    { data: 'guncelletarih' },
                    { data: 'firma' },
                    { data: 'takipno' },
                    { data: 'durum' },
                    { data: 'tekrar' },
                    { data: 'cikis_tarih'},

                ],
        });
        });
    }
</script>

<body>

<?php
include 'menu.php'
?>

<header>
    <!-- ROW OPEN -->
    <div class="row justify-content-center">
        <div class="col-sm-10 col-md-4 " >
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 mt-5" >
                    <div class="card">
                        <div class="card-header" style="background-color: #eadde3 ;height: 35px;border-style: none">
                            <div class="card-title"><h6 style="color:#a80055;text-align: center">KARGO</h6></div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <form class="navbar-form navbar-left" role="search" method="post">
                                    <div class="form-group">
                                        <input required="" type="date" class="form-control "  id="maxDate" name="minDate" min="01.01.2017">
                                        <input required="" type="date" class="form-control mt-2" id="minDate" name="maxDate" min="01.01.2017">

                                    </div>
                                    <button type="submit" class="btn btn-default-light  mt-2" name="tipped" style="background-color:#eadde3;color:#a80055 " >Getir</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW CLOSE -->
    <!--
    <div class="row justify-content-start  mt-2">
        <div class="col-1">
            <a href="javascript:void(0)" class="btn btn-outline-light text-white btn-block mb-2 " style="background-color:#a80055">EXCEL</a>
        </div>
    </div>
    -->


    <button id="aktar" class="btn btn-default-light btn-block mb-2 " style="background-color:#eadde3;color:#a80055 " >Excel'e Aktar</button>




    <!-- ROW-2 OPEN -->
    <div class="row">
        <div class="col-md-12 col-lg-12 mt-0 ">
            <div class="card">
                <div class="card-header" style="background-color: #eadde3;height: 35px;border-style: none">
                    <h6 class="card-title " style="color: #a80055;text-align: center">FİLTRELEME SONUCU</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table id="example" class="table table-striped table-hover table-bordered display w-100 ">

                            <thead>
                            <tr>
                                <th class="wd-15p" id="id">ID</th>
                                <th class="wd-15p" id="username">Kullanıcı</th>
                                <th class="wd-20p" >Çıkış Tarihi</th>
                                <th class="wd-20p">Sipariş No</th>
                                <th class="wd-15p">Tarih</th>
                                <th class="wd-10p">Firma</th>
                                <th class="wd-25p">Takip No</th>
                                <th class="wd-20p">Durum</th>
                                <th class="wd-15p">Tekrar</th>
                                <th class="wd-10p">Tekrar Tarihi</th>
                                <th class="wd-25p">E-Arşiv</th>
                                <th class="wd-10p">Teslim Tarihi</th>
                                <th class="wd-25p">ETGB</th>
                                <th class="wd-25p">ÜLKE</th>
                                <th class="wd-10p">TUTAR</th>
                                <th class="wd-25p">PAKET</th>
                                <th class="wd-25p">Av Ülkesi</th>
                                <th class="not">Not</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">ID</th>
                                <th rowspan="1" colspan="1">Kullanıcı</th>
                                <th rowspan="1" colspan="1">Çıkış Tarihi</th>
                                <th rowspan="1" colspan="1">Sipariş Tarihi</th>
                                <th rowspan="1" colspan="1">Sipariş No</th>
                                <th rowspan="1" colspan="1">Tarih</th>
                                <th rowspan="1" colspan="1">Firma</th>
                                <th rowspan="1" colspan="1">Takip No</th>
                                <th rowspan="1" colspan="1">Durum</th>
                                <th rowspan="1" colspan="1">Tekrar</th>
                                <th rowspan="1" colspan="1">E-Arşiv</th>
                                <th rowspan="1" colspan="1">Teslim Tarihi</th>
                                <th rowspan="1" colspan="1">ETGB</th>
                                <th rowspan="1" colspan="1">Ülke</th>
                                <th rowspan="1" colspan="1">TUTAR</th>
                                <th rowspan="1" colspan="1">Paket</th>
                                <th rowspan="1" colspan="1">Av. Ülkesi</th>
                                <th class="wd-25p">Not</th>
                            </tr>

                            </tfoot>
                            <tbody>
                            <tr>
                                <td class="wd-15p  user-select-all" id="id" ></td>
                                <td class="wd-15p  user-select-all" id="TS"></td>
                                <td class="wd-20p  user-select-all" id="tarih"></td>
                                <td class="wd-20p  user-select-all" id="takipno"></td>
                                <td class="wd-15p  user-select-all" id="print"></td>
                                <td class="wd-10p  user-select-all" id="Cargo"></td>
                                <td class="wd-25p  user-select-all" id="tekrar"></td>
                                <td class="wd-20p  user-select-all" id="durum"></td>
                                <td class="wd-15p  user-select-all" id="customer">Müşteri</td>
                                <td class="wd-10p  user-select-all" id="OrderPriceTotal"></td>
                                <td class="wd-25p  user-select-all" >
                                    <button id="yazdir" href="#" onclick="window.print()" class="btn btn-default-light text-white btn-block mb-2 "  style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Yazdır</button>
                                </td>
                                <td class="wd-10p  user-select-all">T-Soft</td>
                                <td class="wd-25p  user-select-all" id="OrderStatus"></td>
                                <td class="wd-10p  user-select-all">İspanya</td>
                                <td class="wd-25p  user-select-all">Not</td>
                                <td class="wd-10p  user-select-all">T-Soft</td>
                                <td class="wd-25p  user-select-all">Av. Ülkesi</td>
                                <td class="wd-25p ">
                                    <button class="btn text-white " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="background-color: #a80055">Not</button>

                                    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header text-white user-select-none" style="background-color: #a80055">
                                            <h5 class="offcanvas-title" id="offcanvasRightLabel">NOTLAR</h5>
                                            <button type="button" class="btn-close btn-light" data-bs-dismiss="offcanvas" aria-label="Close" style="color: white"></button>
                                        </div>
                                        <div class="offcanvas-body user-select-none" style="background-color: #fcf5f8 ">
                                            <div class="row justify-content-center">
                                            <div class="card text-bg-primary mb-3 mt-3" style="max-width: 18rem;">
                                                <div class="card-header">Header</div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Primary card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                                <div class="card text-bg-primary mb-3 mt-3" style="max-width: 18rem;">
                                                    <div class="card-header">Header</div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Primary card title</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                                <div class="card text-bg-primary mb-3 mt-3" style="max-width: 18rem;">
                                                    <div class="card-header">Header</div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Primary card title</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                                <div class="card text-bg-primary mb-3 mt-3" style="max-width: 18rem;">
                                                    <div class="card-header">Header</div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Primary card title</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">kezban.ozel</td>
                                <td class="wd-20p" type="date">16.08.2022</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">
                                    <a href="#" data-toggle="modal" data-sdr-id="864921" data-sdr-neden="" data-sdr-acikla="" data-sdr-mfirma="ptt" data-sdr-iptal="0" data-sdr-tss="TS120834220449" class="btn" style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Not</a>
                                </td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">Ülke</td>
                                <td class="wd-15p">Müşteri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p" style="">Av. Ülkesi</td>
                                <td class="wd-25p">
                                    <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="background-color: #a80055">Not</button>
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">

                                        </div>
                                    </div>

                                </td>

                            </tr>
                            <tr>
                                <td class="wd-15p user-select-all">347238643876</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p" type="date">15.08.2022</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazdır</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">0</td>
                                <td class="wd-15p">Müşteri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-25p">
                                    <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="background-color: #a80055">Not</button>
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            ...
                                        </div>
                                    </div>

                                </td>

                            </tr>
                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">15.08.2022</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazdır</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">Ülke</td>
                                <td class="wd-15p">Müşteri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-25p">
                                    <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="background-color: #a80055">Not</button>
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            ...
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">09.08.2022</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazdır</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">Ülke</td>
                                <td class="wd-15p">Müşteri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-25p">
                                    <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="background-color: #a80055">Not</button>
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            ...
                                        </div>
                                    </div>

                                </td>

                            </tr>
                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">10.08.2022</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazdır</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">Ülke</td>
                                <td class="wd-15p">Müşteri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-25p">
                                    <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="background-color: #a80055">Not</button>
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            ...
                                        </div>
                                    </div>

                                </td>

                            </tr>
                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">14.08.2022</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazdır</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">Ülke</td>
                                <td class="wd-15p">Müşteri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-25p">
                                    <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="background-color: #a80055">Not</button>
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            ...
                                        </div>
                                    </div>

                                </td>

                            </tr>
                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">17.08.2022</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazdır</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">Ülke</td>
                                <td class="wd-15p">Müşteri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-25p">
                                    <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="background-color: #a80055">Not</button>
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            ...
                                        </div>
                                    </div>

                                </td>

                            </tr>
                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazdır</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">Ülke</td>
                                <td class="wd-15p">Müşteri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-25p">
                                    <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="background-color: #a80055">Not</button>
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            ...
                                        </div>
                                    </div>

                                </td>

                            </tr>
                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazdır</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">Ülke</td>
                                <td class="wd-15p">Müşteri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-25p">
                                    <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="background-color: #a80055">Not</button>
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            ...
                                        </div>
                                    </div>

                                </td>

                            </tr>
                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazdır</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">Ülke</td>
                                <td class="wd-15p">Müşteri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-25p">
                                    <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="background-color: #a80055">Not</button>
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            ...
                                        </div>
                                    </div>

                                </td>

                            </tr>
                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazdır</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">Ülke</td>
                                <td class="wd-15p">Müşteri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">
                                    <button href="#" onclick="window.print()" class="btn btn-default-light text-white btn-block mb-2 "  style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Yazdır</button>
                                </td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-25p">
                                    <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="background-color: #a80055">Not</button>
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            ...
                                        </div>
                                    </div>

                                </td>

                            </tr>
                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yc</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">Ülke</td>
                                <td class="wd-15p">Müşteri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-25p">
                                    <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="background-color: #a80055">Not</button>
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            ...
                                        </div>
                                    </div>

                                </td>

                            </tr>
                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">aaaaaO</td>
                                <td class="wd-20p">bbbb</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazdır</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">Ülke</td>
                                <td class="wd-15p">Müşteri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-25p" id="not">
                                    <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="background-color: #a80055">Not</button>
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            ...
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- TABLE WRAPPER -->
            </div>
            <!-- SECTION WRAPPER -->
        </div>
    </div>
    <!-- ROW-2 CLOSED -->


</header>

<?php
include 'footer.php'
?>
<?php
include 'script.php'
?>


<!-- Html to Jquery -->
</body>

</html>