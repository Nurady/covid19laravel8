<?php

$targetFolder = __DIR__.'/../covid19/storage/app/public';
$linkFolder = __DIR__.'/storage';
symlink($targetFolder,$linkFolder);

echo 'Symlink process successfully completed';