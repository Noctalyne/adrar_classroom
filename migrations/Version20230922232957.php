<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230922232957 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis ADD avis_id INT AUTO_INCREMENT NOT NULL, DROP id, ADD PRIMARY KEY (avis_id)');
        $this->addSql('ALTER TABLE chapitres MODIFY id INT NOT NULL');
        
        $this->addSql('ALTER TABLE chapitres CHANGE id chapitre_id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE chapitres ADD PRIMARY KEY (chapitre_id)');
        $this->addSql('ALTER TABLE cours MODIFY id INT NOT NULL');
        
        $this->addSql('ALTER TABLE cours CHANGE id cours_id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE cours ADD PRIMARY KEY (cours_id)');
        $this->addSql('ALTER TABLE utilisateurs MODIFY id INT NOT NULL');
       
        $this->addSql('ALTER TABLE utilisateurs CHANGE id utilisateur_id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE utilisateurs ADD PRIMARY KEY (utilisateur_id)');
        $this->addSql('ALTER TABLE utilisateurs_chapitres MODIFY id INT NOT NULL');
        
        $this->addSql('ALTER TABLE utilisateurs_chapitres CHANGE id utilisateur_chapitre_id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE utilisateurs_chapitres ADD PRIMARY KEY (utilisateur_chapitre_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis MODIFY avis_id INT NOT NULL');
        
        $this->addSql('ALTER TABLE avis ADD id INT NOT NULL, DROP avis_id');
        $this->addSql('ALTER TABLE chapitres MODIFY chapitre_id INT NOT NULL');
       
        $this->addSql('ALTER TABLE chapitres CHANGE chapitre_id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE chapitres ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE cours MODIFY cours_id INT NOT NULL');
       
        $this->addSql('ALTER TABLE cours CHANGE cours_id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE cours ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE utilisateurs_chapitres MODIFY utilisateur_chapitre_id INT NOT NULL');
      
        $this->addSql('ALTER TABLE utilisateurs_chapitres CHANGE utilisateur_chapitre_id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE utilisateurs_chapitres ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE utilisateurs MODIFY utilisateur_id INT NOT NULL');
       
        $this->addSql('ALTER TABLE utilisateurs CHANGE utilisateur_id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE utilisateurs ADD PRIMARY KEY (id)');
    }
}
