<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240218113520 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE stock ADD image_st VARCHAR(255) DEFAULT NULL, ADD buying_price NUMERIC(10, 3) DEFAULT NULL, ADD selling_price NUMERIC(10, 3) DEFAULT NULL, DROP date_derniere_mise_a_jour_st, DROP statut_st, CHANGE date_d_ajout_st date_d_ajout_st DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE stock ADD date_derniere_mise_a_jour_st DATETIME NOT NULL, ADD statut_st VARCHAR(255) NOT NULL, DROP image_st, DROP buying_price, DROP selling_price, CHANGE date_d_ajout_st date_d_ajout_st DATETIME NOT NULL');
    }
}
