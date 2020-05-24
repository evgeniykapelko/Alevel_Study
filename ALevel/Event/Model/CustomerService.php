<?php

namespace ALevel\Event\Model;

use ALevel\Event\Api\Data\CustomerInterfaceFactory;
use Magento\Customer\Model\Session;

class CustomerService
{
    /**
     * @var \ALevel\Event\Api\Data\CustomerInterface
     */
    private $customer;
    /**
     * @var Session
     */
    private $customerSession;

    public function __construct(
        CustomerInterfaceFactory $customer,
        Session $customerSession
    ) {
        $this->customer = $customer;
        $this->customerSession = $customerSession;
    }

    public function prepareObjectCustomer()
    {
        $customerObject = $this->customer->create();
        $customerData = $this->customerSession->getCustomerData();
        $customerObject->setCustomerName($customerData->getFirstname());
        $customerObject->setEmail($customerData->getEmail());

        return $customerObject;
    }
}
