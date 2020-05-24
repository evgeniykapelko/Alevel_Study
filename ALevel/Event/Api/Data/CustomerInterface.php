<?php

namespace ALevel\Event\Api\Data;

/**
 * Interface CustomerInterface.
 *
 * @package ALevel\Event\Api\Data
 */
interface CustomerInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return void
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getCustomerName();

    /**
     * @param string $name
     * @return void
     */
    public function setCustomerName($name);

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param string $email
     * @return void
     */
    public function setEmail($email);
}
