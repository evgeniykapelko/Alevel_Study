<?php
namespace ALevel\Event\Model;

use ALevel\Event\Api\Data\CustomerInterface;
use Magento\Framework\Model\AbstractModel;
use ALevel\Event\Model\ResourceModel\Customer as ResourceModelCustomer;

/**
 * Class Customer.
 *
 * @package ALevel\Event\Model
 */
class Customer extends AbstractModel implements CustomerInterface
{
    const CUSTOMER_NAME = 'customer_name';

    const EMAIL = 'email';

    /**
     *  init resource model.
     */
    protected function _construct()
    {
        $this->_init(ResourceModelCustomer::class);
    }

    public function getCustomerName()
    {
        return $this->_getData(self::CUSTOMER_NAME);
    }

    public function setCustomerName($name)
    {
        $this->setData(self::CUSTOMER_NAME, $name);
    }

    public function getEmail()
    {
        return $this->_getData(self::EMAIL);
    }

    public function setEmail($email)
    {
        $this->setData(self::EMAIL, $email);
    }
}
