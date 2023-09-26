<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230925145045 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chapitre CHANGE contenu contenu VARCHAR(65535) NOT NULL');
        $this->addSql('ALTER TABLE chapitre RENAME INDEX idx_508679fc7ecf78b0 TO IDX_8C62B0257ECF78B0');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chapitre CHANGE contenu contenu MEDIUMTEXT NOT NULL');
        $this->addSql('ALTER TABLE chapitre RENAME INDEX idx_8c62b0257ecf78b0 TO IDX_508679FC7ECF78B0');
    }
}
