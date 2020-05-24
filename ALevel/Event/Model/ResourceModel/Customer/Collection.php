<?php
namespace ALevel\Event\Model\ResourceModel\Customer;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use ALevel\Event\Model\ResourceModel\Customer as ResourceModelCustomer;
use ALevel\Event\Model\Customer as BusinessModelCustomer;

/**
 * Class Collection.
 *
 * @package ALevel\Event\Model\ResourceModel\Customer
 */
class Collection extends AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(BusinessModelCustomer::class, ResourceModelCustomer::class);
    }

}
