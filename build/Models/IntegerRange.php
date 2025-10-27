<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IntegerRange
 */
class IntegerRange
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The inclusive upper bound of the integer range. */
    public ?float $end = null;

    /** The inclusive lower bound of the integer range. */
    public ?float $start = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['end'])) {
            $this->end = $data['end'];
        }
        if (isset($data['start'])) {
            $this->start = $data['start'];
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
