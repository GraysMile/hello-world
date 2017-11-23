<?php
require __DIR__.'/vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();
$s3_bucket = getenv('S3_BUCKET');
echo $s3_bucket;