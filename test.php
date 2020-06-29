<?php
//パス
$fpath = './PDF/TailorForm_チラシ_200514.pdf';
//ファイル名
$fname = 'TailorForm_チラシ_200514.pdf';

header('Content-Type: application/force-download');
header('Content-Length: '.filesize($fpath));
header('Content-disposition: attachment; filename="'.$fname.'"');
readfile($fpath);
