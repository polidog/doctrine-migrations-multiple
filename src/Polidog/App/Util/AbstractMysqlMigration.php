<?php

namespace Polidog\App\Util;


abstract class AbstractMysqlMigration extends AbstractMigration
{
    /**
     * @var string
     */
    protected $connectionName = "mysql";
} 
