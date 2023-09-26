<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230925144927 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE utilisateur_chapitre (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, chapitre_id INT DEFAULT NULL, chapitre_termine SMALLINT NOT NULL, INDEX IDX_921949BAFB88E14F (utilisateur_id), INDEX IDX_921949BA1FBEEF7B (chapitre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE utilisateur_chapitre ADD CONSTRAINT FK_921949BAFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE utilisateur_chapitre ADD CONSTRAINT FK_921949BA1FBEEF7B FOREIGN KEY (chapitre_id) REFERENCES chapitres (id)');
        $this->addSql('ALTER TABLE chapitres CHANGE contenu contenu VARCHAR(65535) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateur_chapitre DROP FOREIGN KEY FK_921949BAFB88E14F');
        $this->addSql('ALTER TABLE utilisateur_chapitre DROP FOREIGN KEY FK_921949BA1FBEEF7B');
        $this->addSql('DROP TABLE utilisateur_chapitre');
        $this->addSql('ALTER TABLE chapitres CHANGE contenu contenu MEDIUMTEXT NOT NULL');
    }
}
