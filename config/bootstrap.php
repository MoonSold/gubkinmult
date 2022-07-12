<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array("src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

// database configuration parameters
$conn = array(
    'dbname' => 'halal',
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
    'user' => 'halal',
    'password'=>'',
    'host'=>'localhost'
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);