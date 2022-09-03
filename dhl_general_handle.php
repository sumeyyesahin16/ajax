<!doctype html>
<html lang="en">

<?php
include 'head.php'
?>
<script>
    function deneme(){
        $.ajax({
            "url":"https://kargokontrol.modaselvim.net:8484/api/v1/ydKargo/liste",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                "token": "857607d2377eb9b15048b37153f472da",
                "startDate": "2022-08-30",
                "type": [0, 1],
                "endDate": "2022-08-30"
            }),
            "success":function (resp){
                $("#example").empty();
                var tbl= `<table><tr><td>"${resp.data[2].id}"</td></tr></table>`;
                $("#example").append(tbl);
                document.getElementById("resp").innerHTML = localStorage.getItem("id");

            }});
    }
</script>
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

    <div class="row">
        <div class="col-1">
            <a href="javascript:void(0)" class="btn btn-outline-light text-white btn-block mt-0 mb-2 " style="background-color:#a80055">EXCEL</a>
        </div>
    </div>

    <!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-md-12 col-lg-12 mt-0 ">
            <div class="card">
                <div class="card-header" style="background-color: #a80055;height: 35px">
                    <h6 class="card-title mt-0 " style="color: white;text-align: center">DHL GENEL İŞLE TABLO</h6>
                </div>
                <div class="card-body"  >
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered table-hover text-nowrap w-100">
                            <thead>
                            <tr>
                                <th class="wd-15p" >ID-Kullanıcı</th>
                                <th class="wd-15p">Sipariş NO</th>
                                <th class="wd-20p">Tarih</th>
                                <th class="wd-20p">Takip No</th>
                                <th class="wd-15p">Tekrar</th>
                                <th class="wd-10p">Yazdır</th>
                                <th class="wd-25p">Kargo</th>
                                <th class="wd-20p">Ülke</th>
                                <th class="wd-15p">Müşteri</th>
                                <th class="wd-10p">Tutar</th>
                                <th class="wd-10p">T-Soft</th>
                                <th class="wd-25p">Not</th>
                                <th class="wd-25p">ATR</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">ID-Kullanıcı</th>
                                <th rowspan="1" colspan="1">Sipariş NO</th>
                                <th rowspan="1" colspan="1">Tarih</th>
                                <th rowspan="1" colspan="1">Takip No</th>
                                <th rowspan="1" colspan="1">Tekrar</th>
                                <th rowspan="1" colspan="1">Yazdır</th>
                                <th rowspan="1" colspan="1">Kargo</th>
                                <th rowspan="1" colspan="1">Ülke</th>
                                <th rowspan="1" colspan="1">Müşteri</th>
                                <th rowspan="1" colspan="1">Tutar</th>
                                <th rowspan="1" colspan="1">T-Soft</th>
                                <th rowspan="1" colspan="1">Not</th>
                                <th rowspan="1" colspan="1">ATR</th>
                            </tr>

                            </tfoot>

                            <tbody>

                            <tr>
                                <td class="wd-15p" id="id"></td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">
                                    <div class="d-flex justify-content-center">
                                        <div class="input-group" >
                                            <input type="text" aria-label="First name" class="form-control mt-1" style="width: 60px ;height: 30px">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <select class="form-select form-select-sm mt-1 mb-1" aria-label=".form-select-sm example" style="width: 100px;bordor-color:black">
                                            <option selected>KARGO</option>
                                            <option value="1">PTS</option>
                                            <option value="2">DHL</option>
                                            <option value="3">PTT</option>
                                            <option value="3">UPS</option>
                                        </select>

                                        <select class="form-select  form-select-sm mt-1 mb-1" aria-label=".form-select-sm example" style="width: 100px;bordor-color:black">
                                            <option selected>İHRACAT</option>
                                            <option value="1"> DEĞİL</option>
                                        </select>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <select class="form-select form-select-sm mt-1 mb-1" aria-label=".form-select-sm example" style="width: 100px;bordor-color:black">
                                            <option selected>PAKET ŞEKLİ</option>
                                            <option value="1">POŞET</option>
                                            <option value="2">KOLİ</option>
                                            <option value="3">KOLİ 4</option>
                                            <option value="2">KOLİ 5</option>
                                            <option value="3">KOLİ 6</option>
                                            <option value="2">KOLİ 7</option>
                                            <option value="3">KOLİ 8</option>
                                        </select>
                                        <input type="submit" name="degis" value="İşlendi" style="background-color: #a80055;color: white;border-style: none;border-radius: 5px">
                                    </div>
                                </td>
                                <td class="bg-danger" role="alert">2</td>
                                <td class="wd-10p">
                                    <button href="#" onclick="window.print()" class="btn btn-default-light text-white btn-block mb-2 "  style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Yazdır</button>
                                </td>
                                <td class="wd-25p">
                                    <a href="#" onclick="$.getNotesFromRest('TS120834220449')" class="btn"  style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Barkod</a>
                                    <a href="#" onclick="$.getNotesFromRest('TS120834220449')" class="btn"  style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Awb</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" color="#a80055"fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    </svg>
                                </td>
                                <td class="wd-20p">Ülke</td>
                                <td class="wd-20p">Müşteri</td>
                                <td class="wd-25p">Tutar</td>
                                <td>
                                    <a href="#" onclick="$.getNotesFromRest('TS120834220449')" class="btn"  style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">T-Soft</a>
                                </td>
                                <td class="wd-10p">
                                    <a href="#" data-toggle="modal" data-sdr-id="864921" data-sdr-neden="" data-sdr-acikla="" data-sdr-mfirma="ptt" data-sdr-iptal="0" data-sdr-tss="TS120834220449" class="btn" style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Not</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" color="#a80055" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                        <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                                    </svg>
                                </td>
                                <td class="wd-25p bg-success" >Av. Ülkesi</td>
                            </tr>
                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">
                                    <div class="d-flex justify-content-center">
                                        <div class="input-group" >
                                            <input type="text" aria-label="First name" class="form-control mt-1" style="width: 60px ;height: 30px">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <select class="form-select form-select-sm mt-1 mb-1" aria-label=".form-select-sm example" style="width: 100px;bordor-color:black">
                                            <option selected>KARGO</option>
                                            <option value="1">PTS</option>
                                            <option value="2">DHL</option>
                                            <option value="3">PTT</option>
                                            <option value="3">UPS</option>
                                        </select>

                                        <select class="form-select  form-select-sm mt-1 mb-1" aria-label=".form-select-sm example" style="width: 100px;bordor-color:black">
                                            <option selected>İHRACAT</option>
                                            <option value="1"> DEĞİL</option>
                                        </select>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <select class="form-select form-select-sm mt-1 mb-1" aria-label=".form-select-sm example" style="width: 100px;bordor-color:black">
                                            <option selected>PAKET ŞEKLİ</option>
                                            <option value="1">POŞET</option>
                                            <option value="2">KOLİ</option>
                                            <option value="3">KOLİ 4</option>
                                            <option value="2">KOLİ 5</option>
                                            <option value="3">KOLİ 6</option>
                                            <option value="2">KOLİ 7</option>
                                            <option value="3">KOLİ 8</option>
                                        </select>
                                        <input type="submit" name="degis" value="İşlendi" style="background-color: #a80055;color: white;border-style: none;border-radius: 5px">
                                    </div>
                                </td>
                                <td class="bg-success" role="alert">2</td>
                                <td class="wd-10p">
                                    <a href="#" onclick="$.getNotesFromRest('TS120834220449')" class="btn"  style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Yazdır</a>
                                </td>
                                <td class="wd-25p">
                                    <a href="#" onclick="$.getNotesFromRest('TS120834220449')" class="btn"  style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Barkod</a>
                                    <a href="#" onclick="$.getNotesFromRest('TS120834220449')" class="btn"  style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Awb</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" color="#a80055"fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    </svg>
                                </td>
                                <td class="wd-20p">Ülke</td>
                                <td class="wd-20p">Müşteri</td>
                                <td class="wd-25p">Tutar</td>
                                <td>
                                    <a href="#" onclick="$.getNotesFromRest('TS120834220449')" class="btn"  style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">T-Soft</a>

                                </td>
                                <td class="wd-10p">
                                    <a href="#" data-toggle="modal" data-sdr-id="864921" data-sdr-neden="" data-sdr-acikla="" data-sdr-mfirma="ptt" data-sdr-iptal="0" data-sdr-tss="TS120834220449" class="btn" style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Not</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" color="#a80055" fill="currentColor" class="bi bi-hand-thumbs-down-fill" viewBox="0 0 16 16">
                                        <path d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z"/>
                                    </svg>
                                </td>
                                <td class="wd-25p bg-danger" >Av. Ülkesi</td>
                            </tr>
                            <tr>
                                <td class="wd-15p">347238643876</td>
                                <td class="wd-15p">Sipariş NO</td>
                                <td class="wd-20p">Tarih</td>
                                <td class="wd-20p">
                                    <div class="d-flex justify-content-center">
                                        <div class="input-group" >
                                            <input type="text" aria-label="First name" class="form-control mt-1" style="width: 60px ;height: 30px">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <select class="form-select form-select-sm mt-1 mb-1" aria-label=".form-select-sm example" style="width: 100px;bordor-color:black">
                                            <option selected>KARGO</option>
                                            <option value="1">PTS</option>
                                            <option value="2">DHL</option>
                                            <option value="3">PTT</option>
                                            <option value="3">UPS</option>
                                        </select>

                                        <select class="form-select  form-select-sm mt-1 mb-1" aria-label=".form-select-sm example" style="width: 100px;bordor-color:black">
                                            <option selected>İHRACAT</option>
                                            <option value="1"> DEĞİL</option>
                                        </select>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <select class="form-select form-select-sm mt-1 mb-1" aria-label=".form-select-sm example" style="width: 100px;bordor-color:black">
                                            <option selected>PAKET ŞEKLİ</option>
                                            <option value="1">POŞET</option>
                                            <option value="2">KOLİ</option>
                                            <option value="3">KOLİ 4</option>
                                            <option value="2">KOLİ 5</option>
                                            <option value="3">KOLİ 6</option>
                                            <option value="2">KOLİ 7</option>
                                            <option value="3">KOLİ 8</option>
                                        </select>
                                        <input type="submit" name="degis" value="İşlendi" style="background-color: #a80055;color: white;border-style: none;border-radius: 5px">
                                    </div>
                                </td>
                                <td class="bg-danger" role="alert">2</td>
                                <td class="wd-10p">
                                    <a href="#" onclick="$.getNotesFromRest('TS120834220449')" class="btn"  style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Yazdır</a>
                                </td>
                                <td class="wd-25p">
                                    <a href="#" onclick="$.getNotesFromRest('TS120834220449')" class="btn"  style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Barkod</a>
                                    <a href="#" onclick="$.getNotesFromRest('TS120834220449')" class="btn"  style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Awb</a>
                                </td>
                                <td class="wd-20p">Ülke</td>
                                <td class="wd-20p">Müşteri</td>
                                <td class="wd-25p">Tutar</td>
                                <td>
                                    <a href="#" onclick="$.getNotesFromRest('TS120834220449')" class="btn"  style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">T-Soft</a>
                                </td>
                                <td class="wd-10p">
                                    <a href="#" data-toggle="modal" data-sdr-id="864921" data-sdr-neden="" data-sdr-acikla="" data-sdr-mfirma="ptt" data-sdr-iptal="0" data-sdr-tss="TS120834220449" class="btn" style="background-color: #a80055;color: white;border-style: none;border-radius: 5px ">Not</a>
                                </td>
                                <td class="wd-25p bg-success" >Av. Ülkesi</td>
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

<script>

</script>
</body>
</html>