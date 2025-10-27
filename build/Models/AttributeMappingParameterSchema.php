<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeMappingParameterSchema
 */
class AttributeMappingParameterSchema
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The given parameter can be provided multiple times (for example, multiple input strings in the Concatenate(string,string,...) function). */
    public ?bool $allowMultipleOccurrences = null;

    /** Parameter name. */
    public ?string $name = null;

    /** true if the parameter is required; otherwise false. */
    public ?bool $required = null;

    /**  */
    public ?AttributeType $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['allowMultipleOccurrences'])) {
            $this->allowMultipleOccurrences = is_bool($data['allowMultipleOccurrences']) ? $data['allowMultipleOccurrences'] : (bool)$data['allowMultipleOccurrences'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['required'])) {
            $this->required = is_bool($data['required']) ? $data['required'] : (bool)$data['required'];
        }
        if (isset($data['type'])) {
            $this->type = is_string($data['type']) ? AttributeType::tryFrom($data['type']) : $data['type'];
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
