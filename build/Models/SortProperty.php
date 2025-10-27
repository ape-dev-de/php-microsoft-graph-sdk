<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SortProperty
 */
class SortProperty
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** True if the sort order is descending. Default is false, with the sort order as ascending. Optional. */
    public ?bool $isDescending = null;

    /** The name of the property to sort on. Required. */
    public ?string $name = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isDescending'])) {
            $this->isDescending = is_bool($data['isDescending']) ? $data['isDescending'] : (bool)$data['isDescending'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
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
