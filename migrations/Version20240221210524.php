<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240221210524 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE our_order (idO INT UNSIGNED AUTO_INCREMENT NOT NULL, quantity_o INT NOT NULL, status_o VARCHAR(255) NOT NULL, total_o DOUBLE PRECISION DEFAULT NULL, id_st INT NOT NULL, INDEX IDX_3447DA8AD2DE74E8 (id_st), PRIMARY KEY(idO)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE our_order ADD CONSTRAINT FK_3447DA8AD2DE74E8 FOREIGN KEY (id_st) REFERENCES stock (id_st)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE our_order DROP FOREIGN KEY FK_3447DA8AD2DE74E8');
        $this->addSql('DROP TABLE our_order');
    }
}
