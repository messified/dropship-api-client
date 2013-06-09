<?php

namespace KoleImports\DropshipApi\Model\Request;

//use JMS\Serializer\Annotation\XmlRoot;

//@XmlRoot("order")
class Order
{

    /**
     * orderContainer
     * @var OrderCollection
     */
    private $orders = array();

    /**
     * PO Number
     * @var string
     */
    private $poNumber;

    /**
     * Notes
     * @var string
     */
    private $notes;

    /**
     * Ship Options
     * @var ShipOptions
     */
    private $shipOptions;

    /**
     * Shipping Address
     * @var Address
     */
    private $shipToAddress;

    /**
     * Items
     * @var ItemCollection
     */
    private $items;

    /**
     * Get PO Number
     *
     * @return string PO Number
     */
    public function getPoNumber()
    {
        return $this->poNumber;
    }

    /**
     * Set PO Number
     *
     * @param  string $poNumber PO Number
     * @return Order;
     */
    public function setPoNumber($poNumber)
    {
        $this->poNumber = $poNumber;

        return $this;
    }

    /**
     * Get Notes
     *
     * @return string Notes
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set Notes
     *
     * @param  string $notes Notes
     * @return Order;
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get Ship Options
     *
     * @return ShipOptions Ship Options
     */
    public function getShipOptions()
    {
        return $this->shipOptions;
    }

    /**
     * Set Ship Options
     *
     * @param  ShipOptions $shipOptions Ship Options
     * @return Order;
     */
    public function setShipOptions(ShipOptions $shipOptions)
    {
        $this->shipOptions = $shipOptions;

        return $this;
    }

    /**
     * Get Shipping Address
     *
     * @return Address Shipping Address
     */
    public function getShipToAddress()
    {
        return $this->shipToAddress;
    }

    /**
     * Set Shipping Address
     *
     * @param  Address $shipToAddress Shipping Address
     * @return Order;
     */
    public function setShipToAddress(Address $shipToAddress)
    {
        $this->shipToAddress = $shipToAddress;

        return $this;
    }

    /**
     * Get Items
     *
     * @return ItemCollection Items
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set Items
     *
     * @param  ItemCollection $items Items
     * @return Order;
     */
    public function setItems(ItemCollection $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
    * Get Orders
    *
    * @return OrderCollection Orders
    */

    /**
    * Set order data into container
    * @param orderContainer
    */
    public function setOrderContainer($orderContainer)
    {
        $this->orderContainer[] = $orderContainer;

        return $this;
    }

    public function getOrderContainer()
    {
        return $this->orderContainer;
    }



}
