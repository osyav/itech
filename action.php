<head>
<link rel="stylesheet" href="my_stile.css">
</head>
<h1>Здесь вы можете просмотреть список загруженных файлов и открыть их</h1>
<?php
if(isset($_FILES["add"]))
{
    $myfile = $_FILES["add"]["tmp_name"];
    $myfile_name = $_FILES["add"]["name"];
    $upload='./files/' . $myfile_name;
    copy($_FILES['add']['tmp_name'], $upload);
}

$my_directoria = __DIR__ . "/files/";
$files = scandir($my_directoria);
foreach (array_diff($files, ['..', '.']) as $file)
    {
        echo <<< OUT
<p><b>$file</b> <a class="gradient-button" href="/ostapchuk/files/$file">Скачать</a></p>
OUT;

    }
?>

 <a class="gradient-button" href="#" onclick="history.back();return false;">Вернуться назад</a>