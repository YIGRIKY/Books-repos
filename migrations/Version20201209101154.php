<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201209101154 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE books_category (books_id INT NOT NULL, category_id INT NOT NULL, PRIMARY KEY(books_id, category_id))');
        $this->addSql('CREATE INDEX IDX_6F43A9B97DD8AC20 ON books_category (books_id)');
        $this->addSql('CREATE INDEX IDX_6F43A9B912469DE2 ON books_category (category_id)');
        $this->addSql('ALTER TABLE books_category ADD CONSTRAINT FK_6F43A9B97DD8AC20 FOREIGN KEY (books_id) REFERENCES books (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE books_category ADD CONSTRAINT FK_6F43A9B912469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('DROP TABLE categories_and_books');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE TABLE categories_and_books (book_id_id INT NOT NULL, category_id_id INT NOT NULL, PRIMARY KEY(book_id_id, category_id_id))');
        $this->addSql('CREATE INDEX idx_39bb4a3a71868b2e ON categories_and_books (book_id_id)');
        $this->addSql('CREATE INDEX idx_39bb4a3a9777d11e ON categories_and_books (category_id_id)');
        $this->addSql('ALTER TABLE categories_and_books ADD CONSTRAINT fk_39bb4a3a71868b2e FOREIGN KEY (book_id_id) REFERENCES books (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE categories_and_books ADD CONSTRAINT fk_39bb4a3a9777d11e FOREIGN KEY (category_id_id) REFERENCES category (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('DROP TABLE books_category');
    }
}
