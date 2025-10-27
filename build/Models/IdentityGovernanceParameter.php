<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceParameter
 */
class IdentityGovernanceParameter
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The name of the parameter. */
    public ?string $name = null;

    /** 
     * The values of the parameter.
     * @var string[]
     */
    public array $values = [];

    /**  */
    public ?IdentityGovernanceValueType $valueType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['values'])) {
            $this->values = $data['values'];
        }
        if (isset($data['valueType'])) {
            $this->valueType = is_string($data['valueType']) ? IdentityGovernanceValueType::tryFrom($data['valueType']) : $data['valueType'];
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
