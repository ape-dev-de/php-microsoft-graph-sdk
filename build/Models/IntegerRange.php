<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IntegerRange
 */
class IntegerRange
{
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
        if (isset($data['end'])) {
            $this->end = $data['end'];
        }
        if (isset($data['start'])) {
            $this->start = $data['start'];
        }
    }
}
