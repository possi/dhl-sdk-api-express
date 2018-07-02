<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\RateRequest\Value;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * A dimension value.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Dimension implements ValueInterface
{
    /**
     * The value.
     *
     * @var null|float
     */
    private $value;

    /**
     * Constructor.
     *
     * @param float $value The value
     */
    public function __construct(float $value)
    {
        if ($value < 1.0) {
            throw new \InvalidArgumentException('Argument must be equal or greater than 1');
        }

        $this->value = $value;
    }

    /**
     * Returns the value.
     *
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * Returns the value as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->getValue();
    }
}