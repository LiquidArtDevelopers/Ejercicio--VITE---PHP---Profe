<?php

$footerIncludeLang = $lang ?? env('LANG_DEFAULT', 'es');
$footerIncludePath = app_path('includes/' . $footerIncludeLang . '/footer.php');

if (!is_file($footerIncludePath)) {
    $footerIncludePath = app_path('includes/' . env('LANG_DEFAULT', 'es') . '/footer.php');
}

require $footerIncludePath;
