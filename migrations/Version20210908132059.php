<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210908132059 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ingredient ADD intitule VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE operation ADD description VARCHAR(255) NOT NULL, ADD recette_id VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE recette ADD titre VARCHAR(255) NOT NULL, ADD resume VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ingredient DROP intitule');
        $this->addSql('ALTER TABLE operation DROP description, DROP recette_id');
        $this->addSql('ALTER TABLE recette DROP titre, DROP resume');
    }
}
