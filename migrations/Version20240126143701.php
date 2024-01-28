<?php

declare(strict_types=1);

namespace ProductManagementDoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Creates the "products" table.
 */
final class Version20240126143701 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Creates the products table.';
    }

    public function up(Schema $schema): void
    {
        $table = $schema->createTable('products');
        $table->addColumn('id', Types::GUID, ['notnull' => true,]);
        $table->addColumn('name', Types::STRING, ['length' => 255, 'notnull' => true]);
        $table->addColumn('price', Types::FLOAT, ['notnull' => true]);
        $table->addColumn('quantity', Types::INTEGER, ['notnull' => true]);
        $table->setPrimaryKey(['id']);
    }

    public function down(Schema $schema): void
    {
        $schema->dropTable('products');
    }
}
