<?php
if (isset($_POST['submit'])) {
    $apiToken = "bot token";
    $data = [
        'chat_id' => 'your target id',
        'text' => $_POST['message']
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
        http_build_query($data));
}
?>

<html>

<body>
    <form action="" method="post">
        <input type="text" name="message" />
        <input type="submit" name="submit" />
    </form>
</body>

</html>