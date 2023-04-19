<?php
namespace MagentoTraining\TrainingModule\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()
            ->newTable($setup->getTable('training_blog_post'))
            ->addColumn(
                'post_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'unsigned' => false, 'nullable' => false, 'primary' => true],
                'Post ID'
            )
            ->addColumn(
                'title',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable' => true],
                'Post Title'
            )
            ->addColumn(
                'url_key',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable' => true],
                'Post Url Key'
            )
            ->addColumn(
                'meta_keywords',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null,
                ['nullable' => true],
                'Post Meta Keywords'
            )
            ->addColumn(
                'meta_description',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null,
                ['nullable' => true],
                'Post Meta Description'
            )
            ->addColumn(
                'content',
                \Magento\Framework\DB\Ddl\Table::TYPE_MEDIUMTEXT,
                null,
                ['nullable' => true],
                'Post Content'
            )
            ->addColumn(
                'creation_time',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
                'Post Creation Time'
            )
            ->addColumn(
                'update_time',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],
                'Post Modification Time'
            )
            ->addColumn(
                'meta_title',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable' => true],
                'Post Meta Title'
            )
            ->setComment('Training Blog Post');

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
