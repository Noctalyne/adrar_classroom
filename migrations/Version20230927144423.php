<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230927144423 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chapitres CHANGE chapitre_contenu chapitre_contenu VARCHAR(65535) NOT NULL');
        $this->addSql('ALTER TABLE utilisateurs CHANGE utilisateur_nom utilisateur_nom VARCHAR(255) DEFAULT NULL, CHANGE utilisateur_prenom utilisateur_prenom VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateurs CHANGE utilisateur_nom utilisateur_nom VARCHAR(255) NOT NULL, CHANGE utilisateur_prenom utilisateur_prenom VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE chapitres CHANGE chapitre_contenu chapitre_contenu MEDIUMTEXT NOT NULL');
    }
}
