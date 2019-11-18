<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connection = mysqli_connect(
    $config['db']['server'],
    $config['db']['username'],
    $config['db']['password'],
    $config['db']['name']
);

if( $connection == false )
{
    echo 'Не удалось подключиться к базе даных!<br>';
    echo mysqli_connect_error();
    exit();
}
