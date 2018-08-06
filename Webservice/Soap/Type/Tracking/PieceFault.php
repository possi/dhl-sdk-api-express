<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * PieceFault class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class PieceFault
{
    /**
     * @var string
     */
    protected $PieceID;

    /**
     * @var string
     */
    protected $ConditionCode;

    /**
     * @var string
     */
    protected $ConditionData;

    /**
     * @param string $PieceID
     * @param string $ConditionCode
     * @param string $ConditionData
     */
    public function __construct(string $PieceID, string $ConditionCode, string $ConditionData)
    {
      $this->PieceID = $PieceID;
      $this->ConditionCode = $ConditionCode;
      $this->ConditionData = $ConditionData;
    }

    /**
     * @return string
     */
    public function getPieceID(): string
    {
      return $this->PieceID;
    }

    /**
     * @param string $PieceID
     * @return self
     */
    public function setPieceID(string $PieceID): self
    {
      $this->PieceID = $PieceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getConditionCode(): string
    {
      return $this->ConditionCode;
    }

    /**
     * @param string $ConditionCode
     * @return self
     */
    public function setConditionCode(string $ConditionCode): self
    {
      $this->ConditionCode = $ConditionCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getConditionData(): string
    {
      return $this->ConditionData;
    }

    /**
     * @param string $ConditionData
     * @return self
     */
    public function setConditionData(string $ConditionData): self
    {
      $this->ConditionData = $ConditionData;
      return $this;
    }
}
