<!DOCTYPE html>
<html lang="tr">

<?php
include 'head.php'
?>
<script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script>
    function ajaxPostFunc() {
        $.ajax({
            url:"https://kargokontrol.modaselvim.net:8484/api/v1/ydKargo/liste",
            method: "POST",
            timeout: 0,
            headers: {
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                token: "857607d2377eb9b15048b37153f472da",
                startDate: "2022-08-30",
                type: [0, 1],
                endDate: "2022-08-30"
            }),

            success:function(resp){
                $("#example_tbody").empty();

                    var degisken = `
                     <tr>
                    <td>${resp.data[1].id}</td>
                    <td>${resp.data[1].username}</td>
                    <td>${resp.data[1].Cargo}</td>
                    <td>${resp.data[1].CargoId}</td>

                    </tr>
                `;
                    $("#example_tbody").append(degisken);
                    console.log(resp);
                }

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

    <a href="#" class="btn btn-warning" onclick="ajaxPostFunc()">Tıkla</a>
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
                                <th class="wd-15p" id="Cargo">Kargo</th>
                                <th class="wd-15p" id="CargoId">Kargo ID</th>
                            </tr>
                            </thead>

                            <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">ID</th>
                                <th rowspan="1" colspan="1">Kullanıcı</th>
                                <th rowspan="1" colspan="1">Kargo</th>
                                <th rowspan="1" colspan="1">Kargo ID</th>
                            </tr>
                            </tfoot>
                            <tbody id="example_tbody">

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