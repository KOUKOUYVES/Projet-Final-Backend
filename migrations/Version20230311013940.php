<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230311013940 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE rapport_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE rapport (id INT NOT NULL, utilisateur_id UUID DEFAULT NULL, titre_rapport VARCHAR(255) NOT NULL, texte_rapport VARCHAR(255) NOT NULL, rapport_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_BE34A09CFB88E14F ON rapport (utilisateur_id)');
        $this->addSql('COMMENT ON COLUMN rapport.utilisateur_id IS \'(DC2Type:uuid)\'');
        $this->addSql('ALTER TABLE rapport ADD CONSTRAINT FK_BE34A09CFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE utilisateur ADD contact VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD firstname VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD lastname VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD email VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD confirmpassword VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE rapport_id_seq CASCADE');
        $this->addSql('ALTER TABLE rapport DROP CONSTRAINT FK_BE34A09CFB88E14F');
        $this->addSql('DROP TABLE rapport');
        $this->addSql('ALTER TABLE utilisateur DROP contact');
        $this->addSql('ALTER TABLE utilisateur DROP firstname');
        $this->addSql('ALTER TABLE utilisateur DROP lastname');
        $this->addSql('ALTER TABLE utilisateur DROP email');
        $this->addSql('ALTER TABLE utilisateur DROP confirmpassword');
    }
}
