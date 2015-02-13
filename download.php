<?php

/* 
 *  Created by Diego Castro <diego.castro@knowbi.com>
 */

$filePath=$_GET['file'];
$fileParts=explode('/',$filePath);
$fileName=$fileParts[count($fileParts)-1];
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"".$fileName."\"");
readfile($filePath);