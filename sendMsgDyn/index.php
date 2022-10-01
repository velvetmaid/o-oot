<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="dyninput.js"></script>
    <title>Dynamic Input</title>
</head>

<body>

    <div class="container d-flex justify-content-center">
        <form method="post">
            <div class="field_wrapper">
                <div class="form-row">
                    <div class="form-group col-6">
                        <input class="form-control" placeholder="Image URL" type="text" name="photo" />
                    </div>
                    <div class="form-group col-6">
                        <input class="form-control" placeholder="Caption" type="text" name="caption" />
                    </div>
                </div>
                <div class="container d-flex justify-content-end p-3">
                    <a href="javascript:void(0);" class="add_input_button" title="Add field"><img src="add-icon.png" /></a>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <input placeholder="Text Button" type="text" class="form-control" name="text_btn" />
                    </div>
                    <div class="form-group col-6">
                        <input placeholder="Url Button" type="text" class="form-control" name="url_btn" />
                    </div>
                </div>
            </div>
            <input class="btn btn-info" type="submit" name="submit" />
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $apiToken = '...';
    $data = http_build_query([
        'chat_id' => '...',
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
    // Send messages
    $url = "https://api.telegram.org/bot$apiToken/sendPhoto?{$data}&reply_markup={$keyboard}";
    $res = @file_get_contents($url);
}
?>