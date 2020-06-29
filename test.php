<?php
//パス
$fpath = './PDF/sample.jpg';
//ファイル名
$fname = 'test.csv';

header('Content-Type: application/force-download');
header('Content-Length: '.filesize($fpath));
header('Content-disposition: attachment; filename="'.$fname.'"');
readfile($fpath);

