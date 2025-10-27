<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileStorageContainerCustomPropertyValue
 */
class FileStorageContainerCustomPropertyValue
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates whether the custom property is searchable. Optional. The default value is false. */
    public ?bool $isSearchable = null;

    /** Value of the custom property. Required. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isSearchable'])) {
            $this->isSearchable = is_bool($data['isSearchable']) ? $data['isSearchable'] : (bool)$data['isSearchable'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
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
