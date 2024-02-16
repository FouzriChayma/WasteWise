<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240211195906 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE donation ADD nc_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE donation ADD CONSTRAINT FK_31E581A050B37AFE FOREIGN KEY (nc_id) REFERENCES association (id_association)');
        $this->addSql('CREATE INDEX IDX_31E581A050B37AFE ON donation (nc_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE donation DROP FOREIGN KEY FK_31E581A050B37AFE');
        $this->addSql('DROP INDEX IDX_31E581A050B37AFE ON donation');
        $this->addSql('ALTER TABLE donation DROP nc_id');
    }
}
