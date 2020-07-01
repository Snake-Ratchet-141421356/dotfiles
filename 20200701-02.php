<?php
//パス
$fpath = './PDF/オアシ株式会社/b.pdf';
//ファイル名
$fname = 'テーラー・フォーム.pdf';

header('Content-Type: application/force-download');
header('Content-Length: '.filesize($fpath));
header('Content-disposition: attachment; filename="'.$fname.'"');
readfile($fpath);
