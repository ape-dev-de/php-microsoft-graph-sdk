<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomSecurityAttributeDefinition resources
 *
 * Available select fields:
 * - attributeSet
 * - description
 * - isCollection
 * - isSearchable
 * - name
 * - status
 * - type
 * - usePreDefinedValuesOnly
 * - allowedValues
 */
class CustomSecurityAttributeDefinitionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CustomSecurityAttributeDefinition
     */
    public const FIELD_ATTRIBUTE_SET = 'attributeSet';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_IS_COLLECTION = 'isCollection';
    public const FIELD_IS_SEARCHABLE = 'isSearchable';
    public const FIELD_NAME = 'name';
    public const FIELD_STATUS = 'status';
    public const FIELD_TYPE = 'type';
    public const FIELD_USE_PRE_DEFINED_VALUES_ONLY = 'usePreDefinedValuesOnly';
    public const FIELD_ALLOWED_VALUES = 'allowedValues';

    /**
     * Select specific CustomSecurityAttributeDefinition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
