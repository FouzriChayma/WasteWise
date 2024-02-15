<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240215093338 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE stock_store_house DROP FOREIGN KEY FK_C425C9B0C6DF28A7');
        $this->addSql('ALTER TABLE stock_store_house DROP FOREIGN KEY FK_C425C9B0D2DE74E8');
        $this->addSql('DROP TABLE stock_store_house');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE stock_store_house (id_st INT NOT NULL, id_sh INT NOT NULL, INDEX IDX_C425C9B0D2DE74E8 (id_st), INDEX IDX_C425C9B0C6DF28A7 (id_sh), PRIMARY KEY(id_st, id_sh)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE stock_store_house ADD CONSTRAINT FK_C425C9B0C6DF28A7 FOREIGN KEY (id_sh) REFERENCES store_house (id_sh)');
        $this->addSql('ALTER TABLE stock_store_house ADD CONSTRAINT FK_C425C9B0D2DE74E8 FOREIGN KEY (id_st) REFERENCES stock (id_st)');
    }
}
