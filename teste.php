<?php

use Alura\Doctrine\Helper\EntityManagerFActory;

require_once __DIR__ . '/vendor/autoload.php';

$entityManagerFacotry = new EntityManagerFActory();

$entityManager = $entityManagerFacotry->getEntityManager();

var_dump($entityManager->getConnection());