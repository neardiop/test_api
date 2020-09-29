<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200624083737 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE clients (id INT AUTO_INCREMENT NOT NULL, clients_groupes_id INT DEFAULT NULL, code_agence_id INT DEFAULT NULL, client_id INT NOT NULL, pseudo_zou VARCHAR(255) NOT NULL, pass_zou VARCHAR(255) NOT NULL, pseudo VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, nom_client VARCHAR(255) NOT NULL, is_actif TINYINT(1) NOT NULL, INDEX IDX_C82E747C3E7421 (clients_groupes_id), INDEX IDX_C82E747B604B35 (code_agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE clients_groupes (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE code_agence (id INT AUTO_INCREMENT NOT NULL, nom_agence VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE destinataire (id INT AUTO_INCREMENT NOT NULL, clients_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, marge INT NOT NULL, type_destinataire VARCHAR(255) NOT NULL, INDEX IDX_FEA9FF92AB014612 (clients_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE missions (id INT AUTO_INCREMENT NOT NULL, destinataire_id INT DEFAULT NULL, clients_id INT DEFAULT NULL, numero_tournee_id INT DEFAULT NULL, nbr_colis INT NOT NULL, date_heure_prevue_enlevement DATETIME NOT NULL, date_heure_prevue_livraison DATETIME NOT NULL, date_heure_reelle_enlevement DATETIME NOT NULL, date_heure_reelle_livraison DATETIME NOT NULL, ponctualite INT NOT NULL, INDEX IDX_34F1D47EA4F84F6E (destinataire_id), INDEX IDX_34F1D47EAB014612 (clients_id), INDEX IDX_34F1D47E969C4DB0 (numero_tournee_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE numero_tournee (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statistique_client (id INT AUTO_INCREMENT NOT NULL, clients_id INT DEFAULT NULL, nombre_missions_prevues INT NOT NULL, nombre_colis_prevus INT NOT NULL, nombre_missions_enlevees INT NOT NULL, nombre_colis_enleves INT NOT NULL, nombre_missions_enlevees_scan INT NOT NULL, nombre_colis_enleves_scan INT NOT NULL, nombre_missions_livrees INT NOT NULL, nombre_colis_livres INT NOT NULL, nombre_missions_livrees_scan INT NOT NULL, nombre_colis_livres_scan INT NOT NULL, nombre_missions_retardees_livraison INT NOT NULL, nombre_missions_retardees_enlevement INT NOT NULL, date_livraison DATETIME NOT NULL, INDEX IDX_F98F445CAB014612 (clients_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statistique_client_points (id INT AUTO_INCREMENT NOT NULL, clients_id INT DEFAULT NULL, nombre_missions_prevues INT NOT NULL, nombre_colis_prevues INT NOT NULL, nombre_missions_enlevees INT NOT NULL, nombre_colis_enleves INT NOT NULL, nombre_missions_enlevees_scan INT NOT NULL, nombre_colis_enleves_scan INT NOT NULL, nombre_missions_livrees INT NOT NULL, nombre_colis_livres INT NOT NULL, nombre_missions_livrees_scan INT NOT NULL, nombre_colis_livres_scan INT NOT NULL, date_livraison DATETIME NOT NULL, INDEX IDX_66EDDC7DAB014612 (clients_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statistique_destinataire (id INT AUTO_INCREMENT NOT NULL, clients_id INT DEFAULT NULL, nombre_missions_prevues INT NOT NULL, nombre_colis_prevus INT NOT NULL, nombre_missions_enlevees INT NOT NULL, nombre_colis_enleves INT NOT NULL, nombre_missions_enlevees_scan INT NOT NULL, nombre_colis_enleves_scan INT NOT NULL, nombre_missions_livrees INT NOT NULL, nombre_colis_livres INT NOT NULL, nombre_missions_livrees_scan INT NOT NULL, nombre_colis_livres_scan INT NOT NULL, nombre_missions_retardees_enlevement INT NOT NULL, nombre_colis_retardes_enlevement INT NOT NULL, nombre_missions_retardees_livraison INT NOT NULL, nombre_colis_retardes_livraison INT NOT NULL, date_livraison DATETIME NOT NULL, resultat VARCHAR(255) NOT NULL, INDEX IDX_EEC578EAB014612 (clients_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statistique_destinataire_points (id INT AUTO_INCREMENT NOT NULL, clients_id INT DEFAULT NULL, nombre_missions_prevues INT NOT NULL, nombre_colis_prevus INT NOT NULL, nombre_missions_enlevees INT NOT NULL, nombre_colis_enleves INT NOT NULL, nombre_missions_enlevees_scan INT NOT NULL, nombre_colis_enleves_scan INT NOT NULL, nombre_missions_livrees INT NOT NULL, nombre_colis_livres INT NOT NULL, nombre_missions_livrees_scan INT NOT NULL, nombre_colis_livres_scan INT NOT NULL, date_livraison DATETIME NOT NULL, INDEX IDX_1AD09DA7AB014612 (clients_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statistique_destinataire_retards (id INT AUTO_INCREMENT NOT NULL, clients_id INT DEFAULT NULL, nombre_missions_retardees_enlevement INT NOT NULL, nombre_colis_retardes_enlevement INT NOT NULL, nombre_missions_retardees_livraison INT NOT NULL, nombre_colis_retardes_livraison INT NOT NULL, date_livraison DATETIME NOT NULL, INDEX IDX_A4BFA0D3AB014612 (clients_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statistique_heure_moyenne_dst (id INT AUTO_INCREMENT NOT NULL, clients_id INT DEFAULT NULL, date_livraison DATETIME NOT NULL, resultat VARCHAR(255) NOT NULL, INDEX IDX_7B01FE98AB014612 (clients_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statistique_heure_moyenne_dst_tournee (id INT AUTO_INCREMENT NOT NULL, clients_id INT DEFAULT NULL, date_livraison DATETIME NOT NULL, resultat VARCHAR(255) NOT NULL, INDEX IDX_12C470B8AB014612 (clients_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statistique_tournee (id INT AUTO_INCREMENT NOT NULL, clients_id INT DEFAULT NULL, numero_tournee_id INT DEFAULT NULL, nombre_missions_prevues INT NOT NULL, nombre_colis_prevus INT NOT NULL, nombre_missions_enlevees INT NOT NULL, nombre_colis_enleves INT NOT NULL, nombre_missions_enlevees_scan INT NOT NULL, nombre_colis_enleves_scan INT NOT NULL, nombre_missions_livrees INT NOT NULL, nombre_colis_livres INT NOT NULL, nombre_missions_livrees_scan INT NOT NULL, nombre_colis_livres_scan INT NOT NULL, nombre_missions_retardees INT NOT NULL, nombre_colis_retardes INT NOT NULL, nombre_missions_retardees_livraison INT NOT NULL, nombre_missions_retardees_enlevement INT NOT NULL, date_livraison DATETIME NOT NULL, INDEX IDX_92140E9AAB014612 (clients_id), INDEX IDX_92140E9A969C4DB0 (numero_tournee_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statistique_tournee_destinataires (id INT AUTO_INCREMENT NOT NULL, clients_id INT DEFAULT NULL, numero_tournee_id INT DEFAULT NULL, nombre_missions_prevues INT NOT NULL, nombre_colis_prevus INT NOT NULL, nombre_missions_enlevees INT NOT NULL, nombre_colis_enleves INT NOT NULL, nombre_missions_enlevees_scan INT NOT NULL, nombre_colis_enleves_scan INT NOT NULL, nombre_missions_livrees INT NOT NULL, nombre_colis_livres INT NOT NULL, nombre_missions_livrees_scan INT NOT NULL, nombre_colis_livres_scan INT NOT NULL, nombre_missions_retardees_enlevement INT NOT NULL, nombre_colis_retardes_livraison INT NOT NULL, nombre_missions_retardees_livraison INT NOT NULL, nombre_colis_retardes_enlevement INT NOT NULL, resultat VARCHAR(255) NOT NULL, date_livraison DATETIME NOT NULL, INDEX IDX_E9D44F01AB014612 (clients_id), INDEX IDX_E9D44F01969C4DB0 (numero_tournee_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statistique_tournee_points (id INT AUTO_INCREMENT NOT NULL, clients_id INT DEFAULT NULL, numero_tournee_id INT DEFAULT NULL, nombre_missions_prevues INT NOT NULL, nombre_colis_prevus INT NOT NULL, nombre_missions_enlevees INT NOT NULL, nombre_colis_enleves INT NOT NULL, nombre_missions_enlevees_scan INT NOT NULL, nombre_colis_enleves_scan INT NOT NULL, nombre_missions_livrees INT NOT NULL, nombre_colis_livres INT NOT NULL, nombre_missions_livrees_scan INT NOT NULL, nombre_colis_livres_scan INT NOT NULL, date_livraison DATETIME NOT NULL, INDEX IDX_2D1239C5AB014612 (clients_id), INDEX IDX_2D1239C5969C4DB0 (numero_tournee_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statistique_tournee_retards (id INT AUTO_INCREMENT NOT NULL, clients_id INT DEFAULT NULL, nombre_missions_retardees_enlevement INT NOT NULL, nombre_colis_retardes_enlevement INT NOT NULL, nombre_missions_retardees_livraison INT NOT NULL, nombre_colis_retardes_livraison INT NOT NULL, date_livraison DATETIME NOT NULL, INDEX IDX_7346203AB014612 (clients_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE clients ADD CONSTRAINT FK_C82E747C3E7421 FOREIGN KEY (clients_groupes_id) REFERENCES clients_groupes (id)');
        $this->addSql('ALTER TABLE clients ADD CONSTRAINT FK_C82E747B604B35 FOREIGN KEY (code_agence_id) REFERENCES code_agence (id)');
        $this->addSql('ALTER TABLE destinataire ADD CONSTRAINT FK_FEA9FF92AB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE missions ADD CONSTRAINT FK_34F1D47EA4F84F6E FOREIGN KEY (destinataire_id) REFERENCES destinataire (id)');
        $this->addSql('ALTER TABLE missions ADD CONSTRAINT FK_34F1D47EAB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE missions ADD CONSTRAINT FK_34F1D47E969C4DB0 FOREIGN KEY (numero_tournee_id) REFERENCES numero_tournee (id)');
        $this->addSql('ALTER TABLE statistique_client ADD CONSTRAINT FK_F98F445CAB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE statistique_client_points ADD CONSTRAINT FK_66EDDC7DAB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE statistique_destinataire ADD CONSTRAINT FK_EEC578EAB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE statistique_destinataire_points ADD CONSTRAINT FK_1AD09DA7AB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE statistique_destinataire_retards ADD CONSTRAINT FK_A4BFA0D3AB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE statistique_heure_moyenne_dst ADD CONSTRAINT FK_7B01FE98AB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE statistique_heure_moyenne_dst_tournee ADD CONSTRAINT FK_12C470B8AB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE statistique_tournee ADD CONSTRAINT FK_92140E9AAB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE statistique_tournee ADD CONSTRAINT FK_92140E9A969C4DB0 FOREIGN KEY (numero_tournee_id) REFERENCES numero_tournee (id)');
        $this->addSql('ALTER TABLE statistique_tournee_destinataires ADD CONSTRAINT FK_E9D44F01AB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE statistique_tournee_destinataires ADD CONSTRAINT FK_E9D44F01969C4DB0 FOREIGN KEY (numero_tournee_id) REFERENCES numero_tournee (id)');
        $this->addSql('ALTER TABLE statistique_tournee_points ADD CONSTRAINT FK_2D1239C5AB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE statistique_tournee_points ADD CONSTRAINT FK_2D1239C5969C4DB0 FOREIGN KEY (numero_tournee_id) REFERENCES numero_tournee (id)');
        $this->addSql('ALTER TABLE statistique_tournee_retards ADD CONSTRAINT FK_7346203AB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE destinataire DROP FOREIGN KEY FK_FEA9FF92AB014612');
        $this->addSql('ALTER TABLE missions DROP FOREIGN KEY FK_34F1D47EAB014612');
        $this->addSql('ALTER TABLE statistique_client DROP FOREIGN KEY FK_F98F445CAB014612');
        $this->addSql('ALTER TABLE statistique_client_points DROP FOREIGN KEY FK_66EDDC7DAB014612');
        $this->addSql('ALTER TABLE statistique_destinataire DROP FOREIGN KEY FK_EEC578EAB014612');
        $this->addSql('ALTER TABLE statistique_destinataire_points DROP FOREIGN KEY FK_1AD09DA7AB014612');
        $this->addSql('ALTER TABLE statistique_destinataire_retards DROP FOREIGN KEY FK_A4BFA0D3AB014612');
        $this->addSql('ALTER TABLE statistique_heure_moyenne_dst DROP FOREIGN KEY FK_7B01FE98AB014612');
        $this->addSql('ALTER TABLE statistique_heure_moyenne_dst_tournee DROP FOREIGN KEY FK_12C470B8AB014612');
        $this->addSql('ALTER TABLE statistique_tournee DROP FOREIGN KEY FK_92140E9AAB014612');
        $this->addSql('ALTER TABLE statistique_tournee_destinataires DROP FOREIGN KEY FK_E9D44F01AB014612');
        $this->addSql('ALTER TABLE statistique_tournee_points DROP FOREIGN KEY FK_2D1239C5AB014612');
        $this->addSql('ALTER TABLE statistique_tournee_retards DROP FOREIGN KEY FK_7346203AB014612');
        $this->addSql('ALTER TABLE clients DROP FOREIGN KEY FK_C82E747C3E7421');
        $this->addSql('ALTER TABLE clients DROP FOREIGN KEY FK_C82E747B604B35');
        $this->addSql('ALTER TABLE missions DROP FOREIGN KEY FK_34F1D47EA4F84F6E');
        $this->addSql('ALTER TABLE missions DROP FOREIGN KEY FK_34F1D47E969C4DB0');
        $this->addSql('ALTER TABLE statistique_tournee DROP FOREIGN KEY FK_92140E9A969C4DB0');
        $this->addSql('ALTER TABLE statistique_tournee_destinataires DROP FOREIGN KEY FK_E9D44F01969C4DB0');
        $this->addSql('ALTER TABLE statistique_tournee_points DROP FOREIGN KEY FK_2D1239C5969C4DB0');
        $this->addSql('DROP TABLE clients');
        $this->addSql('DROP TABLE clients_groupes');
        $this->addSql('DROP TABLE code_agence');
        $this->addSql('DROP TABLE destinataire');
        $this->addSql('DROP TABLE missions');
        $this->addSql('DROP TABLE numero_tournee');
        $this->addSql('DROP TABLE statistique_client');
        $this->addSql('DROP TABLE statistique_client_points');
        $this->addSql('DROP TABLE statistique_destinataire');
        $this->addSql('DROP TABLE statistique_destinataire_points');
        $this->addSql('DROP TABLE statistique_destinataire_retards');
        $this->addSql('DROP TABLE statistique_heure_moyenne_dst');
        $this->addSql('DROP TABLE statistique_heure_moyenne_dst_tournee');
        $this->addSql('DROP TABLE statistique_tournee');
        $this->addSql('DROP TABLE statistique_tournee_destinataires');
        $this->addSql('DROP TABLE statistique_tournee_points');
        $this->addSql('DROP TABLE statistique_tournee_retards');
    }
}
