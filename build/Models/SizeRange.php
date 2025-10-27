<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SizeRange
 */
class SizeRange
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['maximumSize'])) {
            $this->maximumSize = is_numeric($data['maximumSize']) ? (float)$data['maximumSize'] : $data['maximumSize'];
        }
        if (isset($data['minimumSize'])) {
            $this->minimumSize = is_numeric($data['minimumSize']) ? (float)$data['minimumSize'] : $data['minimumSize'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
