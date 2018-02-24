<?php

use Doctrine\MongoDB\Connection;
use Doctrine\ODM\MongoDB\Configuration;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;

if ( ! file_exists($file = __DIR__.'/../vendor/autoload.php')) {
    throw new RuntimeException('Install dependencies to run this script.');
}

$loader = require_once $file;
$loader->add('Documents', __DIR__);

$connection = new Connection('mongodb://192.168.30.168:27017');

$config = new Configuration();
$config->setProxyDir(__DIR__ . '/../cache/Proxies');
$config->setProxyNamespace('Proxies');
$config->setHydratorDir(__DIR__ . '/../cache/Hydrators');
$config->setHydratorNamespace('Hydrators');
$config->setDefaultDB('doctrine_odm');
$config->setMetadataDriverImpl(AnnotationDriver::create(__DIR__ . '/model'));

AnnotationDriver::registerAnnotationClasses();

$dm = DocumentManager::create($connection, $config);
