<?php
namespace Polidog\App\Util;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Migrations\AbstractMigration as Original;
use Doctrine\DBAL\Schema\Schema;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

abstract class AbstractMigration extends Original implements ContainerAwareInterface
{
    /**
     * @var ContainerAwareInterface
     */
    protected $container;

    /**
     * @var string
     */
    protected $connectionName;

    public function preUp(Schema $schema)
    {
        $this->skipInvalidDB();
    }

    public function preDown(Schema $schema)
    {
        $this->skipInvalidDB();
    }

    /**
     * Sets the Container.
     *
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     *
     * @api
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @throws \Doctrine\DBAL\Migrations\SkipMigrationException
     */
    protected function skipInvalidDB()
    {
        $dbName = $this->container->get('doctrine')->getConnection($this->connectionName)->getDatabase();

        $connectionName = $this->createDatabaseId($this->connection);
        $targetName = $this->createDatabaseId($this->container->get('doctrine')->getConnection($this->connectionName));

        $this->skipIf( $connectionName != $targetName, "Migration can only be executed on '{$dbName}' database (use --em={$this->connectionName}).'" );
    }

    /**
     * @param Connection $connection
     * @return string
     */
    protected function createDatabaseId(Connection $connection)
    {
        $string = "";
        $params = $connection->getParams();
        foreach (array('driver','host','port','dbname') as $key) {
            $string .= "_".$params[$key];
        }
        return $string;
    }
} 
