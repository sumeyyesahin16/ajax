<nav class="navbar navbar-expand-lg fixed-top " style="background-color:#a80055">
    <div class="container-fluid">
        <a href="index.php">
            <img src="img/icon.png" style="width: 40px" >
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color:#b8005d ;border-color: #b8005d;background-color:#b8005d">
            <span class="navbar-toggler-icon" style="color: whitesmoke"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" style="margin-left: 20px" href="export.php">İHRACAT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" style="margin-left: 20px" href="tipped.php">FİLTRELE</a>
                </li>
                <li class="nav-item dropdown" style="margin-left: 20px">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">PTS</a>
                    <ul class="dropdown-menu active" style="background-color: #eadde3" >
                        <li><a class="dropdown-item" href="pts_handle.php">PTS İŞLE</a></li>
                        <li><a class="dropdown-item" href="pts_general_handle.php">PTS GENEL İŞLE</a></li>
                        <li><a class="dropdown-item" href="handled_pts.php">İŞLENDİ PTS</a></li>
                        <li><a class="dropdown-item" href="pts_exit.php">PTS ÇIKIŞ</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown" style="margin-left: 20px">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">DHL</a>
                    <ul class="dropdown-menu active" style="background-color: #eadde3">
                        <li><a class="dropdown-item " href="dhl_handle.php">DHL İŞLE</a></li>
                        <li><a class="dropdown-item" href="dhl_general_handle.php">DHL GENEL İŞLE</a></li>
                        <li><a class="dropdown-item" href="handled_dhl.php">İŞLENDİ DHL</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown" style="margin-left: 20px">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">PTT</a>
                    <ul class="dropdown-menu active" style="background-color: #eadde3">
                        <li><a class="dropdown-item " href="ptt_handle.php">PTT İŞLE</a></li>
                        <li><a class="dropdown-item" href="ptt_general_handle.php">PTT GENEL İŞLE</a></li>
                        <li><a class="dropdown-item" href="handled_ptt.php">İŞLENDİ PTT</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown" style="margin-left: 20px">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">UPS</a>
                    <ul class="dropdown-menu active" style="background-color: #eadde3">
                        <li><a class="dropdown-item " href="ups_handle.php">UPS İŞLE</a></li>
                        <li><a class="dropdown-item" href="ups_general_handle.php">UPS GENEL İŞLE</a></li>
                        <li><a class="dropdown-item" href="handled_ups.php">İŞLENDİ UPS</a></li>
                        <li><a class="dropdown-item" href="pts_exit.php">UPS ÇIKIŞ</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown" style="margin-left: 20px">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>
                        <?php
                            include ('settings.php');
                            echo $username;
                        ?>
                    </a>
                    <ul class="dropdown-menu active" style="background-color: #eadde3">
                        <li><a class="dropdown-item " href="login.php">ÇIKIŞ</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <table cellpadding="3" cellspacing="0" border="0">
                    <tbody>
                    <tr id="filter_global">
                        <td align="center"><input type="text" class="global_filter form-control me-2" id="global_filter"></td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</nav>

