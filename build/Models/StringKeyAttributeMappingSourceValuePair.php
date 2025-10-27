<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StringKeyAttributeMappingSourceValuePair
 */
class StringKeyAttributeMappingSourceValuePair
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The name of the parameter. */
    public ?string $key = null;

    /** 
     * The value of the parameter.
     * @var AttributeMappingSource|\stdClass|null
     */
    public mixed $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['key'])) {
            $this->key = $data['key'];
        }
        if (isset($data['value'])) {
            $this->value = is_array($data['value']) ? new AttributeMappingSource($data['value']) : $data['value'];
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
