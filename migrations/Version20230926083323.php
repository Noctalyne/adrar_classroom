<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230926083323 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE chapitres (chapitre_id INT AUTO_INCREMENT NOT NULL, id_cours INT DEFAULT NULL, chapitre_titre VARCHAR(255) NOT NULL, chapitre_contenu VARCHAR(65535) NOT NULL, chapitre_position INT NOT NULL, INDEX IDX_508679FC134FCDAC (id_cours), PRIMARY KEY(chapitre_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours (cours_id INT AUTO_INCREMENT NOT NULL, cours_titre VARCHAR(255) NOT NULL, cours_synopsis VARCHAR(255) NOT NULL, cours_niveau SMALLINT NOT NULL, cours_temps_estime INT NOT NULL, cours_image VARCHAR(255) NOT NULL, cours_date VARCHAR(255) NOT NULL, cours_cree SMALLINT NOT NULL, PRIMARY KEY(cours_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs (utilisateur_id INT AUTO_INCREMENT NOT NULL, roles JSON NOT NULL, utilisateur_mot_de_passe VARCHAR(255) NOT NULL, utilisateur_nom VARCHAR(255) NOT NULL, utilisateur_prenom VARCHAR(255) NOT NULL, utilisateur_email VARCHAR(255) NOT NULL, utilisateur_image VARCHAR(255) NOT NULL, PRIMARY KEY(utilisateur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs_chapitres (utilisateur_chapitre_id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, chapitre_id INT DEFAULT NULL, utilisateur_chapitre_termine SMALLINT NOT NULL, INDEX IDX_A32407E7FB88E14F (utilisateur_id), INDEX IDX_A32407E71FBEEF7B (chapitre_id), PRIMARY KEY(utilisateur_chapitre_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE chapitres ADD CONSTRAINT FK_508679FC134FCDAC FOREIGN KEY (id_cours) REFERENCES cours (cours_id)');
        $this->addSql('ALTER TABLE utilisateurs_chapitres ADD CONSTRAINT FK_A32407E7FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs (utilisateur_id)');
        $this->addSql('ALTER TABLE utilisateurs_chapitres ADD CONSTRAINT FK_A32407E71FBEEF7B FOREIGN KEY (chapitre_id) REFERENCES chapitres (chapitre_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chapitres DROP FOREIGN KEY FK_508679FC134FCDAC');
        $this->addSql('ALTER TABLE utilisateurs_chapitres DROP FOREIGN KEY FK_A32407E7FB88E14F');
        $this->addSql('ALTER TABLE utilisateurs_chapitres DROP FOREIGN KEY FK_A32407E71FBEEF7B');
        $this->addSql('DROP TABLE chapitres');
        $this->addSql('DROP TABLE cours');
        $this->addSql('DROP TABLE utilisateurs');
        $this->addSql('DROP TABLE utilisateurs_chapitres');
    }
}
