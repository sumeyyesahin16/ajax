<html>
<head>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                ajax: "url:https://kargokontrol.modaselvim.net:8484/api/v1/ydKargo/liste",
                method: "POST",
                timeout: 0,
                headers: {
                    "Content-Type": "application/json"
                },
                data: JSON.stringify({
                    "token": "857607d2377eb9b15048b37153f472da",
                    "startDate": "2022-08-30",
                    "type": [0, 1],
                    "endDate": "2022-08-30"
                }),
                document.getElementById("example").innerHTML = localStorage.getItem("username");

            });
        });
    </script>
</head>


<body>

<table id="example" class="display" style="width:100%">
    <thead>
    <tr>
        <th>Username</th>
        <th>ID</th>
        <th>Cargo</th>
        <th>CargoId</th>

    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>Username</th>
        <th>ID</th>
        <th>Cargo</th>
        <th>CargoId</th>
    </tr>
    </tfoot>
    <tbody id="demo">

    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</body>
</html>