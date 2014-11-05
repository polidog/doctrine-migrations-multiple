<?php

namespace Polidog\App\Util;


abstract class AbstractPostgresMigration extends AbstractMigration
{
    /**
     * @var string
     */
    protected $connectionName = "postgres";
} 
