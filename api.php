<!DOCTYPE html>
<html>
<body>

<script>
    var settings = {
        "url": "https://kargokontrol.modaselvim.net:8484/api/v1/ydKargo/liste",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json"
        },
        "data": JSON.stringify({
            "token": "029c170d0949d4f1750ab5e9cbdbfd29",
            "startDate": "2022-08-30",
            "endDate": "2022-08-30",
            "type": [
                0,
                1
            ]
        }),
    };

    $.ajax(settings).done(function (response) {
        console.log(response);
    });
</script>

</body>
</html>
