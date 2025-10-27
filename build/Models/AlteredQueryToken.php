<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlteredQueryToken
 */
class AlteredQueryToken
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Defines the length of a changed segment. */
    public ?float $length = null;

    /** Defines the offset of a changed segment. */
    public ?float $offset = null;

    /** Represents the corrected segment string. */
    public ?string $suggestion = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['length'])) {
            $this->length = is_numeric($data['length']) ? (float)$data['length'] : $data['length'];
        }
        if (isset($data['offset'])) {
            $this->offset = is_numeric($data['offset']) ? (float)$data['offset'] : $data['offset'];
        }
        if (isset($data['suggestion'])) {
            $this->suggestion = $data['suggestion'];
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
