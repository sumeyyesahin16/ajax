<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
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
                    $("#response_table_id").empty();
                    var tbl= `${resp.data[5].username}`;
                    $("#response_table_id").append(tbl);
                    console.log(resp);
                }});
        }
    </script>
</head>


<body>

<button onclick="deneme()">DENEME</button>

<div id="response_table_id"></div>
</body>
</html>