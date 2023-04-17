<?php

declare(strict_types=1);

namespace MagentoTraining\TrainingModule\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Stdlib\DateTime\TimezoneInterface;

class View extends Action
{

    protected $_timezoneInterface;

    protected $_resultFactory;

    public function __construct(Context $context, TimezoneInterface $timezoneInterface, ResultFactory $resultFactory) {
        $this->_timezoneInterface = $timezoneInterface;
        parent::__construct($context);
        $this->_resultFactory = $resultFactory;
    }

    public function execute()
    {
        $date = $this->_timezoneInterface->date()->format('F d, Y');
        $page = $this->_resultFactory->create(ResultFactory::TYPE_PAGE);
        $page->addHandle('magentotraining_trainingmodule_page_view');
        $page->getLayout()
            ->getBlock('magentotraining.trainingmodule.temp1')
            ->setData('date', $date);

        return $page;

    }
}