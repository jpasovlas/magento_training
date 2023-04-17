<?php

declare(strict_types=1);

namespace MagentoTraining\TrainingModule\Model;

use MagentoTraining\TrainingModule\Model\TrainingBlogPost;
use MagentoTraining\TrainingModule\Model\ResourceModel\TrainingBlogPost as TrainingBlogPostResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class TrainingBlogPost extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(TrainingBlogPost::class, TrainingBlogPostResource::class);
    }
}