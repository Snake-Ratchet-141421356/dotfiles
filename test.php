<?php
//パス
$fpath = './PDF/sample.csv';
//ファイル名
$fname = 'sample.csv';

header('Content-Type: application/force-download');
header('Content-Length: '.filesize($fpath));
header('Content-disposition: attachment; filename="'.$fname.'"');
readfile($fpath);

