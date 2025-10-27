<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FilterOperatorSchema
 */
class FilterOperatorSchema
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?ScopeOperatorType $arity = null;

    /**  */
    public ?ScopeOperatorMultiValuedComparisonType $multivaluedComparisonType = null;

    /** 
     * Attribute types supported by the operator. Possible values are: Boolean, Binary, Reference, Integer, String.
     * @var AttributeType[]
     */
    public array $supportedAttributeTypes = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['arity'])) {
            $this->arity = is_string($data['arity']) ? ScopeOperatorType::tryFrom($data['arity']) : $data['arity'];
        }
        if (isset($data['multivaluedComparisonType'])) {
            $this->multivaluedComparisonType = is_string($data['multivaluedComparisonType']) ? ScopeOperatorMultiValuedComparisonType::tryFrom($data['multivaluedComparisonType']) : $data['multivaluedComparisonType'];
        }
        if (isset($data['supportedAttributeTypes'])) {
            $this->supportedAttributeTypes = $data['supportedAttributeTypes'];
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
