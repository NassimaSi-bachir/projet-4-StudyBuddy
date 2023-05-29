<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230529005215 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2C31518C7 FOREIGN KEY (view_id) REFERENCES view (id)');
        $this->addSql('ALTER TABLE video_author ADD CONSTRAINT FK_85F8780529C1004E FOREIGN KEY (video_id) REFERENCES video (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE video_author ADD CONSTRAINT FK_85F87805F675F31B FOREIGN KEY (author_id) REFERENCES author (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE video_category ADD CONSTRAINT FK_AECE2B7D29C1004E FOREIGN KEY (video_id) REFERENCES video (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE video_category ADD CONSTRAINT FK_AECE2B7D12469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE view CHANGE slug slug VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE video_author DROP FOREIGN KEY FK_85F8780529C1004E');
        $this->addSql('ALTER TABLE video_author DROP FOREIGN KEY FK_85F87805F675F31B');
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2C31518C7');
        $this->addSql('ALTER TABLE video_category DROP FOREIGN KEY FK_AECE2B7D29C1004E');
        $this->addSql('ALTER TABLE video_category DROP FOREIGN KEY FK_AECE2B7D12469DE2');
        $this->addSql('ALTER TABLE view CHANGE slug slug VARCHAR(255) NOT NULL');
    }
}
