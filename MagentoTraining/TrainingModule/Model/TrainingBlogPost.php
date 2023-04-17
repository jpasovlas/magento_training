<?php

declare(strict_types=1);

namespace MagentoTraining\TrainingModule\Model;

use Magento\Framework\Model\AbstractModel;
use MagentoTraining\TrainingModule\Model\ResourceModel\TrainingBlogPost as TrainingBlogPostResource;

class TrainingBlogPost extends AbstractModel
{
    public function _construct()
    {
        $this->_init(TrainingBlogPostResource::class);
    }
}