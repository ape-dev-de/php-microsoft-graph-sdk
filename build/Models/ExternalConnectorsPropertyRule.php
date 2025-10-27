<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsPropertyRule
 */
class ExternalConnectorsPropertyRule
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?ExternalConnectorsRuleOperation $operation = null;

    /** The property from the externalItem schema. Required. */
    public ?string $property = null;

    /** 
     * A collection with one or many strings. One or more specified strings are matched with the specified property using the specified operation. Required.
     * @var string[]
     */
    public array $values = [];

    /**  */
    public ?BinaryOperator $valuesJoinedBy = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['operation'])) {
            $this->operation = is_array($data['operation']) ? new ExternalConnectorsRuleOperation($data['operation']) : $data['operation'];
        }
        if (isset($data['property'])) {
            $this->property = $data['property'];
        }
        if (isset($data['values'])) {
            $this->values = $data['values'];
        }
        if (isset($data['valuesJoinedBy'])) {
            $this->valuesJoinedBy = is_array($data['valuesJoinedBy']) ? new BinaryOperator($data['valuesJoinedBy']) : $data['valuesJoinedBy'];
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
