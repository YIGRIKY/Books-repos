<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201206150827 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE categories_and_books_id_seq CASCADE');
        $this->addSql('CREATE TABLE categories_and_books (book_id_id INT NOT NULL, category_id_id INT NOT NULL, PRIMARY KEY(book_id_id, category_id_id))');
        $this->addSql('CREATE INDEX IDX_39BB4A3A71868B2E ON categories_and_books (book_id_id)');
        $this->addSql('CREATE INDEX IDX_39BB4A3A9777D11E ON categories_and_books (category_id_id)');
        $this->addSql('ALTER TABLE categories_and_books ADD CONSTRAINT FK_39BB4A3A71868B2E FOREIGN KEY (book_id_id) REFERENCES books (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE categories_and_books ADD CONSTRAINT FK_39BB4A3A9777D11E FOREIGN KEY (category_id_id) REFERENCES category (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE categories_and_books_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('DROP TABLE categories_and_books');
    }
}
