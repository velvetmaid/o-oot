<?php

function sendMessage($telegram_id, $message_text, $secret_token)
{

    $url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($message_text);
    $ch = curl_init();
    $optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}

$telegram_id = $_POST['telegram_id'];
$message_text = $_POST['message_text'];

$secret_token = "bot token";
sendMessage($telegram_id, $message_text, $secret_token);
?>


<html>

<head>
    <meta charset='utf-8'>
    <title>wadagizig Telegram bots</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="content">
        <section class="content-header">
            <i class="fa fa-home">Home</i>
        </section>

        <div class="col-md-8 col-sm-8">
            <div class="box box-solid box-primary">
                <div class="box-header">
                    <h4 class="box-title"><b>Telegram Message <i class="fa fa-send"></i></b></h4>
                </div>

                <div class="box-body">
                    <form method="post" action="">
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Telegram ID</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="telegram_id" placeholder="Telegram ID">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Messages</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="message_text" placeholder="Custom Text Message">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Send <i class="fa fa-send"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>