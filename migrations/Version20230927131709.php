<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230927131709 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_8F91ABF0FB88E14F ON avis');
        $this->addSql('ALTER TABLE avis CHANGE utilisateur_id user_id INT DEFAULT NULL, CHANGE avis_contenu contenu LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0A76ED395 FOREIGN KEY (user_id) REFERENCES utilisateurs (utilisateur_id)');
        $this->addSql('CREATE INDEX IDX_8F91ABF0A76ED395 ON avis (user_id)');
        $this->addSql('ALTER TABLE chapitres CHANGE chapitre_contenu chapitre_contenu VARCHAR(65535) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0A76ED395');
        $this->addSql('DROP INDEX IDX_8F91ABF0A76ED395 ON avis');
        $this->addSql('ALTER TABLE avis CHANGE user_id utilisateur_id INT DEFAULT NULL, CHANGE contenu avis_contenu LONGTEXT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_8F91ABF0FB88E14F ON avis (utilisateur_id)');
        $this->addSql('ALTER TABLE chapitres CHANGE chapitre_contenu chapitre_contenu MEDIUMTEXT NOT NULL');
    }
}
