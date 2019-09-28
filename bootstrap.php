<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

// @see https://www.doctrine-project.org/projects/doctrine-dbal/en/2.9/reference/configuration.html
$connectionParams = array(
	'dbname' => 'db_teste',
	'user' => 'usr_app',
	'password' => 'teste123',
	'host' => '172.17.0.3',
	'port' => 5432,
	'driver' => 'pdo_pgsql',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
