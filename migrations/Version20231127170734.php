<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231127170734 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users ADD registry_id INT NOT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E94CB707ED FOREIGN KEY (registry_id) REFERENCES registry (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E94CB707ED ON users (registry_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E94CB707ED');
        $this->addSql('DROP INDEX UNIQ_1483A5E94CB707ED ON users');
        $this->addSql('ALTER TABLE users DROP registry_id');
    }
}
