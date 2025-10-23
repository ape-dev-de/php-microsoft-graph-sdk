<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FilterOperatorSchema
 */
class FilterOperatorSchema
{
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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['arity'])) {
            $this->arity = is_array($data['arity']) ? new ScopeOperatorType($data['arity']) : $data['arity'];
        }
        if (isset($data['multivaluedComparisonType'])) {
            $this->multivaluedComparisonType = is_array($data['multivaluedComparisonType']) ? new ScopeOperatorMultiValuedComparisonType($data['multivaluedComparisonType']) : $data['multivaluedComparisonType'];
        }
        if (isset($data['supportedAttributeTypes'])) {
            $this->supportedAttributeTypes = $data['supportedAttributeTypes'];
        }
    }
}
