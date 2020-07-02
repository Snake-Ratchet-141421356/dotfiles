<?php
//パス
$fpath = './png/test.png';
//ファイル名
$fname = 'Demo_RPA+テレワークBWG.png';

header('Content-Type: application/force-download');
header('Content-Length: '.filesize($fpath));
header('Content-disposition: attachment; filename="'.$fname.'"');
readfile($fpath);
