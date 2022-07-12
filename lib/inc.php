<?php
$mysqli = new mysqli($config['host'], $config['username'], $config['password'], $config['database']);
if ($mysqli->connect_errno) { die("Koneksi Gagal..."); }

define('root','http://localhost/'.$config['folder'].'/');

function set_link($modul)
{
    $link = root.$modul."/";
    return $link;
}

function redir($modul)
{
    $link = root.$modul."/";
    echo "<script>document.location='$link'; </script>";
}

function limit_kata($string, $word_limit)
{
    $kata = explode(" ", $string);
    return implode(" ", array_splice($kata,0,$word_limit));
}
?>