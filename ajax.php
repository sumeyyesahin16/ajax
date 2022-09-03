<script>
    var settings = {"url": "https://kargokontrol.modaselvim.net:8484/api/v1/ydKargo/liste",
        "method": "POST",
        "timeout": 0,
        "data": "{"token"" +
            ":"d70562a227ef7f8431ba954a345aa285\",   "startDate": "2022-08-30",    "endDate\": \"2022-08-30\",\r\n    \"type\": \"1\"\r\n}",
    };

    $.ajax(settings).done(function (response) {
        console.log(response);
    });
</script>
