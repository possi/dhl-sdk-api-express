<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\RateRequest\Value;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * The street lines type. Alpha numeric type with 35 characters.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class StreetLines implements ValueInterface
{
    private const MAX_CHARS = 35;

    /**
     * The street lines.
     *
     * @var null|string
     */
    private $value;

    /**
     * Constructor.
     *
     * @param null|string $value The value
     */
    public function __construct(?string $value)
    {
        if (strlen($value) > self::MAX_CHARS) {
            throw new \InvalidArgumentException('Only values with a maximum of 35 characters are allowed');
        }

        $this->value = $value;
    }

    /**
     * Returns the value as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->value;
    }
}