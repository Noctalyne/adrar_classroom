<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230925132436 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur_chapitres (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, chapitre_id INT DEFAULT NULL, chapitre_termine SMALLINT NOT NULL, INDEX IDX_30288CD0FB88E14F (utilisateur_id), INDEX IDX_30288CD01FBEEF7B (chapitre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE utilisateur_chapitres ADD CONSTRAINT FK_30288CD0FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE utilisateur_chapitres ADD CONSTRAINT FK_30288CD01FBEEF7B FOREIGN KEY (chapitre_id) REFERENCES chapitres (id)');
        $this->addSql('ALTER TABLE chapitres CHANGE contenu contenu VARCHAR(65535) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateur_chapitres DROP FOREIGN KEY FK_30288CD0FB88E14F');
        $this->addSql('ALTER TABLE utilisateur_chapitres DROP FOREIGN KEY FK_30288CD01FBEEF7B');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE utilisateur_chapitres');
        $this->addSql('ALTER TABLE chapitres CHANGE contenu contenu MEDIUMTEXT NOT NULL');
    }
}
