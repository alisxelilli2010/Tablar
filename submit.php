<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    $data = "Ad: $name\nEmail: $email\nMesaj: $message\n\n";
    file_put_contents('data.txt', $data, FILE_APPEND);

    echo 'Məlumat uğurla yazıldı!';
}

?>