<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Polidog\App\Util\AbstractPostgresMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20141105225451 extends AbstractPostgresMigration
{
    public function up(Schema $schema)
    {
        $this->addSql('CREATE TABLE comment (id SERIAL NOT NULL, post_id INT NOT NULL, name VARCHAR(255) NOT NULL, comment TEXT NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema)
    {
        $this->addSql('DROP TABLE comment');
    }
}
