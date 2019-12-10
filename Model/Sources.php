<?php

namespace Ampersand\DisableStockReservation\Model;

use Magento\Framework\Model\AbstractModel;
use Ampersand\DisableStockReservation\Api\Data\SourcesInterface;

/**
 * Class Sources
 * @package Ampersand\DisableStockReservation\Model
 */
class Sources extends AbstractModel implements SourcesInterface
{
    /**
     *
     */
    public function _construct()
    {
        $this->_init(\Ampersand\DisableStockReservation\Model\ResourceModel\Sources::class);
    }

    /**
     * @return null|string
     */
    public function getSources(): ?string
    {
        return $this->getData('sources');
    }

    /**
     * @param string $sources
     * @return SourcesInterface
     */
    public function setSources(string $sources): SourcesInterface
    {
        return $this->setData('sources', $sources);
    }

    /**
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->getData('order_id');
    }

    /**
     * @param int $id
     * @return SourcesInterface
     */
    public function setOrderId($id): SourcesInterface
    {
        return $this->setData('order_id', $id);
    }
}