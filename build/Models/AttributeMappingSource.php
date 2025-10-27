<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeMappingSource
 */
class AttributeMappingSource
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Equivalent expression representation of this attributeMappingSource object. */
    public ?string $expression = null;

    /** Name parameter of the mapping source. Depending on the type property value, this can be the name of the function, the name of the source attribute, or a constant value to be used. */
    public ?string $name = null;

    /** 
     * If this object represents a function, lists function parameters. Parameters consist of attributeMappingSource objects themselves, allowing for complex expressions. If type isn't Function, this property is null/empty array.
     * @var StringKeyAttributeMappingSourceValuePair[]
     */
    public array $parameters = [];

    /**  */
    public ?AttributeMappingSourceType $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['expression'])) {
            $this->expression = $data['expression'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['parameters'])) {
            $this->parameters = $data['parameters'];
        }
        if (isset($data['type'])) {
            $this->type = is_array($data['type']) ? new AttributeMappingSourceType($data['type']) : $data['type'];
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
