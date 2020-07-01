<?php
//パス
$fpath = './PDF/オアシ株式会社/a.pdf';
//ファイル名
$fname = '機密情報及び個人情報保護に関する覚書.pdf';

header('Content-Type: application/force-download');
header('Content-Length: '.filesize($fpath));
header('Content-disposition: attachment; filename="'.$fname.'"');
readfile($fpath);
