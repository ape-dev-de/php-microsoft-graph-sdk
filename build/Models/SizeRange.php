<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SizeRange
 */
class SizeRange
{
    /** The maximum size (in kilobytes) that an incoming message must have in order for a condition or exception to apply. */
    public ?float $maximumSize = null;

    /** The minimum size (in kilobytes) that an incoming message must have in order for a condition or exception to apply. */
    public ?float $minimumSize = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['maximumSize'])) {
            $this->maximumSize = $data['maximumSize'];
        }
        if (isset($data['minimumSize'])) {
            $this->minimumSize = $data['minimumSize'];
        }
    }
}
