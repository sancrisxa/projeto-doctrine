<?php

use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Entity\Aluno;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$classeAluno = Aluno::class;
$dql = "SELECT COUNT(a) FROM $classeAluno a";
$query = $entityManager->createQuery($dql);
$totaAlunos = $query->getSingleScalarResult();

echo "Total de alunos: " . $totaAlunos;