<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220804123936 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX FK_F453AD2848E37861 ON contact_agence');
        $this->addSql('DROP INDEX FK_F453AD28422BA59D ON contact_agence');
        $this->addSql('ALTER TABLE contact_agence DROP id_contact_agence_id, DROP id_contact_id, DROP id_contact_type_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact_agence ADD id_contact_agence_id INT NOT NULL, ADD id_contact_id INT DEFAULT NULL, ADD id_contact_type_id INT NOT NULL');
        $this->addSql('CREATE INDEX FK_F453AD2848E37861 ON contact_agence (id_contact_agence_id)');
        $this->addSql('CREATE INDEX FK_F453AD28422BA59D ON contact_agence (id_contact_id)');
    }
}
