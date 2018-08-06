<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * TrackingPieceIDCollection class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class TrackingPieces
{
    /**
     * @var PieceInfoCollection
     */
    protected $PieceInfo;

    /**
     * @return PieceInfoCollection
     */
    public function getPieceInfo(): PieceInfoCollection
    {
      return $this->PieceInfo;
    }

    /**
     * @param PieceInfoCollection $PieceInfo
     * @return self
     */
    public function setPieceInfo(PieceInfoCollection $PieceInfo): self
    {
      $this->PieceInfo = $PieceInfo;
      return $this;
    }
}
