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
                        <div class="card-header" style="background-color: #a80055;height: 35px">
                            <div class="card-title"> <h6 style="color:white;text-align: center" >BARKOD</h6></div>
                        </div>
                        <div class="card-body">
                            <div class="form-group px-15">
                                <div class="row justify-content-center p-2">
                                <table>
                                    <tbody>
                                    <tr id="filter_col7" data-column="6" >
                                        <td align="center">
                                            <input type="text" class="column_filter form-control me-2" id="col6_filter" style="border-color:#a80055">
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
            <a href="javascript:void(0)" class="btn btn-outline-light text-white btn-block mb-2 "  style="background-color:#a80055">EXCEL</a>
        </div>
    </div>
    <!-- ROW-1 CLOSE -->

    <!-- ROW-2 OPEN -->
    <div class="row">
        <div class="col-md-12 col-lg-12 mt-0 ">
            <div class="card">
                <div class="card-header" style="background-color: #a80055 ;height: 35px">
                    <h6 class="card-title mt-0 " style="color: white;text-align: center" >DHL ????LE TABLO</h6>
                </div>
                <div class="card-body"  >
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-hover table-bordered text-nowrap w-100" >
                            <thead>

                            <tr>
                                <th class="wd-15p">ID</th>
                                <th class="wd-15p">Sipari?? NO</th>
                                <th class="wd-20p">Tarih</th>
                                <th class="wd-20p">Takip No</th>
                                <th class="wd-20p">Tekrar</th>
                                <th class="wd-15p">Yazd??r</th>
                                <th class="wd-10p">Kargo</th>
                                <th class="wd-20p">??lke</th>
                                <th class="wd-15p">M????teri</th>
                                <th class="wd-10p">Tutar</th>
                                <th class="wd-25p">Not</th>
                                <th class="wd-10p">T-Soft</th>
                                <th class="wd-25p">Av. ??lkesi</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">ID</th>
                                <th rowspan="1" colspan="1">Sipari?? No</th>
                                <th rowspan="1" colspan="1">Tarih</th>
                                <th rowspan="1" colspan="1">Takip No</th>
                                <th rowspan="1" colspan="1">Tekrar</th>
                                <th rowspan="1" colspan="1">Yazd??r</th>
                                <th rowspan="1" colspan="1">
                                    <select>
                                        <option></option>
                                    </select>
                                </th>
                                <th rowspan="1" colspan="1">??lke</th>
                                <th rowspan="1" colspan="1">M????teri</th>
                                <th rowspan="1" colspan="1">Tutar</th>
                                <th rowspan="1" colspan="1">Not</th>
                                <th rowspan="1" colspan="1">T-Soft</th>
                                <th rowspan="1" colspan="1">Av. ??lkesi</th>

                            </tr>

                            </tfoot>

                            <tbody>
                            <tr>
                                <td class="wd-15p" id="id"></td>
                                <td class="wd-15p" id="user_id"></td>
                                <td class="wd-20p" id="Cargo"></td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">
                                    <a href="#" data-toggle="modal" data-sdr-id="864921" data-sdr-neden="" data-sdr-acikla="" data-sdr-mfirma="ptt" data-sdr-iptal="0" data-sdr-tss="TS120834220449" class="btn" style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Yazd??r</a>
                                </td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">??lke</td>
                                <td class="wd-15p">M????teri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">
                                    <a href="#" data-toggle="modal" data-sdr-id="864921" data-sdr-neden="" data-sdr-acikla="" data-sdr-mfirma="ptt" data-sdr-iptal="0" data-sdr-tss="TS120834220449" class="btn" style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Not</a>
                                </td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-10p">T-Soft</td>
                            </tr>
                            <tr>
                                <td class="wd-15p" id="id"></td>
                                <td class="wd-15p">Sipari?? NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">
                                    <input type="hidden" name="tsid" value="TS100834210347" required="">
                                    <input class="tsmi takip_  " type="text" name="takip" value="" required="">
                                    <input type="text" class="d-flex mt-1 " name="firma" value="ptt" required="">
                                    <input type="button" class="mt-1" onclick="$.yapistir('')" value="Yap????t??r"  style="background-color: #a80055;color: white;border-style: none;border-radius: 5px " >
                                    <input type="submit" name="degis" value="????lendi" style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">
                                </td>
                                <td class="bg-danger" role="alert">2</td>
                                <td class="wd-10p">A????klama</td>
                                <td class="wd-25p">De??i??im Nedeni</td>
                                <td class="wd-20p">??ptal</td>
                                <td class="wd-20p">De??i??tir</td>
                                <td class="wd-20p">Tutar</td>
                                <td><a href="#" onclick="$.yazdir('TS120834220449')" class="btn"  style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Yazd??r</a></td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-10p">T-Soft</td>


                            </tr>

                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">Sipari?? NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazd??r</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">??lke</td>
                                <td class="wd-15p">M????teri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-10p">T-Soft</td>

                            </tr>

                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipari?? NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazd??r</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">??lke</td>
                                <td class="wd-15p">M????teri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-10p">T-Soft</td>

                            </tr>
                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">Sipari?? NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazd??r</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">??lke</td>
                                <td class="wd-15p">M????teri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-10p">T-Soft</td>

                            </tr>
                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipari?? NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazd??r</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">??lke</td>
                                <td class="wd-15p">M????teri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-10p">T-Soft</td>

                            </tr>
                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">Sipari?? NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazd??r</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">??lke</td>
                                <td class="wd-15p">M????teri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-10p">T-Soft</td>

                            </tr>
                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipari?? NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazd??r</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">??lke</td>
                                <td class="wd-15p">M????teri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-10p">T-Soft</td>

                            </tr>
                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">Sipari?? NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazd??r</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">??lke</td>
                                <td class="wd-15p">M????teri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-10p">T-Soft</td>

                            </tr>
                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipari?? NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazd??r</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">??lke</td>
                                <td class="wd-15p">M????teri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-10p">T-Soft</td>

                            </tr>
                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">Sipari?? NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazd??r</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">??lke</td>
                                <td class="wd-15p">M????teri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-10p">T-Soft</td>

                            </tr>
                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipari?? NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazd??r</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">??lke</td>
                                <td class="wd-15p">M????teri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-10p">T-Soft</td>

                            </tr>
                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">Sipari?? NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazd??r</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">??lke</td>
                                <td class="wd-15p">M????teri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-10p">T-Soft</td>

                            </tr>
                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipari?? NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yc</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">??lke</td>
                                <td class="wd-15p">M????teri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-10p">T-Soft</td>

                            </tr>
                            <tr>
                                <td class="wd-15p">8734282872894</td>
                                <td class="wd-15p">aaaaaO</td>
                                <td class="wd-20p">bbbb</td>
                                <td class="wd-20p">Takip No</td>
                                <td class="wd-15p">Yazd??r</td>
                                <td class="wd-10p">Kargo</td>
                                <td class="wd-25p">Tekrar</td>
                                <td class="wd-20p">??lke</td>
                                <td class="wd-15p">M????teri</td>
                                <td class="wd-10p">Tutar</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-10p">T-Soft</td>

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