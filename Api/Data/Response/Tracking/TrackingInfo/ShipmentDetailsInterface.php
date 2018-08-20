<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data\Response\Tracking\TrackingInfo;

/**
 * ShipmentInfo interface.
 *
 * DTO that Tracking information's shipment info.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface ShipmentDetailsInterface
{
    /**
     * Returns the shipper's name
     *
     * @return string
     */
    public function getShipperName(): string;

    /**
     * Returns the consignee's name
     *
     * @return string
     */
    public function getConsigneeName(): string;

    /**
     * Returns the shipment's date
     *
     * @return string
     */
    public function getShipmentDate(): string;

    /**
     * @return string
     */
    public function getOriginDescription(): string;

    /**
     * @return string
     */
    public function getDestinationDescription(): string;

    /**
     * @return float
     */
    public function getWeight(): float;

    /**
     * @return string
     */
    public function getEstimatedDeliveryDate(): string;
}
