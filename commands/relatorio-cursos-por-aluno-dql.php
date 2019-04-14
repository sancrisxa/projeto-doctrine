<?php

use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Doctrine\DBAL\Logging\DebugStack;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunosRepository = $entityManager->getRepository(Aluno::class);

$debugStack = new DebugStack();
$entityManager->getConfiguration()->setSQLLogger($debugStack);


$classeAluno = Aluno::class;
$dql = "SELECT aluno, telefones, cursos FROM $classeAluno aluno JOIN aluno.telefones telefones JOIN aluno.cursos cursos";
$query = $entityManager->createQuery($dql);


$alunos = $query->getResult();


foreach ($alunos as $aluno) {

    $telefones = $aluno->getTelefones()->map(function(Telefone $telefone) {

        return $telefone->getNumero();

    })->toArray();

    echo "ID: {$aluno->getId()} \n";
    echo "Nome: {$aluno->getNome()} \n";
    echo "Telefones: " . implode(",", $telefones); 




    $cursos = $aluno->getCursos();


    foreach ($cursos as $curso) {

        echo "\t ID Curso: {$curso->getId()} \n";
        echo "\t Curso: {$curso->getNome()} \n}";
        echo "\n";

    }

    echo "\n";

}

echo "\n";

foreach($debugStack->queries as $queryInfo) {

    echo $queryInfo['sql'] . "\n";

}