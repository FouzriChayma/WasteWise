<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240220210228 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE store_house ADD quantity_sum INT NOT NULL, ADD is_full TINYINT(1) NOT NULL, DROP date_created_sh, DROP status_sh, CHANGE capacity_sh capacity INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE store_house ADD capacity_sh INT NOT NULL, ADD date_created_sh DATETIME NOT NULL, ADD status_sh VARCHAR(255) NOT NULL, DROP capacity, DROP quantity_sum, DROP is_full');
    }
}
