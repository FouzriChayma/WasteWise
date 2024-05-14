<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240308142746 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE association (id_association INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, image_path VARCHAR(255) NOT NULL, PRIMARY KEY(id_association)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE complaint (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, location VARCHAR(255) NOT NULL, submission_date DATE NOT NULL, picture VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, INDEX IDX_5F2732B5A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE donation (id INT AUTO_INCREMENT NOT NULL, nc_id INT DEFAULT NULL, accepted TINYINT(1) NOT NULL, description VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', quantity INT NOT NULL, INDEX IDX_31E581A050B37AFE (nc_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mission (id_mission INT AUTO_INCREMENT NOT NULL, truck_id INT DEFAULT NULL, id_waste_id INT DEFAULT NULL, start_date DATETIME NOT NULL, end_date DATETIME NOT NULL, location VARCHAR(255) NOT NULL, type_d VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_9067F23CC6957CCE (truck_id), UNIQUE INDEX UNIQ_9067F23CAAB1CE57 (id_waste_id), PRIMARY KEY(id_mission)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notification (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE our_order (id_st INT NOT NULL, id_user INT DEFAULT NULL, idO INT UNSIGNED AUTO_INCREMENT NOT NULL, quantity_o INT NOT NULL, status_o VARCHAR(255) DEFAULT NULL, total_o DOUBLE PRECISION DEFAULT NULL, created_at DATETIME NOT NULL, location_o VARCHAR(255) DEFAULT NULL, email_u VARCHAR(255) DEFAULT NULL, INDEX IDX_3447DA8AD2DE74E8 (id_st), INDEX IDX_3447DA8A6B3CA4B (id_user), PRIMARY KEY(idO)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE planification (id_plan INT AUTO_INCREMENT NOT NULL, id_mission INT DEFAULT NULL, id_driver INT DEFAULT NULL, date DATETIME NOT NULL, location VARCHAR(255) NOT NULL, INDEX IDX_FFC02E1B4EFA5B4C (id_mission), INDEX IDX_FFC02E1B3751C934 (id_driver), PRIMARY KEY(id_plan)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponse (id INT AUTO_INCREMENT NOT NULL, complaint_id INT NOT NULL, message VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_5FB6DEC7EDAE188E (complaint_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stock (id_st INT AUTO_INCREMENT NOT NULL, id_sh INT NOT NULL, name_st VARCHAR(255) NOT NULL, quantity_st INT NOT NULL, image_st VARCHAR(255) NOT NULL, date_d_ajout_st DATETIME NOT NULL, buying_price NUMERIC(10, 3) DEFAULT NULL, selling_price NUMERIC(10, 3) DEFAULT NULL, INDEX IDX_4B365660C6DF28A7 (id_sh), PRIMARY KEY(id_st)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE store_house (id_sh INT AUTO_INCREMENT NOT NULL, name_sh VARCHAR(255) NOT NULL, location_sh VARCHAR(255) NOT NULL, capacity INT NOT NULL, quantity_sum INT NOT NULL, is_full TINYINT(1) NOT NULL, description_sh VARCHAR(255) NOT NULL, PRIMARY KEY(id_sh)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE truck (id INT AUTO_INCREMENT NOT NULL, matricule VARCHAR(255) NOT NULL, disponibilite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, user_name VARCHAR(255) DEFAULT NULL, role VARCHAR(255) NOT NULL, image_path VARCHAR(255) NOT NULL, is_banned INT DEFAULT 0 NOT NULL, is_verified INT DEFAULT 0 NOT NULL, ddn VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE waste (id INT AUTO_INCREMENT NOT NULL, truck_id INT DEFAULT NULL, nb_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, location VARCHAR(255) NOT NULL, etat VARCHAR(255) NOT NULL, quantite INT NOT NULL, INDEX IDX_2E76A488C6957CCE (truck_id), INDEX IDX_2E76A488E80F1D9B (nb_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE complaint ADD CONSTRAINT FK_5F2732B5A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE donation ADD CONSTRAINT FK_31E581A050B37AFE FOREIGN KEY (nc_id) REFERENCES association (id_association) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23CC6957CCE FOREIGN KEY (truck_id) REFERENCES truck (id)');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23CAAB1CE57 FOREIGN KEY (id_waste_id) REFERENCES waste (id)');
        $this->addSql('ALTER TABLE our_order ADD CONSTRAINT FK_3447DA8AD2DE74E8 FOREIGN KEY (id_st) REFERENCES stock (id_st)');
        $this->addSql('ALTER TABLE our_order ADD CONSTRAINT FK_3447DA8A6B3CA4B FOREIGN KEY (id_user) REFERENCES user (id)');
        $this->addSql('ALTER TABLE planification ADD CONSTRAINT FK_FFC02E1B4EFA5B4C FOREIGN KEY (id_mission) REFERENCES mission (id_mission)');
        $this->addSql('ALTER TABLE planification ADD CONSTRAINT FK_FFC02E1B3751C934 FOREIGN KEY (id_driver) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC7EDAE188E FOREIGN KEY (complaint_id) REFERENCES complaint (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE stock ADD CONSTRAINT FK_4B365660C6DF28A7 FOREIGN KEY (id_sh) REFERENCES store_house (id_sh)');
        $this->addSql('ALTER TABLE waste ADD CONSTRAINT FK_2E76A488C6957CCE FOREIGN KEY (truck_id) REFERENCES truck (id)');
        $this->addSql('ALTER TABLE waste ADD CONSTRAINT FK_2E76A488E80F1D9B FOREIGN KEY (nb_id) REFERENCES stock (id_st)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE complaint DROP FOREIGN KEY FK_5F2732B5A76ED395');
        $this->addSql('ALTER TABLE donation DROP FOREIGN KEY FK_31E581A050B37AFE');
        $this->addSql('ALTER TABLE mission DROP FOREIGN KEY FK_9067F23CC6957CCE');
        $this->addSql('ALTER TABLE mission DROP FOREIGN KEY FK_9067F23CAAB1CE57');
        $this->addSql('ALTER TABLE our_order DROP FOREIGN KEY FK_3447DA8AD2DE74E8');
        $this->addSql('ALTER TABLE our_order DROP FOREIGN KEY FK_3447DA8A6B3CA4B');
        $this->addSql('ALTER TABLE planification DROP FOREIGN KEY FK_FFC02E1B4EFA5B4C');
        $this->addSql('ALTER TABLE planification DROP FOREIGN KEY FK_FFC02E1B3751C934');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC7EDAE188E');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE stock DROP FOREIGN KEY FK_4B365660C6DF28A7');
        $this->addSql('ALTER TABLE waste DROP FOREIGN KEY FK_2E76A488C6957CCE');
        $this->addSql('ALTER TABLE waste DROP FOREIGN KEY FK_2E76A488E80F1D9B');
        $this->addSql('DROP TABLE association');
        $this->addSql('DROP TABLE complaint');
        $this->addSql('DROP TABLE donation');
        $this->addSql('DROP TABLE mission');
        $this->addSql('DROP TABLE notification');
        $this->addSql('DROP TABLE our_order');
        $this->addSql('DROP TABLE planification');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE stock');
        $this->addSql('DROP TABLE store_house');
        $this->addSql('DROP TABLE truck');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE waste');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
