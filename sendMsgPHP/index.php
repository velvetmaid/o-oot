<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="dyninput.js"></script>
</head>

<body>
    <form action="" method="post">
        <div class="field_wrapper">
            <input placeholder="Image URL" type="text" name="photo" />
            <input placeholder="Caption" type="text" name="caption" />
            <div>
                <input placeholder="Text Button" type="text" class="custom-input-field" name="text_btn" />
                <input placeholder="Url Button" type="text" class="custom-input-field float-right" name="url_btn" />
                <a href="javascript:void(0);" class="add_input_button" title="Add field"><img src="add-icon.png" /></a>
            </div>
        </div>
        <input type="submit" name="submit" />
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $apiToken = "1924018403:AAGozbPhM0kY2stYq5M2bcNw7RUUlloYmUs";
    $data = http_build_query([
        'chat_id' => '908060423',
        'photo' => $_POST['photo'],
        'caption' => $_POST['caption'],
        'parse_mode' => 'HTML'
    ]);
    // Create keyboard
    $keyboard = json_encode([
        "inline_keyboard" => [
            [
                [
                    "text" => $_POST['text_btn'],
                    "callback_data" => $_POST['url_btn']
                ]
            ]
        ]
    ]);
    // Send keyboard
    $url = "https://api.telegram.org/bot$apiToken/sendPhoto?{$data}&reply_markup={$keyboard}";
    $res = @file_get_contents($url);
}
