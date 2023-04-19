<?php

declare(strict_types=1);

namespace MagentoTraining\TrainingModule\Controller\AdminHtml\Post;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\HttpGetActionInterface;

class Index extends Action implements HttpGetActionInterface
{
    public function execute()
    {
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $page->setActiveMenu('MagentoTraining_TrainingModule::trainingblogpost');
        $page->getConfig()
            ->getTitle()
            ->prepend(__('Manage Training Blog Posts'));

        return $page;
    }
}