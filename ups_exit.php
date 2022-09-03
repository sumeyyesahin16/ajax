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
    <!-- ROW OPEN -->
    <div class="row justify-content-center">
        <div class="col-sm-10 col-md-6 mt-4">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12" >
                    <div class="card">
                        <div class="card-header " style="background-color: #a80055;height: 35px">
                            <div class="card-title"> <p style="color:white;text-align: center" >BARKOD</p></div>
                        </div>

                        <div class="card-body">
                            <div class="form-group px-15">
                                <div class="row justify-content-center p-2">
                                    <table>
                                        <tbody>
                                        <tr id="filter_col2" data-column="1" >
                                            <td align="center">
                                                <input type="text" class="column_filter form-control me-2" id="col1_filter" style="border-color:#a80055">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ROW CLOSE -->

    <!-- ROW-1 OPEN -->
    <div class="row justify-content-start">
        <div class="col-1">
            <a href="javascript:void(0)" class="btn btn-outline-light text-white btn-block mb-2 " style="background-color:#a80055">EXCEL</a>
        </div>
    </div>
    <!-- ROW-1 CLOSE -->


    <!-- ROW-2 OPEN -->
    <div class="row">
        <div class="col-md-12 col-lg-12 mt-0 ">
            <div class="card">
                <div class="card-header " style="background-color: #a80055;height: 37px">
                    <p class="card-title " style="color: white;text-align: center">UPS ÇIKIŞ TABLO</p>
                </div>
                <div class="card-body"  >
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-hover table-bordered text-nowrap">
                            <thead>
                            <tr>
                                <th class="wd-15p" name="id">ID</th>
                                <th class="wd-20p" name="barkod">Barkod No</th>
                                <th class="wd-20p" name="tarih">Tarih</th>
                                <th class="wd-15p" name="firma">Firma</th>
                            </tr>
                            </thead>

                            <tfoot>

                            <tr>
                                <th rowspan="1" colspan="1">ID</th>
                                <th rowspan="1" colspan="1"><select><option value=""></option></select></th>
                                <th rowspan="1" colspan="1">Kullanıcı</th>
                                <th rowspan="1" colspan="1">Sipariş No</th>
                            </tr>

                            </tfoot>
                            <tbody>
                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                            </tr>
                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                            </tr>
                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                            </tr>
                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                            </tr>
                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                            </tr>
                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                            </tr>
                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                            </tr>
                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                            </tr>
                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                            </tr>
                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                            </tr>
                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                            </tr>
                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                            </tr>
                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                            </tr>
                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">aaaaaO</td>
                                <td class="wd-20p">bbbb</td>
                                <td class="wd-20p">Takip No</td>
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


</body>
</html>