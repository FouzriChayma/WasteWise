<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240215094146 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE stock ADD id_sh INT NOT NULL');
        $this->addSql('ALTER TABLE stock ADD CONSTRAINT FK_4B365660C6DF28A7 FOREIGN KEY (id_sh) REFERENCES store_house (id_sh)');
        $this->addSql('CREATE INDEX IDX_4B365660C6DF28A7 ON stock (id_sh)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE stock DROP FOREIGN KEY FK_4B365660C6DF28A7');
        $this->addSql('DROP INDEX IDX_4B365660C6DF28A7 ON stock');
        $this->addSql('ALTER TABLE stock DROP id_sh');
    }
}
