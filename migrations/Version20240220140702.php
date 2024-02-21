<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240220140702 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE waste ADD truck_id INT DEFAULT NULL, DROP id_waste');
        $this->addSql('ALTER TABLE waste ADD CONSTRAINT FK_2E76A488C6957CCE FOREIGN KEY (truck_id) REFERENCES truck (id)');
        $this->addSql('CREATE INDEX IDX_2E76A488C6957CCE ON waste (truck_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE waste DROP FOREIGN KEY FK_2E76A488C6957CCE');
        $this->addSql('DROP INDEX IDX_2E76A488C6957CCE ON waste');
        $this->addSql('ALTER TABLE waste ADD id_waste VARCHAR(255) NOT NULL, DROP truck_id');
    }
}
