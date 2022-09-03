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
                                <div class="input-group">
                                    <input type="text" class="form-control mt-3" placeholder="Search for ">
                                    <span class="input-group-append">
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
            <a href="javascript:void(0)" class="btn btn-outline-light text-white btn-block mt-2 mb-2 " style="background-color:#a80055">EXCEL</a>
        </div>
    </div>
    <!-- ROW-1 CLOSE -->


    <!-- ROW-2 OPEN -->
    <div class="row">
        <div class="col-md-12 col-lg-12 mt-0 ">
            <div class="card">
                <div class="card-header" style="background-color: #a80055;height: 35px">
                    <h6 class="card-title mt-0 " style="color: white;text-align: center">PTT İŞLE TABLO</h6>
                </div>
                <div class="card-body"  >
                    <div class="table-responsive">
                        <table id="example" class="table table-striped text-nowrap w-100" ">
                            <thead>

                            <tr>
                                <th class="wd-15p">ID</th>
                                <th class="wd-15p">Sipariş NO</th>
                                <th class="wd-20p">Tarih</th>
                                <th class="wd-20p">Takip No-Durum</th>
                                <th class="wd-25p">Tekrar</th>
                                <th class="wd-15p">Açıklama</th>
                                <th class="wd-10p">Değişim Nedeni</th>
                                <th class="wd-20p">İptal</th>
                                <th class="wd-15p">Değiştir</th>
                                <th class="wd-10p">İşlem</th>
                                <th class="wd-25p">Fatura</th>
                                <th class="wd-10p">Kargo</th>
                                <th class="wd-25p">Notlar</th>
                                <th class="wd-10p">İl</th>
                                <th class="wd-25p">İlçe</th>
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
                                <th rowspan="1" colspan="1">E-Arşiv</th>
                                <th rowspan="1" colspan="1">Teslim Tarihi</th>
                                <th rowspan="1" colspan="1">Teslim Tarihi</th>
                                <th rowspan="1" colspan="1">Teslim Tarihi</th>
                                <th rowspan="1" colspan="1">Teslim Tarihi</th>
                            </tr>

                            </tfoot>
                            <tbody>
                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">
                                    <input type="hidden" name="tsid" value="TS100834210347" required="">
                                    <input class="tsmi takip_  " type="text" name="takip" value="" required="">
                                    <input type="text" class="d-flex mt-1 " name="firma" value="ptt" required="">
                                    <input type="button" class="mt-1" onclick="$.yapistir('')" value="Yapıştır"  style="background-color: #a80055;color: white;border-style: none;border-radius: 5px " >
                                    <input type="submit" name="degis" value="İşlendi" style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">
                                </td>
                                <td class="bg-danger" role="alert">2</td>
                                <td class="wd-10p">Açıklama</td>
                                <td class="wd-25p">Değişim Nedeni</td>
                                <td class="wd-20p">İptal</td>
                                <td class="wd-20p">Değiştir</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-sdr-id="864921" data-sdr-neden="" data-sdr-acikla="" data-sdr-mfirma="ptt" data-sdr-iptal="0" data-sdr-tss="TS120834220449" class="btn" style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Değiştir</a>
                                </td>
                                <td><a href="#" onclick="$.yazdir('TS120834220449')" class="btn"  style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Yazdır</a></td>
                                <td><a href="#" onclick="$.yazdir2('https://kargo.modaselvim.com/barcode/TS120834220449/693a4b57-f582-4615-9e77-35090b7ce8b0')" class="btn "  style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Barkod</a></td>
                                <td>
                                    <a href="#" onclick="$.getNotesFromRest('TS120834220449')" class="btn"  style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Not</a>
                                </td>
                                <td class="wd-15p">İl</td>
                                <td class="wd-15p">İlçe</td>

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
                                <td class="wd-10p">T-Soft</td>
                                <td class="wd-25p">Av. Ülkesi</td>
                                <td class="wd-25p">Not</td>
                                <td class="wd-25p">
                                    <a href="#" data-toggle="modal" data-sdr-id="864921" data-sdr-neden="" data-sdr-acikla="" data-sdr-mfirma="ptt" data-sdr-iptal="0" data-sdr-tss="TS120834220449" class="btn" style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Not</a>
                                </td>
                                <td class="wd-10p">T-Soft</td>
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
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
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
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
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
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
                            </tr> <tr>
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
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
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
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
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
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
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
                                <td class="wd-25p">Not</td>
                                <td class="wd-10p">T-Soft</td>
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
                                <td class="wd-25p">Not</td>
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

