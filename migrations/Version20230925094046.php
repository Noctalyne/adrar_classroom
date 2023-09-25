<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230925094046 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chapitres ADD cours_id INT DEFAULT NULL, DROP cours');
        $this->addSql('ALTER TABLE chapitres ADD CONSTRAINT FK_508679FC7ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('CREATE INDEX IDX_508679FC7ECF78B0 ON chapitres (cours_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chapitres DROP FOREIGN KEY FK_508679FC7ECF78B0');
        $this->addSql('DROP INDEX IDX_508679FC7ECF78B0 ON chapitres');
        $this->addSql('ALTER TABLE chapitres ADD cours VARCHAR(255) NOT NULL, DROP cours_id');
    }
}
