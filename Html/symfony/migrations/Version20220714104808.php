<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220714104808 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE billeterie_demande (id INT AUTO_INCREMENT NOT NULL, ville_depart VARCHAR(255) NOT NULL, ville_arrivee VARCHAR(255) NOT NULL, classe VARCHAR(255) NOT NULL, compagnie VARCHAR(255) NOT NULL, date_depart VARCHAR(255) NOT NULL, civilite VARCHAR(255) NOT NULL, prenom_client VARCHAR(255) NOT NULL, nom_client VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone INT NOT NULL, remarque LONGTEXT NOT NULL, nb_adulte INT NOT NULL, nb_enfant INT NOT NULL, nb_bebe INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE billeterie_ligne (id INT AUTO_INCREMENT NOT NULL, type_voyageur VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, pernom VARCHAR(255) NOT NULL, date_de_naissance VARCHAR(255) NOT NULL, n_passport INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE billeterie_demande');
        $this->addSql('DROP TABLE billeterie_ligne');
    }
}
