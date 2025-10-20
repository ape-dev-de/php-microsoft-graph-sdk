<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttributeDefinition resources
 *
 * Available select fields:
 * - anchor
 * - apiExpressions
 * - caseExact
 * - defaultValue
 * - flowNullValues
 * - metadata
 * - multivalued
 * - mutability
 * - name
 * - referencedObjects
 * - required
 * - type
 */
class AttributeDefinitionQueryOptions extends QueryOptions
{
    public const FIELD_ANCHOR = 'anchor';
    public const FIELD_API_EXPRESSIONS = 'apiExpressions';
    public const FIELD_CASE_EXACT = 'caseExact';
    public const FIELD_DEFAULT_VALUE = 'defaultValue';
    public const FIELD_FLOW_NULL_VALUES = 'flowNullValues';
    public const FIELD_METADATA = 'metadata';
    public const FIELD_MULTIVALUED = 'multivalued';
    public const FIELD_MUTABILITY = 'mutability';
    public const FIELD_NAME = 'name';
    public const FIELD_REFERENCED_OBJECTS = 'referencedObjects';
    public const FIELD_REQUIRED = 'required';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific AttributeDefinition properties
     * 
     * @param array<string> $select Use AttributeDefinitionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
