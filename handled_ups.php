<!doctype html>
<html lang="en">

<?php
include 'head.php'
?>

<body>

<?php
include 'menu.php'
?>

<header>
    <!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-md-12 col-lg-12 mt-5 ">
            <div class="card">
                <div class="card-header" style="background-color: #a80055;height: 35px">
                    <h6 class="card-title" style="color: white;text-align: center">İŞLENDİ UPS TABLO</h6>
                </div>
                <div class="card-body"  >
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-hover table-bordered text-nowrap w-100" >
                            <thead>

                            <div class="row justify-content-start">
                                <div class="col-1">
                                    <a href="javascript:void(0)" class="btn btn-outline-light text-white btn-block mb-2 " style="background-color:#a80055">EXCEL</a>
                                </div>
                            </div>
                            <tr>
                                <th class="wd-15p">ID</th>
                                <th class="wd-15p">Adet</th>
                                <th class="wd-20p">Kullanıcı</th>
                                <th class="wd-20p">Sipariş NO</th>
                                <th class="wd-15p">Tarih</th>
                                <th class="wd-10p">Firma</th>
                                <th class="wd-25p">Takip NO</th>
                                <th class="wd-20p">Durum</th>
                                <th class="wd-15p">Tekrar</th>
                                <th class="wd-10p">Tekrar Tarih</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">ID</th>
                                <th rowspan="1" colspan="1"><select><option value=""></option></select></th>
                                <th rowspan="1" colspan="1">Kullanıcı</th>
                                <th rowspan="1" colspan="1">Sipariş No</th>
                                <th rowspan="1" colspan="1">Tarih</th>
                                <th rowspan="1" colspan="1">Firma</th>
                                <th rowspan="1" colspan="1">Takip No</th>
                                <th rowspan="1" colspan="1"><select><option value=""></option></select></th>
                                <th rowspan="1" colspan="1">Tekrar</th>
                                <th rowspan="1" colspan="1">Tekrar Tarih</th>
                            </tr>

                            </tfoot>
                            <tbody>
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
    <!-- ROW-1 CLOSED -->

</header>


<?php
include 'footer.php'
?>


<?php
include 'script.php'
?>



</body>
</html>