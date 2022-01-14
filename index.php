<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax to php</title>
</head>

<body>
    <p>IDを入力 : <input type="text" id="main" /><button id="send">送信</button></p>
    <div id="return"></div>
    <script>
        $(function() {
            $("#send").on("click", function(event) {
                let text = $("#main").val();
                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: {
                        "text": text
                    },
                    dataType: "json"
                }).done(function(data) {
                    $("#return").append('<p>' + data.text + "   " + data.app + '</p>');
                }).fail(function(XMLHttpRequest, status, e) {
                    $("#return").append('<p>' + status + '</p>');
                });
            });
        });
    </script>
</body>

</html>