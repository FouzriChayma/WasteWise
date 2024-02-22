<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240222114012 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE mission (id_mission INT AUTO_INCREMENT NOT NULL, start_date DATETIME NOT NULL, end_date DATETIME NOT NULL, location VARCHAR(255) NOT NULL, type_d VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(id_mission)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE planification (id_plan INT AUTO_INCREMENT NOT NULL, date DATETIME NOT NULL, location VARCHAR(255) NOT NULL, id_mission INT DEFAULT NULL, INDEX IDX_FFC02E1B4EFA5B4C (id_mission), PRIMARY KEY(id_plan)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, user_name VARCHAR(255) DEFAULT NULL, role VARCHAR(255) NOT NULL, prefrole VARCHAR(255) NOT NULL, image_path VARCHAR(255) NOT NULL, is_banned INT DEFAULT 0 NOT NULL, is_verified INT DEFAULT 0 NOT NULL, ddn VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE mission');
        $this->addSql('DROP TABLE planification');
        $this->addSql('DROP TABLE user');
    }
}
