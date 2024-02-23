<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240222220936 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE complaint DROP FOREIGN KEY FK_5F2732B5CF18BB82');
        $this->addSql('DROP INDEX UNIQ_5F2732B5CF18BB82 ON complaint');
        $this->addSql('ALTER TABLE complaint DROP reponse_id');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC7EDAE188E');
        $this->addSql('DROP INDEX IDX_5FB6DEC7EDAE188E ON reponse');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE complaint ADD reponse_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE complaint ADD CONSTRAINT FK_5F2732B5CF18BB82 FOREIGN KEY (reponse_id) REFERENCES reponse (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5F2732B5CF18BB82 ON complaint (reponse_id)');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC7EDAE188E FOREIGN KEY (complaint_id) REFERENCES complaint (id)');
        $this->addSql('CREATE INDEX IDX_5FB6DEC7EDAE188E ON reponse (complaint_id)');
    }
}
