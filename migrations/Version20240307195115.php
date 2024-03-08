<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240307195115 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE waste ADD nb_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE waste ADD CONSTRAINT FK_2E76A488E80F1D9B FOREIGN KEY (nb_id) REFERENCES stock (id_st)');
        $this->addSql('CREATE INDEX IDX_2E76A488E80F1D9B ON waste (nb_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE waste DROP FOREIGN KEY FK_2E76A488E80F1D9B');
        $this->addSql('DROP INDEX IDX_2E76A488E80F1D9B ON waste');
        $this->addSql('ALTER TABLE waste DROP nb_id');
    }
}
