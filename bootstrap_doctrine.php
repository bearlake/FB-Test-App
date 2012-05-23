<?php
// bootstrap_doctrine.php

// See :doc:`Configuration <../reference/configuration>` for up to date autoloading details.
use Doctrine\ORM\Tools\Setup;

require_once "Doctrine/ORM/Tools/Setup.php";
Setup::registerAutoloadPEAR();

// Create a simple "default" Doctrine ORM configuration for XML Mapping
$isDevMode = true;
$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => 'belcher9535',
    'dbname' => 'fbtestapp'
);

// obtaining the entity manager
$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);