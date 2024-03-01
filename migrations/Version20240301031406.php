<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240301031406 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE our_order ADD total_o DOUBLE PRECISION DEFAULT NULL, DROP totalO, CHANGE idO idO INT UNSIGNED AUTO_INCREMENT NOT NULL, CHANGE created_at created_at DATETIME NOT NULL, CHANGE quantityO quantity_o INT NOT NULL, CHANGE statusO status_o VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE our_order ADD CONSTRAINT FK_3447DA8AD2DE74E8 FOREIGN KEY (id_st) REFERENCES stock (id_st)');
        $this->addSql('CREATE INDEX IDX_3447DA8AD2DE74E8 ON our_order (id_st)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE our_order DROP FOREIGN KEY FK_3447DA8AD2DE74E8');
        $this->addSql('DROP INDEX IDX_3447DA8AD2DE74E8 ON our_order');
        $this->addSql('ALTER TABLE our_order ADD totalO DOUBLE PRECISION DEFAULT \'0\' NOT NULL, DROP total_o, CHANGE idO idO INT AUTO_INCREMENT NOT NULL, CHANGE created_at created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE quantity_o quantityO INT NOT NULL, CHANGE status_o statusO VARCHAR(255) DEFAULT NULL');
    }
}
