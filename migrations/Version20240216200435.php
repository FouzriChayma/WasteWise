<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240216200435 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE truck DROP INDEX matricule_2, ADD UNIQUE INDEX UNIQ_CDCCF30A12B2DC9C (matricule)');
        $this->addSql('DROP INDEX matricule ON truck');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE UNIQUE INDEX matricule ON truck (matricule)');
        $this->addSql('DROP INDEX uniq_cdccf30a12b2dc9c ON truck');
        $this->addSql('CREATE UNIQUE INDEX matricule_2 ON truck (matricule)');
    }
}
