<?php

namespace App\Providers;

use Doctrine\DBAL\Logging\EchoSQLLogger;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\Tools\Setup;

/**
 * Class EntityManagerProvider
 * @package App\Providers
 */
class EntityManagerProvider implements \ProviderInterface
{

    /**
     * @return EntityManager|mixed
     * @throws ORMException
     */
    public static function create(): EntityManager
    {
        // Создадим простоую Doctrine ORM конфигурацию для анатаций.
        $isDevMode = true;
        $proxyDir = null;
        $cache = null;
        $useSimpleAnnotationReader = false;
        $config = Setup::createAnnotationMetadataConfiguration(
            array(__DIR__ . "/../../src"),
            $isDevMode,
            $proxyDir,
            $cache,
            $useSimpleAnnotationReader
        );
        // или, если мы хотим использовать xml\yaml
        //$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
        //$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

        // конфигурационный параметры базы данных
        $conn = config('entityManager');

        // получаем EntityManager
        $entityManager = EntityManager::create($conn, $config);

        // вывод SQL запросов для дебага и профилинга
        if ($conn['echoSQLLog']) {
            $sqlLogger = new EchoSQLLogger();
            $entityManager->getConfiguration()->setSQLLogger($sqlLogger);
        }

        return $entityManager;
    }
}