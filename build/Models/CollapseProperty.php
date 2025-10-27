<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CollapseProperty
 */
class CollapseProperty
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Defines the collapse group to trim results. The properties in this collection must be sortable/refinable properties. Required.
     * @var string[]
     */
    public array $fields = [];

    /** Defines a maximum limit count for this field. This numeric value must be a positive integer. Required. */
    public ?float $limit = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['fields'])) {
            $this->fields = $data['fields'];
        }
        if (isset($data['limit'])) {
            $this->limit = is_numeric($data['limit']) ? (float)$data['limit'] : $data['limit'];
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
