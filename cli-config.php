<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

$container = require_once __DIR__ . '/bootstrap.php';

/** @var EntityManager $em */
$em = $container->get(EntityManagerInterface::class);

return ConsoleRunner::createHelperSet($em);