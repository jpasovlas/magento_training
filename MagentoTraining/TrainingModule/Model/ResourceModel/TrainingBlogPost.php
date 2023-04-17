<?php

declare(strict_types=1);

namespace MagentoTraining\TrainingModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class TrainingBlogPost extends AbstractDb
{
    private const TABLE_NAME = 'training_blog_post';
    private const PRIMARY_KEY  = 'post_id';

    public function _construct()
    {
        $this->_init(self::TABLE_NAME, self::PRIMARY_KEY);
    }
}